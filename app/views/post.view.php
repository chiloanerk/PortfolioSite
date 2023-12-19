<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
<form action="/post" method="post">
    <label for="title">Title
        <input type="text" name="title">
    </label>
    <br>
    <label for="content">
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Start writing"></textarea>
    </label>
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>