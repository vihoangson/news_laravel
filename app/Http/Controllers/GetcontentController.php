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

/**
 * @property string name_dom_content
 */
class GetcontentController extends BaseController {
    public $array_site;

    /**
     * @var string
     * "#.{10,}\.html$#"
     * https://benhtat.net/tin-tuc/ra-duong-gheo-gai-phat-300k-say-xin-gay-roi-phat-1-trieu-cac-dan-chong-ra-duong-nho-can-1295.html
     */
    private $pattern_link_detail = "#.{10,}\.html$#";

    const MAX_SAVE_ONE_TIME = 1;

    public function __construct() {
        if ( ! defined( "LOG_INFO_FLAG_IMPORT" ) ) {
            define( "LOG_INFO_FLAG_IMPORT", false );
        }
    }

    //============  ============
    // ****** Function import_vnexpress() ******
    // **Công dụng: Import tin tức từ trang vnexpress.net**
    // **Ngày tạo: 13/1/2016**
    // **Tác giả: Santosan**
    // ope
    public function import_vnexpress( $case = null ) {

        $this->main_page = "http://vnexpress.net";

        $this->array_site = [
            0  => "http://vnexpress.net/tin-tuc/thoi-su",
            1  => "http://vnexpress.net/tin-tuc/the-gioi",
            2  => "http://kinhdoanh.vnexpress.net/",
            3  => "http://giaitri.vnexpress.net/",
            4  => "http://thethao.vnexpress.net",
            5  => "http://vnexpress.net/tin-tuc/phap-luat",
            6  => "http://vnexpress.net/tin-tuc/giao-duc",
            7  => "http://suckhoe.vnexpress.net",
            8  => "http://giadinh.vnexpress.net/",
            9  => "http://dulich.vnexpress.net",
            10 => "http://vnexpress.net/tin-tuc/khoa-hoc",
            11 => "http://vnexpress.net/tin-tuc/khoa-hoc/page/2.html",
            12 => "http://sohoa.vnexpress.net/",
            13 => "http://vnexpress.net/tin-tuc/oto-xe-may",
            14 => "http://vnexpress.net/tin-tuc/cong-dong",
            15 => "http://vnexpress.net/tin-tuc/tam-su",
            16 => "http://vnexpress.net/tin-tuc/tam-su/page/3.html",
            17 => "http://vnexpress.net/tin-tuc/cuoi",
        ];

        $this->name_dom_content = "#left_calculator";

        $this->import_articles( $case );
        // Dừng chương trình
        // Lấy bài viết top
        $this->vnexpress_set_important_news();
    }

    public function import_motthegioi( $case = null ) {

        $this->main_page = "http://motthegioi.vn";

        $this->array_site = [
            0 => "http://motthegioi.vn",
        ];

        $this->name_dom_content = ".article-body";

        $this->import_articles( $case );
    }

    public function import_dantri( $case = null ) {

        $this->main_page = "http://dantri.com.vn";

        $this->array_site = [
            0 => "http://dantri.com.vn",
        ];

        $this->name_dom_content = ".detail-content";

        $this->import_articles( $case );
    }

    public function import_kenh14( $case = null ) {

        $this->main_page = "http://kenh14.vn";
        // http://kenh14.vn/nguoi-viet-dau-tien-bi-dinh-lien-co-the-tro-thanh-giao-su-thinh-giang-tai-nhat-ban-20170328235949418
        $this->pattern_link_detail = "#[0-9]{3,}\.chn$#";

        $this->array_site = [
            0 => 'http://kenh14.vn/star.chn',
            1 => 'http://kenh14.vn/tv-show.chn',
            2 => 'http://kenh14.vn/cine.chn',
            3 => 'http://kenh14.vn/musik.chn',
            4 => 'http://kenh14.vn/fashion.chn',
            5 => 'http://kenh14.vn/doi-song.chn',
            6 => 'http://kenh14.vn/doi-song/du-lich.chn',
            7 => 'http://kenh14.vn/xa-hoi.chn',
            8 => 'http://kenh14.vn/the-gioi.chn',
            9 => 'http://kenh14.vn/tram-yeu.chn',
            10 => 'http://kenh14.vn/la-cool.chn',
            11 => 'http://kenh14.vn/hoc-duong.chn',
            12 => 'http://kenh14.vn/video.chn',
        ];

        $this->name_dom_content = ".klw-new-content";

        $this->import_articles( $case );
    }

