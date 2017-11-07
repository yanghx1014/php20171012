<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
    <link rel="stylesheet" href="./bootstrap/js/jquery-3.2.1.js">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <style>
        body {
            padding: 30px;
        }
    </style>
</head>
<body>
<?php
    $link = mysqli_connect("localhost","root","root","php20171107");
?>
    <div class="container">
        <div class="row">
            <form action="" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="" class="control-label col-md-2">主题：</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="text" value="发布留言" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
    if ($_POST['title']){
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "INSERT INTO message(title,content) VALUE ($title,$content)";
        $res = $mysqli_query($sql,$link);
    }
?>
</body>
</html>