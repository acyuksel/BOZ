<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $media_id
 * @property integer $language_id
 * @property string $name
 * @property string $description
 * @property string $webLink
 * @property Language $language
 * @property Medium $medium
 */
class Recommendation extends Model
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
    protected $fillable = ['media_id', 'language_id', 'name', 'description', 'webLink'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo('App\Models\Language');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medium()
    {
        return $this->belongsTo('App\Models\Medium', 'media_id');
    }
}
