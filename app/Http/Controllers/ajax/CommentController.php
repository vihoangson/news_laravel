<?php

namespace App\Http\Controllers\ajax;

use App\Models\Blogs;
use App\Models\Comment;
use App\Models\Articles;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Log;

class CommentController extends BaseController {
    public function __construct() {
    }

    public function index( $id = null, $param = null ) {
        $this->{$id}( $param );
    }

    public function list_comment( $param = null ) {
        $rs = Comment::where( "comment_blogs_id", $param )->get();
        echo json_encode( $rs );
    }

    public function save( Request $request ) {
        $data2 = [
            "comment_name"     => $request->input( "comment_name" ),
            "comment_email"    => $request->input( "comment_email" ),
            "comment_content"  => $request->input( "comment_content" ),
            "comment_create"   => date( 'Y-m-d H:i:s' ),
            "comment_blogs_id" => $request->input( "comment_blogs_id" ),
        ];
        if ( $id = Comment::insertGetId( $data2 ) ) {
            $data2["comment_img"] = "http://www.gravatar.com/avatar/" . md5( $request->input( "comment_email" ) . "?d=identicon" );
            $data2["id"]          = $id;
            echo json_encode( $data2 );
        } else {
            echo json_encode( [] );
        }
    }
}

