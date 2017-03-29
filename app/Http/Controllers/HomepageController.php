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

class HomepageController extends BaseController {
    public $array_site;

    public function __construct() {
        if ( ! defined( "LOG_INFO_FLAG_IMPORT" ) ) {
            define( "LOG_INFO_FLAG_IMPORT", false );
        }
        //parent::__construct();
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
    }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        //
        // Thông tin các trang web đã từng làm
        //
        $array_web   = [
            [
                "url"   => "http://sua.vn",
                "img"   => "sua.vn.png",
                "title" => "SUA.VN",
                "desc"  => "Trang web sữa hàng đầu Việt Nam",
            ],

            [
                "url"   => "http://daivietgroup.net",
                "img"   => "daivietgroup.net.png",
                "title" => "Daivietgroup",
                "desc"  => "Tập đoàn Đại Việt",
            ],

            [
                "url"   => "http://cbah.org.vn",
                "img"   => "cbah.org.vn.png",
                "title" => "CBAH",
                "desc"  => "Hiệp hội doanh nghiệp Trung Quốc",
            ],

            [
                "url"   => "http://hellobb.vn",
                "img"   => "hellobb.vn.png",
                "title" => "hellobb.vn",
                "desc"  => "Hệ thống thương hiệu HelloBB",
            ],

            [
                "url"   => "http://babylovevn.com",
                "img"   => "babylovevn.com.png",
                "title" => "babylovevn.com",
                "desc"  => "Cửa hàng trực tuyến",
            ],

            [
                "url"   => "http://bighost.vn",
                "img"   => "bighost.vn.png",
                "title" => "bighost.vn",
                "desc"  => "Trang web kinh doanh domain & hosting",
            ],

            [
                "url"   => "http://namsaigon.edu.vn",
                "img"   => "namsaigon.edu.vn.png",
                "title" => "namsaigon.edu.vn",
                "desc"  => "Trường trung cấp nghề Nam Sài Gòn",
            ],

            [
                "url"   => "http://thuexechauau.com",
                "img"   => "thuexechauau.com.png",
                "title" => "thuexechauau.com",
                "desc"  => "Dịch vụ thuê xe",
            ],

            [
                "url"   => "http://hoancau.com",
                "img"   => "hoancau.com.png",
                "title" => "hoancau.com",
                "desc"  => "Công ty Hoàn Cầu",
            ],

            [
                "url"   => "http://ankhanhtech.com.vn",
                "img"   => "ankhanhtech.com.vn.png",
                "title" => "ankhanhtech.com.vn",
                "desc"  => "Cửa hàng kinh doanh thiết bị dụng cụ",
            ],

            [
                "url"   => "http://showaglove.co.jp",
                "img"   => "showaglove.co.jp.png",
                "title" => "showaglove.co.jp",
                "desc"  => "Tập đoàn quốc tế Showa",
            ],

        ];
        $skill_level = [
            "Laravel Framework"               => 3,
            // Laravel Framework: ###
            "Codeigniter"                     => 5,
            // Codeigniter: #####
            "Zend Framework"                  => 3,
            // Zend Framework: ###
            "Wordpress"                       => 3,
            // Wordpress: ###
            "MySQL"                           => 4,
            // MySQL: ####
            "PHP"                             => 5,
            // PHP: #####
            "CSS(3)"                          => 4,
            // CSS(3): ####
            "HTML(5)"                         => 4,
            // HTML(5): ####
            "Command line"                    => 4,
            // Command line: ####
            "JSON"                            => 5,
            // JSON: #####
            "XML"                             => 3,
            // XML: ###
            "Bootstrap Framework"             => 5,
            // Bootstrap Framework: #####
            "JQuery"                          => 5,
            // JQuery: #####
            "Javascript"                      => 4,
            // Javascript: ####
            "ElasticSearch"                   => 1,
            // ElasticSearch: #
            "BEM"                             => 3,
            // BEM: ##### Cách đặt tên (Blocks, Elements, Modifiers) Blog__Element--Modifi
            "LESS"                            => 2,
            // LESS: #
            "SASS"                            => 2,
            // SASS: #
            "Method Factory Pattern"          => 5,
            // Method Factory Pattern: #####
            "MVC Pattern"                     => 4,
            // MVC Pattern: ####
            "Builder Pattern"                 => 5,
            // Builder Pattern: #####
            "Singleton Pattern"               => 5,
            // Singleton Pattern: #####
            "Object Orientated Programming"   => 4,
            // Object Orientated Programming: #### Hướng đối tượng
            "SEO"                             => 3,
            // SEO: ### Search Engin
            "UML (Unified Modeling Language)" => 1,
            // UML: ##### Vẽ sơ đồ cấu trúc chương trình
            "AngularJS"                       => 1,
            // AngularJS: # Plugin Javascript
            "Ruby"                            => 1
            // Ruby: #
        ];
        $rs          = Blogs::orderBy( "id", "desc" )->get();

        $i = 1;
        $j = 1;

        define( "PERPAGE_BLOG", 5 );

        foreach ( $rs as $key => $value ) {
            $rs_p[ $i ][] = $value;
            if ( $j % PERPAGE_BLOG == 0 ) {
                $i ++;
            }
            $j ++;
        }

        return view( "homepage", compact( "rs", "array_web", "skill_level", "rs_p" ) );
    }

    public function show( $id ) {
        $rs = Blogs::find( $id );
        if ( ! $rs ) {
            echo json_encode( [
                "blog_title"   => "Not found",
                "blog_content" => "Not found",
            ] );

            return;
        }
        $comment = Comment::where( "comment_blogs_id", $id )->get();
        echo json_encode( [
            "blog_title"   => $rs->blog_title,
            "blog_content" => $rs->blog_content,
        ] );
        die;
    }

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

    public function test_case() {
        $this->vnexpress_rebuild_cat();
    }


}
