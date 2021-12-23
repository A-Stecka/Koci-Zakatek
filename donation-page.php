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
    <title>Jak mogę pomóc?</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja, wolontariat">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body>
    <div class="header">
        <img id="donation_banner" src="images/banner.jpg" alt="Nie udało się załadować baneru :(">
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
        <h2>Adoptuj!</h2>
        <p><a href="animals-page.php">Adoptuj naszych podopiecznych</a> lub namawiaj swoich znajomych do adopcji. W ten sposób wspierasz nie tylko naszą fundację, ale i koty wolnożyjące ogółem.</p>
        <p>Nawet jeśli nie jesteś kociarzem lub wsród naszych podopiecznych nie udało Ci się znaleźć wymarzonego pupila, wspieraj w ten sposób inne fundacje i schroniska.</p>
        <p>Adopcja górą!</p>

        <h2>Zostań wolontariuszem!</h2>
        <p>Wypełnij <a href="volunteer-form-page.php">formularz wolontariacki</a> aby pomóc nam zajmować się kotami, które znajdują się pod naszą opieką.</p>
        <p>Potrzebujemy wolontariuszy do pomocy przy sprzątaniu kuwet, karmieniu i myciu misek, podawaniu wody. Studentów weterynarii prosimy o pomoc w podawaniu tabletek 
            i robieniu zastrzyków.</p>
        <p>Nie martw się jeśli nie masz doświadczenia ze zwierzętami - wszystkiego Cię nauczymy!</p>

        <h2>Przyjmuj zwierzęta na dom tymczasowy!</h2>
        <p>Dom tymczasowy to przyjęcie zwierzęcia do swojego domu na pewien czas - w przeciwieństwie do domu stałego, kiedy przyjmujemy zwierzę na zawsze. Jest do dobra opcja
            dla zwierząt, które potrzebują częstej pomocy (na przykład karmienie kociąt), są nieśmiałe i boją się innych kotów (i czują się niekomfortowo w kociarni) czy też 
            obawiają się człowieka (w naszej kociarni większość czasu koty są same - w Twoim domu niekoniecznie).</p>
        <p>Dla wielu zwierząt jest to jedyna szansa na rozwiązanie problemów zdrowotnych lub behawioralnych i, w końcu, adopcję.</p>
        <p>Ponownie, jeśli nie chcesz być domem tymczasowym dla naszych kotów pamiętaj, że we Wrocławiu działają też inne schroniska i fundacje, którym możesz pomóc.</p>

        <h2>Wpłać datek!</h2>
        <p>Wpłać datek na nasz rachunek bankowy o numerze 00 0000 0000 0000 0000 0000 0000</p>
        <p>Nasze koty jedzą 200 gram mokrej karmy dziennie - kupujemy puszki Animonda Carny w cenie 5,47 zł za jedną puszkę o objętości 400 gram (dobrze liczycie, jedna puszka 
            na dwa koty). Oprócz tego, mają stały dostęp do suchej karmy i wolontariusze oferują im wiele przysmaków :)</p>
        <p>Zobacz, jak długo możemy karmić naszych podopiecznych za Twój datek.</p>
        <form id="donation_form" action="">
            <p><label><strong>Kwota datku: </strong></label><input type="text" id="donation_form_donation" size="28"></p>
            <p><label><strong>Ile kotów chcesz wykarmić? </strong></label><input type="text" id="donation_form_no_of_cats" size="15"></p>
            <p><input id="calculate_button" type="button" value="Oblicz"></p>
        </form>
        <h3>
            Za kwotę <span id="result_value">100 zł</span> kupimy <span id="result_no_of_cans">18</span> <span id="correct_grammar_cans">puszek</span>.
            Dzięki temu <span id="result_no_of_cats">2</span> z naszych podopiecznych będzie <span id="correct_grammar_cats">miało pełne brzuszki</span> przez 
            <span id="result_no_of_days">18</span> <span id="correct_grammar_days">pełnych dni</span>.
        </h3>
        
    </div>

    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>

    <script src="donation-page.js"></script>

</body>

</html>