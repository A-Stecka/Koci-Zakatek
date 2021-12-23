<?php
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }

    require_once "config.php";
 
    $new_password = "";
    $new_password_err = $confirm_password_err = "";
    $username = $_SESSION["username"];
 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
 
        if (empty(trim($_POST["new_password"]))){
            $new_password_err = "Wprowadź nowe hasło.";     
        } else {
            $new_password = trim($_POST["new_password"]);
        }

        if (!empty($username)){
        
            if (empty($new_password_err) && empty($confirm_password_err)){

                $sql="UPDATE users SET password = '$new_password' WHERE username='$username'";
        
                if ($result = mysqli_query($link, $sql)) {
                    session_destroy();
                    header("location: login.php");
                    exit();
                } else {
                    echo "Coś poszło nie tak. Spróbuj ponownie później.";
                }
            }
        } else {
            echo "Coś poszło nie tak. Spróbuj ponownie później.";
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
    <title>Zmień hasło</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>
<body>
<div class="header" id="main_header">
        <img id="main_banner" src="images/banner.jpg" alt="Nie udało się załadować baneru :(">
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
    <div class="content-left">
        <h2>Zmień hasło</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>Nowe hasło</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Zatwierdź">
                <a class="btn btn-link ml-2" href="worker-page.php">Anuluj</a>
            </div>
        </form>
    </div>    
</body>

</html>