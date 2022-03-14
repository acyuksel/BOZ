<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property boolean $is_public
 * @property string $name
 * @property string $extension
 * @property string $created_at
 * @property string $updated_at
 */
class Media extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['is_public', 'name', 'extension', 'created_at', 'updated_at'];

    public function GetNameWithExstension(){

        return "$this->name.$this->extension";
    }
}
