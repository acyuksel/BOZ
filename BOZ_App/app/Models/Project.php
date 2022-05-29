<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $language_id
 * @property string $title
 * @property string $content
 * @property string $secondTitle
 * @property string $secondContent
 * @property Language $language
 * @property Medium[] $media
 */
class Project extends Model
{
    public $timestamps = false;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['language_id', 'title', 'content', 'secondTitle', 'secondContent'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo('App\Models\Language');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function media()
    {
        return $this->belongsToMany('App\Models\Medium', 'projects_media');
    }
}
