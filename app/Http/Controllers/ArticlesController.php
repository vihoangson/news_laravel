<?php

namespace App\Http\Controllers;

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


    public function homepage() {
        //$rs            = Articles::limit(100)->orderBy("id","desc")->get();
        //$rs=[];
        //============ ============  ============  ============
        // "%tin-tuc/the-gioi%"
        $box_top = Articles::where( "article_mode", "1" )->whereRaw( "article_imgs != '' " )->where( "article_imgs", "!=", "[]" )->limit( 20 )->orderBy( "article_imgs", "desc" )->get();
        //$box_top       = Articles::limit(20)->whereRaw("article_imgs != '' ")->where("article_imgs","!=","[]")->orderBy("article_imgs","desc")->get();
        //============ ============  ============  ============
        // "%tin-tuc/thoi-su%"
        $box_right_top = Articles::where( "article_link", "like", "%tin-tuc/thoi-su%" )->whereRaw( "article_imgs != '' " )->where( "article_imgs", "!=", "[]" )->limit( 3 )->orderBy( "id", "desc" )->get();
        //$box_right_top=$box_top;

        //============ ============  ============  ============
        // "%tin-tuc/the-gioi%"
        $most_popular = Articles::where( "article_link", "like", "%tin-tuc/the-gioi%" )->whereRaw( "article_imgs != '' " )->where( "article_imgs", "!=", "[]" )->limit( 5 )->orderBy( "id", "desc" )->get();
        //$most_popular=$box_top;

        //============ ============  ============  ============
        // "%dulich%"
        $highlights = Articles::where( "article_link", "like", "%dulich%" )->whereRaw( "article_imgs != '' " )->where( "article_imgs", "!=", "[]" )->limit( 5 )->orderBy( "id", "desc" )->get();
        //$highlights=$box_top;

        //============ ============  ============  ============
        // "%khoa-hoc%"
        $editors_picks = Articles::where( "article_link", "like", "%khoa-hoc%" )->whereRaw( "article_imgs != '' " )->where( "article_imgs", "!=", "[]" )->limit( 3 )->orderBy( "id", "desc" )->get();
        //$editors_picks=$box_top;

        //============ ============  ============  ============
        // "%sohoa.%"
        $popular_posts = Articles::where( "article_link", "like", "%sohoa.%" )->whereRaw( "article_imgs != '' " )->where( "article_imgs", "!=", "[]" )->limit( 7 )->orderBy( "id", "desc" )->get();
        //$popular_posts=$box_top;

        //============ ============  ============  ============
        // "%suckhoe%"
        $trending = Articles::where( "article_link", "like", "%suckhoe%" )->whereRaw( "article_imgs != '' " )->where( "article_imgs", "!=", "[]" )->limit( 17 )->orderBy( "id", "desc" )->get();
        //$trending=$box_top;

        //============ ============  ============  ============
        // "%giaitri%"
        $social_media = Articles::where( "article_link", "like", "%giaitri%" )->whereRaw( "article_imgs != '' " )->where( "article_imgs", "!=", "[]" )->limit( 4 )->orderBy( "id", "desc" )->get();

        //$social_media=$box_top;

        return view( "articles.index", compact( "rs", "box_top", "box_right_top", "most_popular", "highlights", "editors_picks", "popular_posts", "trending", "social_media" ) );
    }// End function index()

    public function detail( $id ) {
        $rs                  = Articles::find( $id );
        $relation            = Articles::limit( 4 )->orderBy( "id", "desc" )->get();
        $recommen            = Articles::limit( 4 )->orderBy( "article_link", "desc" )->get();
        $rs->article_content = $this->filter_content_vnexpress( $rs->article_content );

        return view( "articles.detail", compact( "rs", "relation", "recommen" ) );
    }

    public function article_endless() {
        $rs = Articles::limit( 100 )->orderBy( "id", "desc" )->get();

        return view( "articles.article-endless", compact( "rs" ) );
    }

    public function index() {
        $rs = Articles::limit( 100 )->orderBy( "id", "desc" )->get();

        return view( "articles.list", compact( "rs" ) );
    }// End function index()
    //
    //============ import_vnexpress() ============

    public function detail_ajax( $id ) {
        $rs = Articles::find( $id );
        ?>
        <div class="head-post">
            <h2><a href="#"><?= $rs->article_title; ?></a></h2>
            <p>I think your best bet would be to start or join a startup. That's been a reliable way to get rich for
                hundreds of years.The word "startup" dates from the 1960s, but what happens in one is very similar.</p>
            <div class="meta">
                <span class="author">By <a href="#">Anna Chapman</a></span>
                <span class="time"> Published on May 07, 2004.</span>
            </div>
        </div><!-- /.head-post -->
        <div class="body-post">
            <div class="main-post">
                <div class="entry-post">
                    <?= $rs->article_content; ?>
                </div><!-- /.entry-post -->`
                <div class="tags">
                    <h4>In this article:</h4>
                    <a href="#">Startups</a>
                    <a href="#">Technology</a>
                    <a href="#">Millions of dollars</a>
                    <a href="#">Paul Graham</a>
                </div>
                <div class="load-comment">
                    <a href="#">Load Comments (35)</a>
                </div>
            </div><!-- /.main-post -->
        </div><!-- /.body-post -->
        <?php
    }

    public function category_article( $cid ) {
        $rs = Articles::where( "article_link", "like", "%$cid%" )->orderBy( "id", "desc" )->paginate( 15 );

        return view( "articles.category", compact( "rs" ) );
    }



    // ============ ============  ============  ============
    // Bỏ tất cả những thứ trên đầu của content
    // Desc: Loại bỏ các mục thừa không cần thiết của article_content
    //
    public function filter_content_vnexpress( $content ) {
        $dom = str_get_html( $content );
        if ( $dom->find( ".title_news" ) ) {
            $dom->find( ".title_news", 0 )->outertext = "";
        }

        if ( $dom->find( ".block_timer_share" ) ) {
            $dom->find( ".block_timer_share", 0 )->outertext = "";
        }

        if ( $dom->find( ".div-fbook" ) ) {
            $dom->find( ".div-fbook", 0 )->outertext = "";
        }

        if ( $dom->find( ".content_box_category" ) ) {
            $dom->find( ".content_box_category", 0 )->outertext = "";
        }

        if ( $dom->find( ".block_share_icon" ) ) {
            $dom->find( ".block_share_icon", 0 )->outertext = "";
        }

        if ( $dom->find( ".relative_new" ) ) {
            $dom->find( ".relative_new", 0 )->outertext = "";
        }
        if ( $dom->find( ".title_div_fbook" ) ) {
            $dom->find( ".title_div_fbook", 0 )->outertext = "";
        }
        if ( $dom->find( ".Normal" ) ) {
            $dom->find( ".Normal", 0 )->outertext = "";
        }
        $return = $dom->__toString();
        $dom->clear();

        return $return;
    }

    //  Hàm check tất cả hình còn sống không
    public function article_imgs_check_img_exist() {
        // Dùng get_headers để kiểm tra
        //
        $rs = Articles::limit( 40 )->get();
        foreach ( $rs as $key => $value ) {
            $array = json_decode( $value->article_imgs, true );
            foreach ( $array as $key2 => $value2 ) {
            }
        }
    }

    public function article_imgs_show_all_img_article() {
        $rs = Articles::limit( 40 )->get();
        foreach ( $rs as $key => $value ) {
            $array = json_decode( $value->article_imgs, true );
            foreach ( $array as $key2 => $value2 ) {


            }
        }
        //============  ============
        // $json = json_encode($return);
        // Lưu file ngoài root
        // file_put_contents(time().".json", $json);

        dd( $return );
    }


}
