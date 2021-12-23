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
    <title>Psotka</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body>
    <div class="header" id="psotka_header">
        <img src="images/banner.jpg" alt="Nie udało się załadować baneru :(">
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
        <h1>Psotka</h1>
        <img class="cat_image" src="images/psotka-1.jpg" alt="Nie udało się załadować obrazu :(">
        <p>Psotka jest ok. 2 miesięczną kotką. Lubi zabawę z innymi kotami.</p>
        <h2>Rezultat w plebiscycie na najsłodszego kota</h2>
        <p>Psotka brała udział w plebiscycie na najsłodszego kota, który odbył się na naszym profilu na Facebooku.</p>
        <label for="meter">Wynik:</label>
        <meter min="0" max="100" value="84"></meter>
        <p>Psotka uzyskała łącznie 84 głosy i uplasowała się na drugim miejscu! Wszystkim, którzy oddali głosy
            serdecznie dziękujemy.</p>
        <p><a href="#psotka_header">Wróć do góry strony</a></p>
    </div>

    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>
</body>

</html>