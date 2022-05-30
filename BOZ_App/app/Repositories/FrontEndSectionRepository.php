<?php

namespace App\Repositories;

use App\Models\FrontEndSection;
use App\Models\Language;

class FrontEndSectionRepository
{
    public function add($attributes) {
        $section = new FrontEndSection($attributes);
        $section->save();
    }

    public function getBySectionNr($sectionNr, $page, $locale) {
        $languageId = Language::where('code', $locale)->first()->id;
        return FrontEndSection::where('number', $sectionNr)->where('page', $page)->where('language_id', $languageId)->first();
    }

    public function getAllForPage($page, $locale) {
        $languageId = Language::where('code', $locale)->first()->id;
        return FrontEndSection::where('page', $page)->where('language_id', $languageId)->orderBy('number')->get();
    }

    public function getByWhere($column, $operator, $value, $page, $locale) {
        $languageId = Language::where('code', $locale)->first()->id;
        return FrontEndSection::where($column, $operator, $value)->where('page', $page)->where('language_id', $languageId)->get();
    }

    public function update($section) {
        $section->save();
    }

    public function deleteBySectionNr($sectionNr, $page, $locale) {
        $languageId = Language::where('code', $locale)->first()->id;
        FrontEndSection::where('number', $sectionNr)->where('page', $page)->where('language_id', $languageId)->delete();
    }
}
