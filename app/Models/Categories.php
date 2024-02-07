<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $category_id
 * @property string $category_name
 * @property Post[] $posts
 */
class Categories extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['category_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', null, 'category_id');
    }
}
