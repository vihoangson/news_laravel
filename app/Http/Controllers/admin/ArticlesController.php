<?php

namespace App\Http\Controllers\admin;

use App\Models\Blogs;
use App\Models\Articles;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Log;

class ArticlesController extends BaseController {
    public function __construct() {
    }

    public function index() {
        return view( "admin.article_index" );
    }

}
