<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Articles;
use App\Models\Comment;
use App\Http\Controllers\ArticlesController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Log;

class NewsController extends BaseController {

    public function __construct() {
    }

    public function anyIndex() {
        $rs = Blogs::all();

        return view( "news.index" )->withRs( $rs );
    }

    public function getLogout() {
        \Auth::logout();

        return redirect( "/news" );
    }

    public function anyDetail( $id ) {
        $blogs        = Blogs::find( $id );
        $relate_blogs = Blogs::limit( 3 )->get();
        $comments     = $blogs->comments;

        return view( "news.detail" )->withBlogs( $blogs )->withComments( $comments )->withRelateBlog( $relate_blogs );
    }

    public function postSaveComment( Request $request ) {
        $comment_name              = $request->get( "comment_name" );
        $comment_email             = $request->get( "comment_email" );
        $comment_content           = $request->get( "comment_content" );
        $blog_id                   = $request->get( "blog_id" );
        $comment                   = new Comment();
        $comment->comment_name     = $comment_name;
        $comment->comment_email    = $comment_email;
        $comment->comment_content  = $comment_content;
        $comment->comment_create   = date( "Y/m/d" );
        $comment->comment_blogs_id = $blog_id;
        $comment->save();
        $message = "Saved";

        return redirect( '/news/detail/' . $blog_id )->withMessage( $message );
    }
}
