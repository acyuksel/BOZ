<?php

namespace App\Services;

use App\Models\FrontEndSection;
use App\Repositories\FrontEndSectionRepository;
use Illuminate\Support\Facades\DB;

class FrontEndSectionService
{
    /**
     * @var FrontEndSectionRepository
     */
    private $frontEndSectionRepository;

    public function __construct(FrontEndSectionRepository $frontEndSectionRepository)
    {
        $this->frontEndSectionRepository = $frontEndSectionRepository;
    }

    public function add($sectionNr) {

        DB::transaction(function () use ($sectionNr) {
            //put section in correct order
            $sections = $this->frontEndSectionRepository->getByWhere('number', '>=', $sectionNr);
            foreach ($sections as $section) {
                $section->number = $section->number + 1;
                $this->frontEndSectionRepository->update($section);
            }

            $this->frontEndSectionRepository->add([
                'number' => $sectionNr,
                'header' => __('Nothing here yet'),
                'content' => __('Nothing here yet'),
                'language' => 'nl'
            ]);
        });
    }

    public function update($sectionNr, $header, $content)
    {
        $frontEndSection = $this->frontEndSectionRepository->getBySectionNr($sectionNr);

        $frontEndSection->header = $header;
        $frontEndSection->content = $content;

        $this->frontEndSectionRepository->update($frontEndSection);
    }

    public function delete($sectionNr)
    {
        $this->frontEndSectionRepository->deleteBySectionNr($sectionNr);

        $allSections = $this->frontEndSectionRepository->getAll();
        for ($i = 0; $i < $allSections->count(); $i++) {
            $allSections[$i]->number = $i + 1;
            $this->frontEndSectionRepository->update($allSections[$i]);
        }
    }
}