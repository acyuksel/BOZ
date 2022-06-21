<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\FrontEndSection;
use App\Services\FrontEndSectionService;
use App\Services\LocalizationService;
use Illuminate\Http\Request;

class PolicyController extends Controller
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
        return view('policy.index')->with(['section' => $this->frontEndSectionService->getAll('Policy', $locale)->first()]);
    }

    public function update(Request $request)
    {
        $locale = LocalizationService::getLocal($request);
        $attributes = \request()->validate([
            'policy' => 'required'
        ]);

        $this->frontEndSectionService->update(1, '', $attributes['policy'], 'Policy', $locale);

        return redirect(route('policy.visitor.index'));
    }
}
