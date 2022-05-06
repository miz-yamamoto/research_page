<?php
    session_start();

    $_SESSION["last_name"] = htmlspecialchars(@$_POST['last_name'], ENT_QUOTES, 'UTF-8');
    $_SESSION["first_name"] = htmlspecialchars(@$_POST['first_name'], ENT_QUOTES, 'UTF-8');
    $_SESSION["last_name-f"] = htmlspecialchars(@$_POST['last_name-f'], ENT_QUOTES, 'UTF-8');
    $_SESSION["first_name-f"] = htmlspecialchars(@$_POST['first_name-f'], ENT_QUOTES, 'UTF-8');
    $_SESSION["birth_year"] = htmlspecialchars(@$_POST['birth_year'], ENT_QUOTES, 'UTF-8');
    $_SESSION["birth_month"] = htmlspecialchars(@$_POST['birth_month'], ENT_QUOTES, 'UTF-8');
    $_SESSION["birth_day"] = htmlspecialchars(@$_POST['birth_day'], ENT_QUOTES, 'UTF-8');
    $_SESSION["gender"] = $_POST['gender'];
    $_SESSION["postalCode"] = htmlspecialchars(@$_POST['postalCode'], ENT_QUOTES, 'UTF-8');
    $_SESSION["addles-a_origin"] = htmlspecialchars(@$_POST['addles-a'], ENT_QUOTES, 'UTF-8');
    switch($_SESSION["addles-a_origin"]){
        case "1":
            $_SESSION["addles-a"] =("北海道");
            break;
        case "2":
            $_SESSION["addles-a"] =("青森県");
            break;
        case "3":
            $_SESSION["addles-a"] =("岩手県");
            break;
        case "4":
            $_SESSION["addles-a"] =("宮城県");
            break;
        case "5":
            $_SESSION["addles-a"] =("秋田県");
            break;
        case "6":
            $_SESSION["addles-a"] =("山形県");
            break;
        case "7":
            $_SESSION["addles-a"] =("福島県");
            break;
        case "8":
            $_SESSION["addles-a"] =("茨城県");
            break;
        case "9":
            $_SESSION["addles-a"] =("栃木県");
            break;
        case "10":
            $_SESSION["addles-a"] =("群馬県");
            break;
        case "11":
            $_SESSION["addles-a"] =("埼玉県");
            break;
        case "12":
            $_SESSION["addles-a"] =("千葉県");
            break;
        case "13":
            $_SESSION["addles-a"] =("東京都");
            break;
        case "14":
            $_SESSION["addles-a"] =("神奈川県");
            break;
        case "15":
            $_SESSION["addles-a"] =("新潟県");
            break;
        case "16":
            $_SESSION["addles-a"] =("富山県");
            break;
        case "17":
            $_SESSION["addles-a"] =("石川県");
            break;
        case "18":
            $_SESSION["addles-a"] =("福井県");
            break;
        case "19":
            $_SESSION["addles-a"] =("山梨県");
            break;
        case "20":
            $_SESSION["addles-a"] =("長野県");
            break;
        case "21":
            $_SESSION["addles-a"] =("岐阜県");
            break;
        case "22":
            $_SESSION["addles-a"] =("静岡県");
            break;
        case "23":
            $_SESSION["addles-a"] =("愛知県");
            break;
        case "24":
            $_SESSION["addles-a"] =("三重県");
            break;
        case "25":
            $_SESSION["addles-a"] =("滋賀県");
            break;
        case "26":
            $_SESSION["addles-a"] =("京都府");
            break;
        case "27":
            $_SESSION["addles-a"] =("大阪府");
            break;
        case "28":
            $_SESSION["addles-a"] =("兵庫県");
            break;
        case "29":
            $_SESSION["addles-a"] =("奈良県");
            break;
        case "30":
            $_SESSION["addles-a"] =("和歌山県");
            break;
        case "31":
            $_SESSION["addles-a"] =("鳥取県");
            break;
        case "32":
            $_SESSION["addles-a"] =("島根県");
            break;
        case "33":
            $_SESSION["addles-a"] =("岡山県");
            break;
        case "34":
            $_SESSION["addles-a"] =("広島県");
            break;
        case "35":
            $_SESSION["addles-a"] =("山口県");
            break;
        case "36":
            $_SESSION["addles-a"] =("徳島県");
            break;
        case "37":
            $_SESSION["addles-a"] =("香川県");
            break;
        case "38":
            $_SESSION["addles-a"] =("愛媛県");
            break;
        case "39":
            $_SESSION["addles-a"] =("高知県");
            break;
        case "40":
            $_SESSION["addles-a"] =("福岡県");
            break;
        case "41":
            $_SESSION["addles-a"] =("佐賀県");
            break;
        case "42":
            $_SESSION["addles-a"] =("長崎県");
            break;
        case "43":
            $_SESSION["addles-a"] =("熊本県");
            break;
        case "44":
            $_SESSION["addles-a"] =("大分県");
            break;
        case "45":
            $_SESSION["addles-a"] =("宮崎県");
            break;
        case "46":
            $_SESSION["addles-a"] =("鹿児島県");
            break;
        case "47":
            $_SESSION["addles-a"] =("沖縄県");
            break;
        default:
            break;
}
    $_SESSION["addles-b"] = htmlspecialchars(@$_POST['addles-b'], ENT_QUOTES, 'UTF-8');
    $_SESSION["addles-c"] = htmlspecialchars(@$_POST['addles-c'], ENT_QUOTES, 'UTF-8');
    $_SESSION["experience"] = $_POST['experience'];
    $_SESSION["PR"] = htmlspecialchars(@$_POST['PR'], ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>入力確認</title>
        <link rel="stylesheet" href="./stylesheet.css">
    </head>
    <body>

        <section class="title">
            <div class="top-decoration"></div>
            <h1>入力確認</h1>
            <div class="border"></div>
            <p class="overview">入力に誤りがないかご確認ください。</p>
        </section>

        <div class="form_dummy">
            <section>
                <div class="section-inner">
                    <h2>1.氏名</h2>
                    <p><?php echo $_SESSION["last_name"]?> <?php echo $_SESSION["first_name"]?></p>
                </div>

                <div class="form_border"></div>

                <div class="section-inner">
                    <h2>2.フリガナ</h2>
                    <p><?php echo $_SESSION["last_name-f"]?> <?php echo $_SESSION["first_name-f"]?></p>
                </div>

                <div class="form_border"></div>

                <div class="section-inner">
                    <h2>3.生年月日</h2>
                    <p><?php echo $_SESSION["birth_year"] ?>年 <?php echo $_SESSION["birth_month"] ?>月 <?php echo $_SESSION["birth_day"] ?>日</p>
                </div>

                <div class="form_border"></div>

                <div class="section-inner">
                    <h2>4.性別</h2>
                    <?php
                        switch($_SESSION["gender"]){
                            case "1":
                                echo ("男");
                                break;
                            case "2":
                                echo ("女");
                                break;
                            case "3":
                                echo ("その他");
                                break;
                            default:
                                break;
                    }
                    ?>
                </div>

                <div class="form_border"></div>

                <div class="section-inner">
                    <h2>5.郵便番号</h2>
                    <p>〒<?php $PostalCode = $_SESSION["postalCode"];
                            echo substr($PostalCode, 0, 3), "-", substr($PostalCode, 3, 4); ?></p>
                </div>

                <div class="form_border"></div>

                <div class="section-inner">
                    <h2>6.住所</h2>
                    <p><?php echo $_SESSION['addles-a'], $_SESSION['addles-b'] ?></p>
                </div>

                <div class="form_border"></div>

                <div class="section-inner">
                    <h2>7.住所（番地・部屋番号・建物名）</h2>
                    <p><?php echo $_SESSION['addles-c']?></p>
                </div>

                <div class="form_border"></div>

                <div class="section-inner">
                    <h2>8.経験のある言語</h2>
                    <p><?php $Experience = $_SESSION["experience"];
                            foreach($Experience as $Exp){
                                echo $Exp, " ";
                            } ?></p>
                </div>

                <div class="form_border"></div>

                <div class="section-inner">
                    <h2>9.自己PR</h2>
                    <p><?php echo $_SESSION['PR'] ?></p>
                </div>
            </section>

            <div class="transition">
                    <button class="btn" type="button" onclick="history.back()">戻る</button>
                    <button class="btn" onclick="location.href='./DB.php'">入力を完了する</button>
            </div>
        </div>


        <script type="text/javascript" src="./javascript.js"></script>
    </body>
</html>