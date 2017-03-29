@extends("layouts/layout_admin")
@section("title","Video")
@section("breadcrumbs",'<ol class="breadcrumb"><li><a href="/">Trang chủ</a></li><li><a href="/blogs">Blog</a></li><li class="active">'.(isset($rs->id)?"Sửa bài viết":"Thêm mới").'</li></ol>')
@section("script_custom")
<script src="/assets/bower_components/tinymce/tinymce.jquery.min.js"></script>
<script src="/assets/bower_components/jquery.form.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/bower_components/tag-it/js/tag-it.min.js"></script>
<script src="/assets/js/admin_blogs_create.js"></script>

<style>.navbar-fixed-top{display: none}</style>

<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-image"></i> Media</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("content")

<section class=" post_page_sidebar post_page_sidebar1">
    <div class="">
        <div class="">
            <div class="">
                <div class="author_details row m0">

                    <div class="modal fade" id="modal-id-upload">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/admin/blogs/post_popup_img" onSubmit="return false" method="post" enctype="multipart/form-data" id="MyUploadForm">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-upload"></i> Upload file</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class='box-upload'>
                                            <input name="_token" value="{{csrf_token()}}" type="hidden">
                                            <input name="userfile" id="imageInput" class="form-control" type="file" />
                                            {{-- <img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/> --}}


                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                              </div>
                                            </div>

                                            <div id="progressbox" style="display:none;"><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                                            <div id="output"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <form action="/admin/blogs/{{(isset($rs->id)?$rs->id."/edit":"post_newblog")}}" method="POST" role="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <div class="">
                                    {!! (isset($rs->id)?'<input type="hidden" name="_method" value="put" />':"") !!}
                                    <input name="_token" value="{{csrf_token()}}" type="hidden">
                                    <legend>Bài viết</legend>
                                    <div class="form-group">
                                        <label for="">Tiêu đề</label>
                                        <input type="text" name="blog_title" class="form-control" id="" placeholder="Input field" value="{{(isset($rs->blog_title)?$rs->blog_title:"")}}">
                                    </div>
                                    <label for="">Nội dung</label>
                                    <p><button type="button" class="btn btn-default button-media"><i class="fa fa-image"></i> Media</button>
                                        <button type="button" class='bton-upload btn btn-default'><i class="fa fa-upload"></i> Upload file</button></p>
                                        <textarea name="blog_extra" class="form-control">{{(isset($rs->blog_extra)?$rs->blog_extra:"")}}</textarea>
                                        <textarea style="height:500px;" name="blog_content" class="tinymce">{{(isset($rs->blog_content)?$rs->blog_content:"")}}</textarea>
                                        <hr>
                                        <h2>Tags</h2>
                                        <ul id="myTags">
                                            @if(isset($rs->blog_tags))
                                                @foreach(explode(",",$rs->blog_tags) as $tag)
                                                <li>{{$tag}}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-floppy-o"></i> Save</button>
                                    @if(isset($rs->id))
                                    <a onclick="" target="_blank" href='/blog-single-{{$rs->id}}.html' class=" btn btn-info btn-block"><i class="fa fa-eye"></i> Go to page</a>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?');" href='/blogs/delete/{{$rs->id}}' class=" btn btn-danger btn-block"><i class="fa fa-trash"></i> Move to trash</a>
                                    @endif
                                    <hr>
                                    <div class="well">
                                        <h4>Feature image</h4>
                                        <input type="file" name="userfile">
                                        {!! (isset($rs->blog_image)?"<div class='thumbnail'><img style='width:100px;' src='/uploads/".$rs->blog_image."'></div>":"") !!}
                                    </div>
                                    <p>
                                    <p><a class="btn btn-default" href="https://vihoangson.wordpress.com/wp-admin/upload.php" target="_blank">Upload img to wordpress</a></p>

                                    <input type="checkbox" name="show_img" value="1" {!! (( isset($rs->blog_show_img) && (int)$rs->blog_show_img != 1)?"":"checked=true") !!}> Hiển thị hình ra trang chi tiết</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section("custom_js_footer")
<script>
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 400
        };
        toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');
    }, 130);
</script>
@stop