    public function import_nuocmy( $case = null ) {

        $this->main_page = "http://www.nuocmy.info";

        $this->array_site = [
            0 => "http://www.nuocmy.info",
        ];

        $this->name_dom_content = ".entry-content";

        $this->import_articles( $case );
    }

    public function import_benhtat( $case = null ) {

        $this->main_page = "https://benhtat.net";
        //https://benhtat.net/tin-tuc/ra-duong-gheo-gai-phat-300k-say-xin-gay-roi-phat-1-trieu-cac-dan-chong-ra-duong-nho-can-1295.html
        $this->array_site = [
            0 => "https://benhtat.net",
        ];

        $this->name_dom_content = ".td-post-content";

        $this->import_articles( $case );
    }

    //============  ============
    // ****** Function import_vnexpress() ******
    // **Công dụng: Import tin tức từ trang vnexpress.net**
    // **Ngày tạo: 13/1/2016**
    // **Tác giả: Santosan**
    // ope
    public function import_articles( $case = null ) {

        Log::info( "Do log import_vnexpress in " . date( "Y-m-d H:i:s" ) );
        if ( true ) {

            if ( empty( $this->array_site ) ) {
                echo "List null";

                return;
            }

            if ( is_null( $case ) ) {
                echo "Nhap gia tri";

                return;
            }
            /**
             * Lấy link search
             * VD: http://vnexpress.net
             */
            $array_site_array = [];
            switch ( $case ) {
                case "home":
                    $array_site_array[0] = $this->main_page;
                    break;
                case "all":
                    $array_site_array = $this->array_site;
                    break;
                default:
                    $array_site_array[0] = $this->array_site[ (int) $case ];
                    break;
            }

            // foreach tất cả phần tử trong mảng $this->array_site
            // $value_site: http://abc.com
            foreach ( $array_site_array as $key_site => $value_site ) {
                $this->save_articles( $value_site );
            }

            // Lấy phần mở đầu
            $this->get_extra_content();

            // Lấy hình ảnh chính
            $this->update_main_img();
        }
    }

    // Lấy các bản tin và show ra hình chính
    //
    public function update_main_img() {
        //============  ============
        // Lấy dữ liệu từ trong bảng
        //============  ============
        $rs = Articles::whereraw( "article_imgs is null " )->orderBy( 'id desc' )->limit( 300 )->get();

        //============  ============
        //  Vòng lập duyệt toàn bộ array
        foreach ( $rs as $key => $value ) {
            //============  ============
            //  Chuyen thanh mang json
            //============  ============
            $article_imgs = json_encode( (array) $this->get_main_img( $value->article_content ) );
            //============  ============
            // Update vào cột article_imgs
            //============  ============
            if ( $value->update( [ "article_imgs" => $article_imgs ] ) ) {
                echo "[done]";
            } else {
                echo "[error]";
            }
            echo PHP_EOL;
        }
        //
        //============  ============
    }

    //  Function lấy các hình chính trong content
    public function get_main_img( $content ) {
        $return = [];
        //============  ============
        // Match các link có trong bài viết
        //============  ============
        preg_match_all( "/<img(.+?)src=[\"'](.+?)[\"']/", $content, $match );
        foreach ( $match[2] as $key => $value ) {
            //============  ============
            // Lọc ra các từ không cần thiết
            //============  ============
            if ( ! ( preg_match( "/(icons\/social_|img_blank|icon_)/", $value ) ) ) {
                $return[] = $value;
            }
        }

        return $return;
    }

