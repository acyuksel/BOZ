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

    public function add($sectionNr, $page) {

        DB::transaction(function () use ($sectionNr, $page) {
            //put section in correct order
            $sections = $this->frontEndSectionRepository->getByWhere('number', '>=', $sectionNr, $page);
            foreach ($sections as $section) {
                $section->number = $section->number + 1;
                $this->frontEndSectionRepository->update($section);
            }

            $this->frontEndSectionRepository->add([
                'number' => $sectionNr,
                'header' => __('Nothing here yet'),
                'content' => __('Nothing here yet'),
                'language-id' => '1',
                'page' => $page
            ]);
        });
    }

    public function update($sectionNr, $header, $content, $page)
    {
        $frontEndSection = $this->frontEndSectionRepository->getBySectionNr($sectionNr, $page);

        $frontEndSection->header = $header;
        $frontEndSection->content = $content;

        $this->frontEndSectionRepository->update($frontEndSection);
    }

    public function delete($sectionNr, $page)
    {
        $this->frontEndSectionRepository->deleteBySectionNr($sectionNr, $page);

        $allSections = $this->frontEndSectionRepository->getAllForPage($page);
        for ($i = 0; $i < $allSections->count(); $i++) {
            $allSections[$i]->number = $i + 1;
            $this->frontEndSectionRepository->update($allSections[$i]);
        }
    }
}
