<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'examname','postname', 'description', 'category' ,'slug','user_id', 'fees',
        'obc',
        'sc',
        'female',
    ];

    protected $dates = ['deleted_at']; 

    public function getGalleryoneAttribute($gallery_one)
    {
        return asset($gallery_one);
    }
    public function getGallerytwoAttribute($gallery_two)
    {
        return asset($gallery_two);
    }
    public function getGallerythreeAttribute($gallery_three)
    {
        return asset($gallery_three);
    } 

    public function user()
    {
        return $this->belongsTo('magichomes\User');
    }

}
