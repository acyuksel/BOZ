<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\FrontEndSection;
use App\Services\FrontEndSectionService;

class PrivacyController extends Controller
{
    /**
     * @var FrontEndSectionService
     */
    private $frontEndSectionService;

    public function __construct(FrontEndSectionService $frontEndSectionService)
    {
        $this->frontEndSectionService = $frontEndSectionService;
    }

    function index() {
        $locale = \request()->cookies->get('app_language');
        return view('privacy_declaration.index')->with(['section' => $this->frontEndSectionService->getAll('Privacy', $locale)->first()]);
    }

    public function update() {
        $locale = \request()->cookies->get('app_language');
        $attributes = \request()->validate([
            'Privacy' => 'required'
        ]);

        $this->frontEndSectionService->update(1, '', $attributes['Privacy'], 'Privacy', $locale);

        return $this->index();
    }
}
