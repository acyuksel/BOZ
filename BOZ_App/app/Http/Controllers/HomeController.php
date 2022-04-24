<?php

namespace App\Http\Controllers;

use App\Models\FrontEndSection;
use App\Services\FrontEndSectionService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var FrontEndSectionService
     */
    private $frontEndSectionService;

    public function __construct(FrontEndSectionService $frontEndSectionService)
    {
        $this->frontEndSectionService = $frontEndSectionService;
    }

    function index()
    {
        return view('home.index')->with(['sections' => FrontEndSection::where('page', 'Home')->orderBy('number')->get()]);
    }

    function addSection() {
        $query = \request()->query->get('number');

        $this->frontEndSectionService->add($query, 'Home');

        return redirect(route('home'));
    }

    function updateSection()
    {
        $attributes = request()->validate([
           'section_nr' => 'required|exists:front_end_sections,number',
            'header' => 'required',
            'content' => 'required'
        ]);

        $this->frontEndSectionService->update($attributes['section_nr'], $attributes['header'], $attributes['content']);

        return redirect(route('home'));
    }

    function deleteSection()
    {
        $attributes = request()->validate([
            'section_nr' => 'required|exists:front_end_sections,number',
        ]);

        $this->frontEndSectionService->delete($attributes['section_nr']);

        return redirect(route('home'));
    }
}
