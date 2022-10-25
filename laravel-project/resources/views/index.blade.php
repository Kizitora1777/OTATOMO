<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>

	<form method="POST" action="/upload" enctype="multipart/form-data">

        {{ csrf_field() }}
        <!-- ユーザIDと名前でファイル名を作成してここに入れる -->
        <!-- <img src="/storage/test-img.jpg" width="100%" height="100%">アップロードした画像</a> -->
	    <input type="file" id="file" name="file" class="form-control">
	    <button type="submit">アップロード</button>
	</form>

    <img src="/storage/app/public/upload_test.png"/>
</body>
</html>