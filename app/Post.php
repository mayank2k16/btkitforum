<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_content', 'post_pic','post_type', 'status',
    ];
    
    public function user(){
        $this->belongsTo('App\User');
    }
}
