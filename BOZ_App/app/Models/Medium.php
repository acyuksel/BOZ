<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property boolean $isPublic
 * @property string $name
 * @property string $extension
 * @property string $created_at
 * @property string $updated_at
 * @property Project[] $projects
 */
class Medium extends Model
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
    protected $fillable = ['isPublic', 'name', 'extension', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany('App\Models\Project', 'projects_media');
    }

    public function GetNameWithExstension(){

        return "{$this->name}.{$this->extension}";
    }
}
