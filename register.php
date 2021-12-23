<?php
    require_once "config.php";
    session_start();
    
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        $logged_in = true;
        $username = $_SESSION["username"];
        $action_name = "Witaj $username - edytuj swoje dane";
        $submit_name = "Zapisz zmiany";
        $reset_name = "Resetuj";

        $sql="SELECT * FROM users WHERE username = '$username'";
        
        if ($result = mysqli_query($link, $sql)){                
            $row = mysqli_fetch_assoc($result);
            $name = $row["name"];
            $surname = $row["surname"];
            $password = $row["password"];
        }
    } else {
        $logged_in = false;
        
        $username = $name = $surname = $password = "";

        $action_name = "Zarejestruj się";
        $submit_name = "Utwórz konto";
        $reset_name = "Wyczyść";
    }

    $username_err = $name_err = $surname_err = $password_err = "";
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!$logged_in) {
            if (empty(trim($_POST["username"])))
                $username_err = "Wprowadź login.";
            elseif (!preg_match('/^[a-zA-Z0-9_\/\(\)]+$/', trim($_POST["username"])))
                $username_err = "Login może zawierać tylko litery, liczby, _, / lub (, ).";
            else {
                $username = trim($_POST["username"]);
                $sql = "SELECT id FROM users WHERE username = '$username'";        
       
                if ($result = mysqli_query($link, $sql))              
                    if (mysqli_num_rows($result) == 1) {
                        $username_err = "Podany login już istnieje.";
                        $username = "";
                    } 
            }
        }

        if (empty(trim($_POST["name"])))
            $name_err = "Wprowadź imię.";     
        else
            $name = trim($_POST["name"]);

        if (empty(trim($_POST["surname"])))
            $surname_err = "Wprowadź nazwisko.";     
        else
            $surname = trim($_POST["surname"]);
    
        if (empty(trim($_POST["password"])))
            $password_err = "Wprowadź hasło.";     
        else
            $password = trim($_POST["password"]);
    
        if (empty($username_err) && empty($name_err) && empty($surname_err) && empty($password_err)) { 

            if (!$logged_in) 
                $sql="INSERT INTO users (username, name, surname, password) VALUES ('$username', '$name', '$surname', '$password')";
            else 
                $sql="UPDATE users SET name = '$name', surname = '$surname', password = '$password' WHERE username='$username'";
         
            if ($result=mysqli_query($link, $sql))
                header("location: login.php");
            else
                echo "Coś poszło nie tak.";
        }
    }

    mysqli_close($link);
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
    <meta charset="UTF-8">
    <title>Rejestracja</title>
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

    <div class="content_left">
        <h2><?php echo $action_name ?></h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <p>
                    <label>Login: </label>
                    <?php
                        if ($logged_in)
                            print("<input type=\"text\" name=\"username\" class=\"form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>\" value=\"" . $username . 
                                "\" size=\"40\" readonly>");
                        else 
                            print("<input type=\"text\" name=\"username\" class=\"form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>\" value=\"" . $username . 
                                "\" size=\"40\">");
                    ?>
                    
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </p>
            </div>
            <div class="form-group">
                <p>
                    <label>Imię:  </label>
                    <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>" size="41">
                    <span class="invalid-feedback"><?php echo $name_err; ?></span>
                </p>
            </div> 
            <div class="form-group">
                <p>
                    <label>Nazwisko: </label>
                    <input type="text" name="surname" class="form-control <?php echo (!empty($surname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $surname; ?>" size="37">
                    <span class="invalid-feedback"><?php echo $surname_err; ?></span>
                </p>
            </div> 
            <div class="form-group">
                <p>
                    <label>Hasło: </label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" size="40">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </p>
            </div>
            <div class="form-group">
                <p>
                    <input type="submit" class="btn btn-primary" value="<?php echo $submit_name ?>">
                    <input type="reset" class="btn btn-secondary ml-2" value="<?php echo $reset_name ?>">
                </p>
            </div>
            <?php 
                if (!$logged_in)
                    print("<p>Posiadasz już konto? <a href=\"login.php\">Zaloguj się</a>.</p>")
            ?>
        </form>
    </div>

</body>

</html>