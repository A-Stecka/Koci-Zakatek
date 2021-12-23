<!DOCTYPE html>

<?php 
    define("ONE_DAY", 60*60*24);
    $value = $_POST["main_style_sheet"];
    setcookie("style", $value, time() + ONE_DAY);
?>

<html lang="pl">

<?php 
    if ($_POST["main_style_sheet"] == "domyślny")
        $css = "olive-style.css";
    elseif ($_POST["main_style_sheet"] == "brązowy")
        $css = "brown-style.css";
    elseif ($_POST["main_style_sheet"] == "domyślny, tło białe")
        $css = "olive-white-style.css";
    elseif ($_POST["main_style_sheet"] == "brązowy, tło białe")
        $css = "brown-white-style.css";
    elseif ($_POST["main_style_sheet"] == "skala szarości")
        $css = "grey-style.css";
?>

<head>
    <meta charset="utf-8">
    <title>Łapy i Pazury</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body>
    <div class="header" id="main_header">
        <img id="main_banner" src="images/banner.jpg" alt="Nie udało się załadować baneru :(">
        <div class="nav">
            <ul>
                <li><a name="link" href="main-page.php">Strona główna</a></li>
                <li><a name="link" href="animals-page.php">Zwierzęta</a></li>
                <li><a name="link" href="form-page.php">Adopcja</a></li>
                <li><a name="link" href="volunteer-form-page.php">Wolontariat</a></li>
                <li><a name="link" href="donation-page.php">Jak pomóc?</a></li>
                <li><a name="link" href="faq-page.php">FAQ</a></li>
                <li><a name="link" href="gallery-page.php">Galeria</a></li>
                <li><a name="link" href="login.php">Zaloguj się</a></li>
            </ul>
        </div>
    </div>

    <div class="content_left">

        <div id="main_personalise">
            <h2>Personalizuj wygląd strony</h2>
            <p>Zapamiętano wygląd strony.</p>
            <p><a href="cookie.php">Zobacz swoje ciasteczko.</a></p>
        </div>

    </div>

    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>
    
    <script src="main-page.js"></script>
</body>

</html>