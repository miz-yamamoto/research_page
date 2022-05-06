<?php

            $dsn = 'mysql:dbname=test;host=localhost';
            $user = 'root';
            $password = '';

            session_start();

            $a = $_SESSION['last_name'];
            $b = $_SESSION['first_name'];
            $c = $_SESSION['last_name-f'];
            $d = $_SESSION['first_name-f'];
            $f = $_SESSION['birth_year'];
            $g = $_SESSION['birth_month'];
            $h = $_SESSION['birth_day'];
            $i = $_SESSION["gender"];
            $j = $_SESSION["postalCode"];
            $k = $_SESSION['addles-a'];
            $l = $_SESSION['addles-b'];
            $m = $_SESSION['addles-c'];
            $n = $_SESSION["experience"];
            $o = $_SESSION['PR'];

            $ary_experience = implode("-", $n);

//            var_dump($ary_exparience);
            try {

                $dbh = new PDO($dsn, $user, $password);

                $sql = "insert into research (name_last, name_first, name_last_f, name_first_f, birthyear, birthmonth, birthday, gender, postalcode, addles_a, addles_b, addles_c, experience, PR)
                values ('$a', '$b', '$c',' $d', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$ary_experience', '$o' )";
                $stmt = $dbh->prepare($sql);
                //echo $sql;
                // exit;
                $stmt->execute();
            }catch (PDOException $error){
                print('Error:'.$error->getMessage());
                die();
            }
        ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>完了画面</title>
        <link rel="stylesheet" href="./stylesheet.css">
        <script type="text/javascript" src="./javascript.js"></script>
    </head>

    <body>

        <section class="title">
            <div class="top-decoration"></div>
            <h1>ご協力ありがとうございました</h1>
            <div class="border"></div>
            <p class="overview">アンケートはこれで終了です。</p>
        </section>

        <div class="form_dummy">
            <button class="btn" onclick="location.href='./index.php'">最初の画面へ戻る</button>
        </div>
    </body>
</html>