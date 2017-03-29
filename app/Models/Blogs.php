<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model {
    protected $table = 'blogs';
    //protected $guarded = ["videos_title"];
    protected $guarded = [];

    //
    public function comments() {
        return $this->hasMany( 'App\Models\Comment', 'comment_blogs_id' );
    }

}
