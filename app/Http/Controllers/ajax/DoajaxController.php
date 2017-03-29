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

class DoajaxController extends BaseController {
    public function __construct() {
    }

    public function getIndex( $id = null, $param = null ) {
        ?>
        <form action="" method="POST" role="form">
            <legend>Form title</legend>
            <div class="form-group">
                <label for="">label</label>
                <input name="id" type="text" class="form-control" id="" placeholder="Input field">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <form action="" method="POST" role="form">
            <input type="hidden" name="_method" value="put"/>
            <legend>Form title</legend>
            <div class="form-group">
                <label for="">label</label>
                <input name="id" type="text" class="form-control" id="" placeholder="Input field">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
    }

    public function postIndex( Request $request ) {
        if ( ! $request->input( "id" ) ) {
            return;
        }
        $rs = Blogs::find( $request->input( "id" ) );

        return json_encode( $rs );
    }

    public function putIndex( Request $request ) {
        echo "putIndex:" . $request->input( "name" );
    }
}

