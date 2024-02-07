<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $comment_id
 * @property integer $post_id
 * @property integer $user_id
 * @property string $content
 * @property string $created_at
 * @property User $user
 * @property Post $post
 */
class Comments extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'comment_id';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['post_id', 'user_id', 'content', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', null, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post', null, 'post_id');
    }
}
