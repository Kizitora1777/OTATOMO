<!-- 画像アップロード/表示テストページ -->
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>Title</title>
	</head>
	<body>
		<form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
			<div>
				<input type="file" id="file" name="image" class="form-control">
			</div>
			<button type="submit">アップロード</button>
		</form>
		{{-- 画像表示 --}}
		@foreach ($images as $image)
		<div>
			@if ($image->image_url !=='')
				<!-- <img src="{{ asset('storage/' . $image->image_url) }}" /> -->
				<img src="{{ \Storage::url($image->image_url) }}" width="25%">
			@else
				<!-- <img src="No_image画像のリンク"> -->
			@endif
		</div>
		@endforeach

	</body>
</html>