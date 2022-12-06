<html>
<head>
<title>REST_FORM</title>
</head>
<body>
<form action="/items" method="POST">
{{ csrf_field() }}
user_id:<input type="text" name="user_id"><br>
name:<input type="text" name="name"><br>
description:<input type="text" name="description"><br>
price:<input type="text" name="price"><br>
collateral:<input type="text" name="collateral"><br>
<input type="submit" value="send">
</form>
</body>
</html>