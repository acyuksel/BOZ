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

    public function getAll() {
        return FrontEndSection::orderBy('number')->get();
    }

    public function getByWhere($column, $operator, $value) {
        return FrontEndSection::where($column, $operator, $value)->get();
    }

    public function update($section) {
        $section->save();
    }

    public function deleteBySectionNr($sectionNr) {
        FrontEndSection::where('number', $sectionNr)->delete();
    }
}
