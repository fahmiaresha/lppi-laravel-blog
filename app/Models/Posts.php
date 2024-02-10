<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $post_id
 * @property integer $category_id
 * @property integer $user_id
 * @property string $title
 * @property string $content
 * @property string $image_url
 * @property string $created_at
 * @property Comment[] $comments
 * @property User $user
 * @property Category $category
 */
class Posts extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'post_id';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['category_id', 'user_id', 'title', 'content', 'image_url', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comments', null, 'post_id');
    }

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
    public function category()
    {
        return $this->belongsTo('App\Models\Categories', null, 'category_id');
    }
}
