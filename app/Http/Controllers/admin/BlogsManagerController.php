<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use Session;

class BlogsManagerController extends Controller {
    public function __contruct() {
    }

    private $prefix_redirect = "/admin";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $rs = Blogs::orderBy( "id", "desc" )->get();

        return view( "admin.blogs.index", compact( "rs" ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( "admin.blogs.create", compact( "rs" ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $data = [
            "blog_title"    => $request->get( "blog_title" ),
            "blog_content"  => $request->get( "blog_content" ),
            "blog_extra"    => $request->get( "blog_extra" ),
            "blog_show_img" => $request->get( "show_img" ),
        ];
        $this->upload_file_blog( $request, $data );
        Blogs::create( $data );

        return redirect( $this->prefix_redirect . "/blogs" );
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        $rs = Blogs::find( $id );

        return view( "admin.blogs.show", compact( "rs" ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $rs = Blogs::find( $id );

        return view( "admin.blogs.create", compact( "rs" ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        if ( $request->has( "tags" ) ) {
            $tags = implode( ",", $request->get( "tags" ) );
        }

        $rs   = $request->all();
        $data = [
            "blog_title"    => $rs["blog_title"],
            "blog_content"  => $rs["blog_content"],
            "blog_extra"    => $rs["blog_extra"],
            "blog_show_img" => $request->get( "show_img" ),
            "blog_tags"     => ( isset( $tags ) ? $tags : $rs["blog_title"] ),
        ];
        $this->upload_file_blog( $request, $data );
        Blogs::where( "id", $id )->update( $data );

        return redirect( $this->prefix_redirect . '/blogs/' . $id . "/edit" );
    }

    private function upload_file_blog( $request, &$data ) {
        if ( ! empty( $request->file( 'userfile' ) ) ) {
            //Upload file
            $imageName = $request->file( 'userfile' )->getClientOriginalName();
            $request->file( 'userfile' )->move(
                base_path() . '/public/uploads/', $imageName
            );
            //Upload file
            $data["blog_image"] = $imageName;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        if ( Blogs::find( $id )->delete() ) {
            return redirect( $this->prefix_redirect . '/blogs/' );
        }

    }

    public function popup_img() {
        $dir = scandir( base_path() . '/public/media' );
        echo '<div class="row">';
        foreach ( $dir as $key => $value ) {
            if ( preg_match( "/.(png|jpg|gif|PNG|JPG|GIF)/", $value ) ) {
                echo "<div class='col-md-3'><div class='thumbnail'><img style='width:200px;' src='/media/" . $value . "'></div></div>";
            }
        }
        echo '</div>';
    }

    public function post_popup_img( Request $request ) {
        if ( ! empty( $request->file( 'userfile' ) ) ) {
            //Upload file
            $imageName = $request->file( 'userfile' )->getClientOriginalName();
            $request->file( 'userfile' )->move(
                base_path() . '/public/media/', $imageName
            );
            //Upload file
            $data["blog_image"] = $imageName;

            $path         = base_path() . '/public/media/' . $imageName;
            $image_object = new Image( array( 'driver' => 'gd' ) );
            $this->resize_img( $image_object, $path );

            //echo '<span class="label label-success">Done</span>';
            //
        } else {
            echo '<span class="label label-danger">Error</span>';
        }

        return;
    }

    private function resize_img( $image_object, $path ) {
        if ( file_exists( $path ) ) {
            $info_s = getimagesize( $path );
            if ( $info_s[0] > 1000 ) {
                $image_object->make( $path )->resize( 1000, null, function ( $constraint ) {
                    $constraint->aspectRatio();
                } )->save( $path );
            } elseif ( $info_s[1] > 1000 ) {
                $image_object->make( $path )->resize( null, 1000, function ( $constraint ) {
                    $constraint->aspectRatio();
                } )->save( $path );
            } else {
                echo "file nhỏ";
            }
        }
    }

    public function change_lang( $lang = null ) {
        if ( $lang == "vi" ) {
            Session::put( "current_lang", "vi" );

            return redirect( "/" );
        } else {
            Session::put( "current_lang", "en" );

            return redirect( "/" );
        }

    }
}
