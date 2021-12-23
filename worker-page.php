<?php
    session_start();
 
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: login.php");
        exit;
    }
?>

<?php 
    define("THIRTY_MINUTES", 60*60*0.5);
    $value = session_id();
    setcookie("session_id", $value, time() + THIRTY_MINUTES);
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
    <title>Strona pracownika</title>
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
        <h3>Witaj <b><?php echo htmlspecialchars($_SESSION["username"]);?></b>!</h3> 
        <p>Zobacz swoje <a href="cookie-session.php">ciasteczko</a></p>
        <p><a href="register.php">Naciśnij tutaj</a>, aby zmienić swoje dane</p>
        <p><a href="logout.php">Naciśnij tutaj</a>, aby się wylogować</p>
        <h3>Zobacz zawartość bazy danych</h3>
        <p>
            <form method="post" action="database.php">
                <p>
                    <label>Wybierz kolumnę, którą chcesz zobaczyć:</label>
                    <select name="select">                   
                        <option selected>*</option>
                        <option>ID</option>
                        <option>Login</option>
                        <option>Imię</option>
                        <option>Nazwisko</option>
                        <option>Hasło</option>    
                        <option>Data utworzenia</option>  
                    </select>
                </p>
                <p><input type="submit" value="Prześlij"></p>
            </form>
        </p>
    </div>

</body>

</html>