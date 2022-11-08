<!-- 画像アップロード/表示テストページ -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
	<form method="POST" action="/upload" enctype="multipart/form-data">
        {{ csrf_field() }}
	    <input type="file" id="file" name="file" class="form-control">
	    <button type="submit">アップロード</button>
		<!-- 画像の名前を取得 -->
		<!-- 変数=画像の名前 -->
		<!-- <a><img src="画像の名前変数" width="100%" height="100%">アップロードした画像</a> -->
		<a><img src="/storage/upload_test.png" width="100%" height="100%">アップロードした画像</a>
	</form>
	
</body>
</html>