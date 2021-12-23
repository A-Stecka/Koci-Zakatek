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

<?php
    //stałe
    define("FRIENDS", "Znajomi");
    define("GOOGLE", "Google");
    define("FACEBOOK", "Facebook");
    define("EDUCATION", "Akcje edukacyjne");
    define("OTHER", "Inne");

    $name = $_POST["volunteer_form_name"];
    $surname = $_POST["volunteer_form_surname"];
    $month = $_POST["volunteer_form_month"];
    $email = $_POST["volunteer_form_email"];
    $phone = $_POST["volunteer_form_phone"];
    $hours = $_POST["volunteer_form_hours_range"];

    //tablice indeksowane + typowanie dynamiczne ($reach_method może po tym wszystkim być stringiem lub tablicą)
    if (array_key_exists("volunteer_form_url", $_POST))
        $url = $_POST["volunteer_form_url"];
    else
        $url = "";

    $i = 0;
    if (array_key_exists("volunteer_form_reach_method_1", $_POST)) {
        $reach_method[$i] = FRIENDS;
        ++$i;
    }
    if (array_key_exists("volunteer_form_reach_method_2", $_POST)) {
        $reach_method[$i] = GOOGLE;
        ++$i;
    }
    if (array_key_exists("volunteer_form_reach_method_3", $_POST)) {
        $reach_method[$i] = FACEBOOK;
        ++$i;
    }
    if (array_key_exists("volunteer_form_reach_method_4", $_POST)) {
        $reach_method[$i] = EDUCATION;
        ++$i;
    }
    if (array_key_exists("volunteer_form_reach_method_4", $_POST)) {
        $reach_method[$i] = OTHER;
        ++$i;
    }
    if ($i == 0) 
        $reach_method = "";
    
    if (array_key_exists("volunteer_form_extra", $_POST))
        $extra = $_POST["volunteer_form_extra"];
    else
        $extra = "";
?>

