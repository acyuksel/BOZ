<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\FrontEndSection;
use App\Services\FrontEndSectionService;

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

    function index() {
        $locale = \request()->cookies->get('app_language');
        return view('policy.index')->with(['section' => $this->frontEndSectionService->getAll('Policy', $locale)->first()]);
    }

    public function update() {
        $locale = \request()->cookies->get('app_language');
        $attributes = \request()->validate([
            'policy' => 'required'
        ]);

        $this->frontEndSectionService->update(1, '', $attributes['policy'], 'Policy', $locale);

        return redirect(route('policy.visitor.index'));
    }
}
