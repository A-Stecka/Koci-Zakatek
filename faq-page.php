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
    <title>Najczęściej zadawane pytania</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body>
    <div class="header" id="faq_header">
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

    <div class="content_left">
        <h1>FAQ</h1>
        <ol>
            <li class="list_level_1">Jak mogę adoptować zwierzę?</li>
            <details>
                <summary>Zrób kilka prostych kroków:</summary>
                <ol>
                    <li><a href="animals-page.php">Przejrzyj ogłoszenia na stronie.</a></li>
                    <li>Zapoznaj się z <a href="statute/Regulamin.pdf" download="regulamin">regulaminem</a></li>
                    <li><a href="form-page.php">Wypełnij formularz adopcyjny.</a></li>
                    <li>Poczekaj na weryfikację i telefon z fundacji.</li>
                </ol>
            </details>
            <li class="list_level_1">Jaki kot będzie dla mnie odpowiedni?</li>
            <details>
                <summary>Zastanów się nad poniższymi aspektami:</summary>
                <ol>
                    <li>wiek zwierzęcia,</li>
                    <li>przyszłość - kota adoptujemy na lata, nie na kilka dni,</li>
                    <li>wielkość zwierzęcia,</li>
                    <li>usposobienie zwierzęcia,</li>
                    <li>inne zwierzęta w domu,</li>
                    <li>inni domownicy.</li>
                </ol>
            </details>
            <li class="list_level_1">Co zrobić, jeśli znalazłam/em kota?</li>
            <details>
                <summary>Masz dwa wyjścia:</summary>
                <ol>
                    <li>Przywieź zwierzę do schroniska</li>
                    <li>Skontaktuj się z naszym kierowcą</li>
                </ol>
            </details>
            <li class="list_level_1">Jak mogę pomóc?</li>
            <details>
                <summary>Nasze propozycje:</summary>
                <ol>
                    <li>Zostań wolontariuszem! Wystarczy jedynie wypełnić <a href="volunteer-form-page.php">formularz</a></li>
                    <li><a href="donation-page.php">Wpłać datek</a> - każda złotówka się liczy!</li>
                </ol>
            </details>
        </ol>
        <p>Jeśli masz jeszcze jakieś pytania wyślij <a href="mailto:fundacja@schronisko.com">e-mail</a> do fundacji.</p>
    </div>

    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>
</body>

</html>