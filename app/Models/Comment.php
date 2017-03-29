<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    // DLL Create table
    // CREATE TABLE 'comment' ('id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'comment_name' TEXT NOT NULL, 'comment_email' TEXT NOT NULL, 'comment_content' TEXT NOT NULL, 'comment_create' DATETIME NOT NULL)
    protected $table = 'comment';
    //protected $guarded = ["videos_title"];
    protected $guarded = [];
}
