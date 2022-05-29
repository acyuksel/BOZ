<?php

namespace App\Services;

use App\Models\FrontEndSection;
use App\Models\Language;
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

    public function getAll($page, $locale) {

        $languageId = Language::where('code', $locale)->first()->id;
        $sections = FrontEndSection::where('page', $page)->where('language_id', $languageId)->orderBy('number')->get();

        return $sections;
    }

    public function add($sectionNr, $page, $locale) {

        $languageId = Language::where('code', $locale)->first()->id;

        DB::transaction(function () use ($sectionNr, $page, $languageId) {
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
                'language-id' => $languageId,
                'page' => $page
            ]);
        });
    }

    public function update($sectionNr, $header, $content, $page, $locale)
    {
        $frontEndSection = $this->frontEndSectionRepository->getBySectionNr($sectionNr, $page, $locale);

        $frontEndSection->header = $header;
        $frontEndSection->content = $content;

        $this->frontEndSectionRepository->update($frontEndSection);
    }

    public function delete($sectionNr, $page, $locale)
    {
        $this->frontEndSectionRepository->deleteBySectionNr($sectionNr, $page, $locale);

        $allSections = $this->frontEndSectionRepository->getAllForPage($page, $locale);
        for ($i = 0; $i < $allSections->count(); $i++) {
            $allSections[$i]->number = $i + 1;
            $this->frontEndSectionRepository->update($allSections[$i]);
        }
    }
}
