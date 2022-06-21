<?php

namespace App\Http\Controllers;

use App\Services\FrontEndSectionService;
use App\Services\LocalizationService;
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

    function index(Request $request)
    {
        $locale = LocalizationService::getLocal($request);

        $sections = $this->frontEndSectionService->getAll('Home', $locale);
        return view('home.index')->with(['sections' => $sections]);
    }

    function addSection(Request $request)
    {
        $query = \request()->query->get('number');
        $locale = LocalizationService::getLocal($request);

        $this->frontEndSectionService->add($query, 'Home', $locale);

        return redirect(route('home'));
    }

    function updateSection(Request $request)
    {
        $locale = LocalizationService::getLocal($request);
        $attributes = request()->validate([
            'section_nr' => 'required|exists:front_end_sections,number',
            'header' => 'required',
            'content' => 'required'
        ]);

        $this->frontEndSectionService->update($attributes['section_nr'], $attributes['header'], $attributes['content'], 'Home', $locale);

        return redirect(route('home'));
    }

    function deleteSection(Request $request)
    {
        $locale = LocalizationService::getLocal($request);
        $attributes = request()->validate([
            'section_nr' => 'required|exists:front_end_sections,number',
        ]);

        $this->frontEndSectionService->delete($attributes['section_nr'], 'Home', $locale);

        return redirect(route('home'));
    }
}
