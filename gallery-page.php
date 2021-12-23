<?php
session_start();
?>

<!DOCTYPE html>

<html lang="pl">

<?php 
    if (array_key_exists("style", $_COOKIE)) {
        if ($_COOKIE["style"] == "domyślny")
            $css = "olive-style.css";
        elseif ($_COOKIE["style"] == "brązowy")
            $css = "brown-style.css";
        elseif ($_COOKIE["style"] == "domyślny, tło białe")
            $css = "olive-white-style.css";
        elseif ($_COOKIE["style"] == "brązowy, tło białe")
            $css = "brown-white-style.css";
        elseif ($_COOKIE["style"] == "skala szarości")
            $css = "grey-style.css";
    }
    else
        $css = "olive-style.css";
?>

<head>
    <meta charset="utf-8">
    <title>Galeria</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body>
    <div class="header" id="gallery_header">
        <img id="gallery_banner" src="images/banner.jpg" alt="Nie udało się załadować baneru :(">
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

    <div class="content_center">
        <?php 
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                print("<h3>Galeria jest dostępna tylko dla zalogowanych użytkowników.</h3>");
                exit;
            }
                $username = $_SESSION["username"];
                print("<h3>Witaj $username!</h3>");
                print("<img class=\"cat_image\" src=\"images/lacia-1.jpg\" alt=\"Nie udało się załadować obrazu :(\"><br>");
                print("<img class=\"cat_image\" src=\"images/ksandal-1.jpg\" alt=\"Nie udało się załadować obrazu :(\"><br>");
                print("<img class=\"cat_image\" src=\"images/puzel-1.jpg\" alt=\"Nie udało się załadować obrazu :(\"><br>");
                print("<img class=\"cat_image\" src=\"images/psotka-1.jpg\" alt=\"Nie udało się załadować obrazu :(\"><br>");
                print("<img class=\"cat_image\" src=\"images/szalwia-1.jpg\" alt=\"Nie udało się załadować obrazu :(\"><br>");
                print("<img class=\"cat_image\" src=\"images/szpitalna-mama-1.jpg\" alt=\"Nie udało się załadować obrazu :(\"><br>");
                print("<img class=\"cat_image\" src=\"images/kicia-lapka-1.jpg\" alt=\"Nie udało się załadować obrazu :(\"><br>");
                print("<img class=\"cat_image\" src=\"images/kot-marii-1.jpg\" alt=\"Nie udało się załadować obrazu :(\">");
           
        ?>

        <p><a href="#gallery_header">Wróć do góry strony</a></p>
    </div>

    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>

</body>

</html>