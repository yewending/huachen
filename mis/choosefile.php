<html>
<head>
    <meta charset="utf-8">
    <title>upload</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="file">文件名：</label>
    <input type="file" name="file" id="file"><br>
    <textarea name="article"></textarea>
    <input type="submit" name="submit" value="提交">

</form>

</body>
</html>