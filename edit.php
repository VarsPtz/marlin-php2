<?php
include 'functions.php';
$db = include 'database/start.php';

$id = $_GET['id'];
$post = $db->getOne('post', $id);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Create Post</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/update.php?id=<?php echo $post['id'];?>" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?php echo $post['title'];?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-warning">Edit Post</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