<head>
    <meta charset="utf-8">
    <title>Dziękujemy!</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords" content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja">
    <meta name="description" content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body class>
    <div class="header">
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
    <h2>Bardzo dziękujemy za przesłanie formularza :)</h2>
        <h3>Wprowadzone dane:</h3>
        <p>
            <?php 
                print("<strong>Imię i nazwisko:</strong> $name $surname<br>");
                print("<strong>Miesiąc rozpoczęcia współpracy:</strong> $month<br>");
                print("<strong>Adres e-mail:</strong> $email<br>");
                print("<strong>Numer telefonu:</strong> $phone<br>");
                print("<strong>Dostępność tygodniowo:</strong> $hours<br>");
                print("<strong>Blog o kotach:</strong> $url<br>");
                print("Metoda dowiedzenia się o fundacji: ");
                if (is_string($reach_method))
                    print($reach_method);
                else {
                    $i = 0;
                    for (reset($reach_method); $value = key($reach_method); next($reach_method)) {
                        print($value);
                        if ($i != count($reach_method) - 1) 
                            print(", ");
                        ++$i;
                    }
                }
                print("<br>");
                print("Uwagi: $extra");
            ?>
        </p>
        <p><strong>Dodatkowe informacje o użytkowniku:</strong></p>
        <p>
            <?php 
                print("Nazwa użytkownika: " . getenv("USERNAME") . "<br>");
                print("Nazwa domeny: " . getenv("USERDOMAIN") . "<br>");
                print("Adres IP: " . $_SERVER["REMOTE_ADDR"] . "<br>");
                print("Metoda wykorzystana w zapytaniu do serwera: " . $_SERVER["REQUEST_METHOD"]);
            ?>
        </p>
        <p><strong>Dodatkowe informacje o serwerze:</strong></p>
        <p>
            <?php 
                print("Nazwa serwera: " . $_SERVER["SERVER_NAME"] . "<br>");
                print("Adres serwera: " . $_SERVER["SERVER_ADDR"] . "<br>");
                print("Numer portu serwera: " . $_SERVER["SERVER_PORT"] . "<br>");
                print("Wykorzystywany protokół: " . $_SERVER["SERVER_PROTOCOL"] . "<br>");
            ?>
        </p>
        <p>
            <?php 

                //sprawdzanie imienia
                if (!preg_match("/^[A-Z][[:alpha:]]*$/", $name)) {
                    print("<h2>Podano niewłaściwe imię!</h2><h3>Proszę wypełnić formularz ponownie i podać tylko pierwsze imię zaczynające się wielką literą.</h3>");
                    die();
                }

                //sprawdzanie nazwiska
                while (preg_match("/\b[A-Z][[:alpha:]]*\b/", $surname, $found_names))
                    $surname = preg_replace("/" . $found_names[0] . "/", "", $surname);
                if ($surname != "") {
                    $surname_array = str_split($surname);
                    foreach ($surname_array as $char) 
                        if ($char != "-") {
                            print("<h2>Podano niewłaściwe nazwisko!</h2><h3>Proszę wypełnić formularz ponownie i podać nazwisko zaczynające się wielką literą.<br>
                                Jeśli nazwisko jest wieloczłonowe, proszę podać każdy człon zaczynając go wielką literą i poprzedzielać człony znakiem myślnika, 
                                np. \"Stecka-Tlołka\".</h3>");
                            die();
                        }
                }

                //sprawdzenie miesiąca
                if ($month == "") {
                    print("<h2>Nie podano miesiąca rozpoczęcia współpracy!</h2><h3>Proszę wypełnić formularz ponownie i wybrać z listy miesiąc rozpoczęcia współpracy.</h3>");
                    die();
                }
                
                //sprawdzanie adresu e-mail
                if (!preg_match("/^[0-9a-zA-Z.]*@[0-9a-zA-Z.]*.pl$/", $email) && !preg_match("/^[0-9a-zA-Z.]*@[0-9a-zA-Z.]*.com$/", $email)) {
                    print("<h2>Podano niewłaściwy adres e-mail!</h2><h3>Proszę wypełnić formularz ponownie i podać adres e-mail w formacie nazwa@domena.com 
                        lub w formacie nazwa@domena.pl, np. \"jankowalski@gmail.com\" lub \"jankowalski@student.pwr.edu.pl\"</h3>");
                    die();
                }

                //sprawdzanie numeru telefonu
                if (!preg_match("/^\+48 [0-9]{3} [0-9]{3} [0-9]{3}$/", $phone)) {
                    print("<h2>Podano niewłaściwy numer telefonu!</h2><h3>Proszę wypełnić formularz ponownie i podać numer telefonu w formacie +48 ### ### ### 
                        np. +48 123 456 789.</h3>");
                    die();
                }

                //sprawdzanie dostępności 
                if ((int)$hours == 0) {
                    print("<h2>Podano zerową dostępność tygodniowo!</h2><h3>Proszę wypełnić formularz ponownie i podać dostępność tygodniową większą niż zero.</h3>");
                    die();
                }

                //sprawdzanie url jeśli już podano
                if ($url != "")
                    if (!preg_match("/^http:\/\/www.[0-9a-zA-Z.]*.pl$/", $url) && !preg_match("/^http:\/\/www.[0-9a-zA-Z.]*.com$/", $url) 
                        && !preg_match("/^https:\/\/www.[0-9a-zA-Z.]*.pl$/", $url) && !preg_match("/^https:\/\/www.[0-9a-zA-Z.]*.com$/", $url)) {
                            print("<h2>Podano niewłaściwy adres URL!</h2><h3>Proszę wypełnić formularz ponownie i podać istniejący adres URL.</h3>");
                            die();
                        }

                //komunikat potwierdzający poprawne przesłanie formularza
                print("<h2>Prosimy czekać na kontakt pracownika fundacji.</h2>");
            ?>
        </p>
    </div>

</body>

</html>