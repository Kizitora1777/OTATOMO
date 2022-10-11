<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>database debug</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div>
    <h1>all users</h1>
      {{ $all_users }}
  </div>

  <div>
    <h1>all items</h1>
      {{ $all_items }}
  </div>

  <div>
    <h1>all rentals</h1>
      {{ $all_rentals }}
  </div>

  <div>
    <h1>all images</h1>
     {{ $all_images }}
  </div>

  <div>
    <h1>debug</h1>
      {{ $debug }}
  </div>
</body>
</html>