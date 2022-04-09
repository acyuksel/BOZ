<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $fullname
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 */
class Contact extends Model
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
    protected $fillable = ['email', 'fullname', 'message', 'created_at', 'updated_at'];
}