    //============ ============  ============  ============
    // Update db phần mở đầu của mỗi bản tin
    //
    public function get_extra_content() {

        $rs = Articles::whereraw( "article_extra_content is null" )->limit( 500 )->get();
        foreach ( $rs as $key => $value ) {
            $content    = $value->article_content;
            $strip_text = trim( strip_tags( $content ) );
            if ( preg_match( "/^Thứ/", $strip_text ) ) {
                // ============ ============  ============  ============
                // Bỏ tất cả những thứ trên đầu
                //
                echo PHP_EOL . "== Filter_content_vnexpress ==" . PHP_EOL;

                //Loại bỏ các mục thừa không cần thiết của article_content
                $content = $this->filter_content_vnexpress( $content );

                //update lại article_content
                $value->update( [ "article_content" => $content ] );

            }
            // Lọc bỏ hết tag
            $extra_text = trim( strip_tags( $content ) );

            // ============ ============  ============  ============
            if ( empty( $value->article_extra_content ) ) {
                // Lưu vào csdl
                if ( $value->update( [ "article_extra_content" => $extra_text ] ) ) {
                    echo "<p>done</p>" . PHP_EOL;
                } else {
                    echo "<p>error</p>" . PHP_EOL;
                }
            }

            //
            //  ============ ============  ============  ============
        }
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

    /**
     * check valid by dom
     *
     * @param $value
     *
     * @return bool
     */
    private function check_valid_by_dom( $value ) {

        $flag = true;

        if ( Articles::where( "article_link", $value->attr["href"] )->count() != 0 ) {
            $flag = false;
        }
        if ( strlen( trim( $this->get_title( $value ) ) ) < 10 ) {

            $flag = false;
        }

        return $flag;
    }// End if

    /**
     * Get string link by url
     *
     * @param $url
     *
     * @return mixed
     */
    private function get_string_link_by_url( $url ) {
        // Khởi tạo biến dom của link $url
        $dom = str_get_html( @file_get_contents( $url ) );

        // Lấy ra tất cả các tag a có trong link $value_site
        $return = $dom->find( "a" );

        return $return;
    }

    /**
     * Khởi tạo biến title
     * Phần tử trong có thể bao gồm
     * 1: plaintex
     * 2: img
     * Kiểm tra trong link có phải hình hay không
     *
     * @param $ele_html_dom
     *
     * @return boolean|string
     */
    private function get_title( $ele_html_dom ) {
        if ( $ele_html_dom->find( "img", 0 ) ) {// Đúng là hình
            if ( ! empty( $ele_html_dom->find( "img", 0 )->attr["alt"] ) ) {//Có alt gán biến title
                $title = $ele_html_dom->find( "img", 0 )->attr["alt"];
            } else {//Nếu không có alt thì continue
                if ( LOG_INFO_FLAG_IMPORT ) {
                    Log::info( "exit :0 __ " . $ele_html_dom->attr["href"] );
                }

                return false;
            }
        } else {// Không phải hình
            $title = $ele_html_dom->innertext();
        }

        return $title;
    }

    //  Khởi tạo article_cat từ link
    public function vnexpress_rebuild_cat() {
        //Xử lý cái này: article_cat
        $rs = Articles::whereRaw( "article_cat is null" )->get();
        foreach ( $rs as $key => $value ) {
            $match   = [];
            $pattern = "/kinh-nghiem|thoi-su|the-gioi|kinhdoanh|giaitri|thethao|phap-luat|giao-duc|suckhoe|giadinh|dulich|khoa-hoc|oto-xe-may|cong-dong|tam-su|cuoi/";
            preg_match( $pattern, $value->article_link, $match );
            if ( empty( $match ) ) {
                continue;
            }
            $value->update( [ "article_cat" => $match[0] ] );
            echo $match[0] . PHP_EOL;
            echo $value->id . PHP_EOL;
        }
    }

    /**
     *
     */
    public function vnexpress_set_important_news() {
        $html           = @file_get_contents( "http://vnexpress.net" );
        $dom            = str_get_html( $html );
        $link_important = $dom->find( ".line_col_midnews_top .content_scoller li a" );
        foreach ( $link_important as $key => $value ) {
            if ( Articles::where( "article_link", $value->attr["href"] )->update( [ "article_mode" => 1 ] ) ) {
                echo ( Articles::where( "article_link", $value->attr["href"] )->first()->article_title ) . PHP_EOL;
            }
        }
    }

    /**
     *
     *
     * @param $value_site Tên site
     *                    Ex: http://vnexpress.net
     *
     * @return void
     */
    private function save_articles( $value_site ) {
        $count_success = 0;
        $link_article  = $this->get_string_link_by_url( $value_site );

        // foreach tất cả các tag a có trong link $value_site
        foreach ( $link_article as $key => $value ) {
            $link_href = $value->attr["href"];

            // todo: check detail page

            if ( ! preg_match( $this->pattern_link_detail, $link_href ) ) {
                continue;
            }

            // todo: check exist link in db
            $article_exist = Articles::where( 'article_link', 'like', '%' . $link_href . '%' )->count();
            if ( $article_exist > 0 ) {
                continue;
            }

            if ( preg_match( '/(#|javascript)/', $link_href ) ) {
                continue;
            }
            if ( $count_success > self::MAX_SAVE_ONE_TIME ) {
                echo "Over " . self::MAX_SAVE_ONE_TIME . " result" . PHP_EOL;
                continue;
            }

            // Nếu không tồn tại href thì bỏ qua trong
            if ( empty( $link_href ) ) {
                continue;
            }

            // Kiểm tra đúng: link có phần tử cuối là .html và độ dài từ 10 ký tự trở lên
            if ( true ) {
                // Log ban đầu
                echo "=== Link: " . $link_href . PHP_EOL;
                if ( LOG_INFO_FLAG_IMPORT ) {
                    Log::info( "Link: " . $link_href );
                }

                if ( ! $title = $this->get_title( $value ) ) {
                    continue;
                }


                if ( ! $this->check_valid_by_dom( $value ) ) {
                    if ( LOG_INFO_FLAG_IMPORT ) {
                        Log::info( "exit :1 __ " . $title );
                    }
                    continue;
                }


                // Nếu link là đường dẫn tương đối thì thêm domain vào
                if ( preg_match( "/^\//", $link_href ) ) {
                    $link_href = $this->main_page . $link_href;
                }

                //============ ============  ============  ============
                //  Khởi tạo biến $dom2 với nội dung theo link $link_href
                // Bạn có thể dùng function get content của vihoangson
                // Gist.github: https://gist.github.com/vihoangson/647d856380ac5ca353b0
                // Desc: Function lấy nội dung html của trang web khác bằng cUrl
                // Function curl_get($url)
                //
                //
                // LẤY NỘI DUNG CHI TIẾT TRANG
                //  $link_href
                //  Output: $title;$content;$link;
                //============ ============  ============ ============
                //

                // Khởi tạo biến $dom2 với nội dung theo link $link_href
                $link = $link_href;

                $dom2 = str_get_html( @file_get_contents( $link_href ) );

                if ( ! $dom2 ) {
                    continue;
                }

                // Rửa tổng biến $content
                $content = "";

                //============  ============
                // $name_dom_content
                // Biến bao của tag content
                // Lưu ý: có thể thay đổi khi layout trang đích thay đổi
                //============ ============


                // Tìm phần tử đầu tiên trong dom có giá trị là #left_calculator
                if ( $dom2->find( $this->name_dom_content, 0 ) ) {
                    $content = $dom2->find( $this->name_dom_content, 0 )->innertext();
                }
                //
                //============ ============  ============ ============
                // LẤY NỘI DUNG CHI TIẾT TRANG
                //  $value->attr["href"]
                //  Output: $title;$content;$link;
                //============ ============  ============ ============


                //============  ============
                // Save vào DB
                //
                if ( $content == "" ) {
                    $dom2->clear();
                    if ( LOG_INFO_FLAG_IMPORT ) {
                        Log::info( "exit : Content rỗng" );
                    }
                    continue;
                }

                $data_article = [
                    "article_title"   => strip_tags( $title ),
                    "article_content" => $content,
                    "article_link"    => $link,
                ];

                $data_article['article_title'] = strip_tags( $data_article['article_title'] );

                $data_article['article_content'] = preg_replace( '#<script(.*?)>(.*?)</script>#is', '', $data_article['article_content'] );
                $data_article['article_content'] = preg_replace( '#<!-- (.*?) -->#is', '', $data_article['article_content'] );
                $data_article['article_content'] = preg_replace( '#class=\'(.*?)\'#is', '', $data_article['article_content'] );

                if ( Articles::create( $data_article ) ) {
                    echo "!!! Saved: " . $title . PHP_EOL;
                    if ( LOG_INFO_FLAG_IMPORT ) {
                        Log::info( "!!! Saved: " . $title );
                    }
                    $count_success ++;
                } else {
                    if ( LOG_INFO_FLAG_IMPORT ) {
                        Log::info( "!!! Could't Save: " . $title );
                    }
                }
                //
                //============  ============
            }
        } // End foreach $m

    }

    /**
     * @param Request $request
     */
    public function send_mail( Request $request ) {
        $data = ( $request->all() );

        $body = "
		<p><b>SenderName</b>: " . $data["senderName"] . "</p>
		<p><b>SenderEmail</b>: " . $data["senderEmail"] . "</p>
		<p><b>Subject</b>: " . $data["subject"] . "</p>
		<p><b>Message</b>:  " . $data["message"] . "</p>
		";

        $data = array(
            'body' => $body,
        );

        Mail::send( 'emails.welcome', $data, function ( $message ) {
            $message->from( 'info@vihoangson.com', 'Vi Hoàng Sơn' );
            $message->to( 'vihoangson@gmail.com' )->subject( 'Email từ My Blog ' . date( "Y-m-d H:i:s" ) );
        } );
        echo "success";
    }
}
