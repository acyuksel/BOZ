<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\FrontEndSection;
use App\Services\FrontEndSectionService;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * @var FrontEndSectionService
     */
    private $frontEndSectionService;

    public function __construct(FrontEndSectionService $frontEndSectionService)
    {
        $this->frontEndSectionService = $frontEndSectionService;
    }

    public function index() {
        $locale = \request()->cookies->get('app_language');
        return view('about-us.index')->with(['section' => $this->frontEndSectionService->getAll('About us', $locale)->first()]);
    }

    public function update() {
        $locale = \request()->cookies->get('app_language');
        $attributes = \request()->validate([
            'about-us' => 'required'
        ]);

        $this->frontEndSectionService->update(1, '', $attributes['about-us'], 'About us', $locale);

        return redirect(route('about-us.visitor.index'));
    }
}
