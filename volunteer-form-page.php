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
    <title>Zostań wolontariuszem</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja, wolontariat">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body>
    <div class="header">
        <img id = "volunteer_banner" src="images/banner.jpg" alt="Nie udało się załadować baneru :(">
        <div class="nav">
            <ul>
            <li>
                <a name="link" href="main-page.php">Strona główna</a></li>
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

        <h2 id="volunteer_form_title">Formularz dla wolontariuszy</h2>
        <p>Prosimy o wypełnienie formularza, jeśli masz czas i chęci, żeby pomóc naszym podopiecznym.</p>
        <form id="volunteer_form" method="post" action="volunteer-page-result.php" autocomplete="on">
            <p><label><strong>Imię: </strong></label><input type="text" id="volunteer_form_name" name="volunteer_form_name" size="55" autofocus></p>
            <p><label><strong>Nazwisko: </strong></label><input type="text" id="volunteer_form_surname" name="volunteer_form_surname" size="50"></p>
            <p>
                <label><strong>Miesiąc, od którego możesz zacząć: </strong></label>
                <input type="month" id="volunteer_form_month" name="volunteer_form_month" placeholder="Wybierz miesiąc">
            </p>
            <p>
                <label><strong>Adres e-mail: </strong>
                </label><input type="email" id="volunteer_form_email" name="volunteer_form_email" size="47">
                <p id="helpTextEmail"></p>
            </p>
            <p>
                <label><strong>Numer telefonu: </strong></label>
                <input type="tel" id="volunteer_form_phone" name="volunteer_form_phone" size="44">
                <p id="helpTextPhone"></p>
            </p>
            <p>
                <label><strong>Szacunkowa dostępność tygodniowo: </strong></label>
                <strong><label id="range_value_text">20</label> h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                0 <input type="range" name="volunteer_form_hours_range"  min=0 max=40 onchange="updateRangeValue(this.value);" oninput="updateRangeValue(this.value);"> 40                                  
            </p>
            <p>
                <label>Twój blog o kotach: </label>
                <input type="url" size="42" name="volunteer_form_url" placeholder="http://www.kochamkoty.pl">
            </p>
            <p>
                <label id = "volunteer_form_radio_group_label">Chcielibyśmy również zapytać, skąd dowiedziałaś/eś się o naszej stronie?</label><br>
                <label>Znajomi</label>
                <input type="checkbox" name="volunteer_form_reach_method_1">
                <label><a href="http://www.google.com">Google</a></label>
                <input type="checkbox" name="volunteer_form_reach_method_2">
                <label><a href="http://www.facebook.com">Facebook</a></label>
                <input type="checkbox" name="volunteer_form_reach_method_3">
                <label id = "volunteer_form_radio_4_label">Widziałam/em akcje edukacyjne</label>
                <input type="checkbox" name="volunteer_form_reach_method_4">
                <label>Inne</label>
                <input type="checkbox" name="volunteer_form_reach_method_5">
            </p>
            <p><textarea name="volunteer_form_extra" rows=10 cols=100 placeholder="Powiedz nam coś o sobie."></textarea></p>
            <p>
                <input id="submit_volunteer" type="submit">
                <input id="reset_volunteer" type="reset">
            </p>
        </form>

    </div>
    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>

    <script src="volunteer-page.js"></script>
    
</body>

</html>