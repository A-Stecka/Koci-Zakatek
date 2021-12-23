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
    <title>Formularz adopcyjny</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body>
    <div class="header" id="form_header">
        <img id="adoption_banner" src="images/banner.jpg" alt="Nie udało się załadować baneru :(">
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

        <h2 id="adoption_form_title">Formularz adopcyjny</h2>
        <p id="adoption_form_label">Prosimy o wypełnienie formularza adopcyjnego, jeśli jesteś zainteresowana/y adopcją:</p>
        <form id="adoption_form" method="post" action="form-page-result.php" autocomplete="on">
            <p><label><strong>Imię: </strong></label><input type="text" id="adoption_form_name" name="adoption_form_name" size="54" autofocus></p>
            <p><label><strong>Nazwisko: </strong></label><input type="text" id="adoption_form_surname" name="adoption_form_surname" size="49"></p>
            <p>
                <label><strong>Miesiąc urodzin: </strong></label>
                <input type="text" id="adoption_form_month" name="adoption_form_month" size="44" placeholder="Wybierz miesiąc" list="adoption_form_months">
                <datalist id="adoption_form_months">
                    <option value="Styczeń"></option>
                    <option value="Luty"></option>
                    <option value="Marzec"></option>
                    <option value="Kwiecień"></option>
                    <option value="Maj"></option>
                    <option value="Czerwiec"></option>
                    <option value="Lipiec"></option>
                    <option value="Sierpień"></option>
                    <option value="Wrzesień"></option>
                    <option value="Październik"></option>
                    <option value="Listopad"></option>
                    <option value="Grudzień"></option>
                </datalist>
            </p>
            <p>
                <label class="fixed" for="adoption_form_email"><strong>Adres e-mail: </strong></label>
                <input type="email" id="adoption_form_email" name="adoption_form_email" size="47">
                <p id="helpTextEmail"></p>                
            </p>
            <p>
                <label class="fixed" for="adoption_form_phone"><strong>Numer telefonu: </strong></label>
                <input type="tel" id="adoption_form_phone" name="adoption_form_phone" size="44">
                <p id="helpTextPhone"></p>               
            </p>
            <p>
                <strong id = "adoption_form_list_label">Którego kota chciałabyś/chciałbyś adoptować?</strong>
                <select name = "adoption_form_list">                                          
                        <option id="Łacia" selected>Łacia</option>
                        <option id="Ksandal">Ksandal</option>                   
                        <option id="Puzel">Puzel</option>
                        <option id="Psotka">Psotka</option>                   
                </select>
            </p>
            <p>
                <strong>Czy jesteś osobą pełnoletnią?</strong>
                <label>Tak</label><input type="radio" name="adoption_form_over_18" value=1>
                <label>Nie</label><input type="radio" name="adoption_form_over_18" value=0 checked>
            </p>
            <p>
                <strong>Czy masz alergię na koty?</strong>
                <label>Tak</label><input type="radio" name="adoption_form_allergy" value=1>
                <label>Nie</label><input type="radio" name="adoption_form_allergy" value=0 checked>
            </p>
            <p>
                <strong>Czy masz osiatkowane okna?</strong>
                <label>Tak</label><input type="radio" name="adoption_form_safety_mesh" value=1>
                <label>Nie</label><input type="radio" name="adoption_form_safety_mesh" value=0 checked>
            </p>
            <p>
                <label id = "adoption_form_radio_group_label">Chcielibyśmy również zapytać, skąd dowiedziałaś/eś się o naszej stronie?</label><br>
                <label>Znajomi</label>
                <input type="checkbox" name="adoption_form_reach_method_1">
                <label><a href="http://www.google.com">Google</a></label>
                <input type="checkbox" name="adoption_form_reach_method_2">
                <label><a href="http://www.facebook.com">Facebook</a></label>
                <input type="checkbox" name="adoption_form_reach_method_3">
                <label id = "adoption_form_radio_4_label">Widziałam/em akcje edukacyjne</label>
                <input type="checkbox" name="adoption_form_reach_method_4">
                <label>Inne</label>
                <input type="checkbox" name="adoption_form_reach_method_5">
            </p>
            <p><textarea name="adoption_form_extra" rows=4 cols=100 placeholder="Tu wpisz dodatkowe uwagi."></textarea></p>
            <p>
                <input id="submit_adoption" type="submit">
                <input id="reset_adoption" type="reset">
            </p>
        </form>

    </div>

    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>

    <script src="form-page.js"></script>

</body>

</html>