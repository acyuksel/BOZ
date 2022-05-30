<?php

namespace App\Http\Controllers;

use App\Services\FrontEndSectionService;

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
        $locale = \request()->cookies->get('app_language');

        $sections = $this->frontEndSectionService->getAll('Home', $locale);
        return view('home.index')->with(['sections' => $sections]);
    }

    function addSection() {
        $query = \request()->query->get('number');
        $locale = \request()->cookies->get('app_language');

        $this->frontEndSectionService->add($query, 'Home', $locale);

        return redirect(route('home'));
    }

    function updateSection()
    {
        $locale = \request()->cookies->get('app_language');
        $attributes = request()->validate([
           'section_nr' => 'required|exists:front_end_sections,number',
            'header' => 'required',
            'content' => 'required'
        ]);

        $this->frontEndSectionService->update($attributes['section_nr'], $attributes['header'], $attributes['content'], 'Home', $locale);

        return redirect(route('home'));
    }

    function deleteSection()
    {
        $locale = \request()->cookies->get('app_language');
        $attributes = request()->validate([
            'section_nr' => 'required|exists:front_end_sections,number',
        ]);

        $this->frontEndSectionService->delete($attributes['section_nr'], 'Home', $locale);

        return redirect(route('home'));
    }
}
