<?php

namespace App\Repositories;

use App\Models\FrontEndSection;

class FrontEndSectionRepository
{
    public function add($attributes) {
        $section = new FrontEndSection($attributes);
        $section->save();
    }

    public function getBySectionNr($sectionNr, $page) {
        return FrontEndSection::where('number', $sectionNr)->where('page', $page)->first();
    }

    public function getAllForPage($page) {
        return FrontEndSection::where('page', $page)->orderBy('number')->get();
    }

    public function getByWhere($column, $operator, $value, $page) {
        return FrontEndSection::where($column, $operator, $value)->where('page', $page)->get();
    }

    public function update($section) {
        $section->save();
    }

    public function deleteBySectionNr($sectionNr, $page) {
        FrontEndSection::where('number', $sectionNr)->where('page', $page)->delete();
    }
}
