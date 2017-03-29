
    tinymce.init({ 
        selector:'textarea.tinymce',
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
        ],
    });
    $(document).ready(function() {
        //============ ============  ============  ============ 
        // Tag-it JS
        // Minimal
        //
            $('#myTags').tagit({
                fieldName: "tags[]",
                allowSpaces:true,
                availableTags: ["c++", "java", "php", "javascript", "ruby", "python", "c"],
                autocomplete: {delay: 0, minLength: 2},
            });
        //
        //============ ============  ============  ============ 
        var options = { 
            target:   '#output', 
            beforeSubmit:  beforeSubmit,
            uploadProgress: OnProgress, //upload progress callback 
            success:       afterSuccess,
            resetForm: true  
        }; 
        $('#MyUploadForm').submit(function() { 
            $(this).ajaxSubmit(options);            
            return false; 
        });
    });
    function afterSuccess(){
        $(".progress-bar").css({"width":"0%"});
        $("#output").load("/blogs/popup_img",function (){
            click_img();
        });
    }
    function beforeSubmit(){
        //$("#progressbox").show();
        //$("#output").load("/blogs/popup_img");

    }
    function OnProgress(event, position, total, percentComplete)
    {
        $(".progress-bar").css({"width":percentComplete+"%"});
        
    }
    $(".button-media").click(function(event) {
        $("#modal-id .modal-body").html('<div class="loading_box"><h3><i class="fa fa-refresh fa-spin"></i> Loading...</h3></div>');
        $.ajax({
            url: '/blogs/popup_img',
            type: 'GET',
            dataType: 'html',
            data: {param1: 'value1'},
        })
        .done(function(data) {
            $(".loading_box").remove();
            $("#modal-id  .modal-body").html(data);
            click_img();
        })
        .fail(function() {
            console.log("error");
        });

        $("#modal-id").modal();
    });

    function click_img(){
        $("img").click(function(){
            var html_img = "<p><img class='img_in_content' src='"+$(this).attr("src")+"'></p>";
            var $body = $(tinymce.activeEditor.getBody());
            var sel = tinyMCE.activeEditor.selection;
            sel.setContent(html_img);  
            $("#modal-id").modal('hide');
            $("#modal-id-upload").modal('hide');

        });
    }
    $(".bton-upload").click(function(){
        $("#output").load("/blogs/popup_img",function (){
            click_img();
        });
        $("#modal-id-upload").modal();
    });