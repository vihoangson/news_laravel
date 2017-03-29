<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<style>
				.ele_news {
					height: 109px;
					overflow: hidden;
					margin: 10px 0;
					cursor: pointer;
				}
				.ele_news:hover {
					background: whitesmoke;
				}
				div#mark {
					background: black;
					z-index: 10;
					width: 100%;
					height: 100%;
					position: fixed;
					top: 0;
					opacity: 0.7;
				}

				div#box-content {
					position: fixed;
					background: white;
					width: 80%;
					height: 80%;
					opacity: 1;
					z-index: 12;
					top: 0;
					right: 0;
					overflow: auto;
					padding:15px;
				}

			</style>
			<div class="row">
				@foreach ($rs as $element)
				<div class="col-md-2 ele_news" data-id="{{$element["id"]}}">
					<p><b>{{$element["article_title"]}}</b></p>
					<small>{{$element["created_at"]}}</small>
					<p>{{$element["article_link"]}}</p>
				</div>
				@endforeach
			</div>
		</div>
		<div id="mark" style="display:none;"></div>
		<div id="box-content" style="display:none;"></div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>
		$("div#box-content").css("left",100);
			$(".ele_news").click(function(){
				console.log($(this).data("id"));
				$("#mark").show();
				id = $(this).data("id");
				$("#box-content").html("");
				$("#box-content").load("/article/detail/"+id,function(){
				})
				$("#box-content").show();
			});
			$("#mark").click(function(){
				$(this).hide();
				$("#box-content").hide();
			});
		</script>
	</body>
</html>