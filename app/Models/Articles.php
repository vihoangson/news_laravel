<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model {
    protected $table = 'articles';
    //protected $guarded = ["videos_title"];
    protected $guarded = [];
    //

    //getDateBeginSaleFormatedAttribute
    public function getArticleContentFormatedAttribute(){

        return substr(strip_tags($this->attributes['article_content']),0,200);
    }
}
