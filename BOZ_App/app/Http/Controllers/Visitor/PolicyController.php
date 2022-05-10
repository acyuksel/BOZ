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
        return view('policy.index')->with(['section' => FrontEndSection::where('page', 'Policy')->first()]);
    }

    public function update() {

        $attributes = \request()->validate([
            'policy' => 'required'
        ]);

        $this->frontEndSectionService->update(1, '', $attributes['policy'], 'Policy');

        return redirect(route('policy.visitor.index'));
    }
}
