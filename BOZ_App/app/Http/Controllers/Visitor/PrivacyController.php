<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\FrontEndSection;
use App\Services\FrontEndSectionService;
use App\Services\LocalizationService;
use Illuminate\Http\Request;

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

    function index(Request $request) {
        $locale = LocalizationService::getLocal($request);
        return view('privacy_declaration.index')->with(['section' => $this->frontEndSectionService->getAll('Privacy', $locale)->first()]);
    }

    public function update(Request $request) {
        $locale = LocalizationService::getLocal($request);
        $attributes = \request()->validate([
            'Privacy' => 'required'
        ]);

        $this->frontEndSectionService->update(1, '', $attributes['Privacy'], 'Privacy', $locale);

        return redirect()->route('privacy_declaration.visitor.index');
    }
}
