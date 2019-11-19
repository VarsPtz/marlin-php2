<?php
    function dd($data) {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }

    function getAllPosts() {
        //1. Соед. с базой
        $pdo = new PDO('mysql:host=localhost;dbname=app3;charset=utf8;', 'root', '' );

        //2. Выполнить запрос
        $sql = 'SELECT * FROM `posts`';
        $statement = $pdo->prepare($sql);
        $statement->execute();

        //3. Получить ассоциативный массив -> $posts
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $posts;
    }
?>


