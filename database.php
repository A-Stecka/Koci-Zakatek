<!DOCTYPE html>

<?php
    session_start();
    require_once "config.php";
?>

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
        
        <?php 
            $option = $_POST["select"];

            if ($option == "ID")
                $option = "id";
            elseif ($option == "Login")
                $option = "username";
            elseif ($option == "Hasło")
                $option = "password";
            elseif ($option == "Imię")
                $option = "name";
            elseif ($option == "Nazwisko")
                $option = "surname";
            elseif ($option == "Data utworzenia")
                $option = "created_at";
            
            $query = "select " . $option . " from users";
            $query_result = mysqli_query($link, $query);

            if (!$query_result)
                die("ERROR: Could not execute query because: " . mysqli_error($link) . "</div></body></html>");
            
            mysqli_close($link);
        ?>

        <?php
            $print_column = true;

            if ($option == "*")
                print("<h2>Dane z wszystkich kolumn w bazie: </h2>");
            else
                print("<h2>Dane z kolumny " . $option . ".</h2>");

            while ($row=mysqli_fetch_assoc($query_result)) {
                print("<tr>");
                if ($print_column) {
                    print("<h3>");
                    foreach ($row as $column => $value)
                        print("<td>" . $column . "    </td>");
                    $print_column = false;
                    print("</h3></tr><tr>");
                }
                foreach ($row as $column => $value) 
                    print("<td>" . quotemeta($value) . "    </td>");
                print("<br></tr>");
            }

            print("<h3>Liczba rekordów w bazie: " . mysqli_num_rows($query_result) . "</h3>");
        ?>

    </div>

</body>

</html>