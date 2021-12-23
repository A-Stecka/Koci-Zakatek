<?php
    session_start(); 
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: worker-page.php");
        exit;
    }

    require_once "config.php";
 
    $username = $password = "";
    $username_err = $password_err = $login_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        if (empty(trim($_POST["username"])))
            $username_err = "Wprowadź login.";
        else
            $username = trim($_POST["username"]);

    
    if (empty(trim($_POST["password"])))
        $password_err = "Wprowadź hasło.";
    else
        $password = trim($_POST["password"]);
    
    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password'";
        
        if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) == 1) {                              
                    session_start();
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;                           
                    header("location: worker-page.php");
                } else
                    $login_err = "Błędny login lub hasło.";
        }
    }
    else
        $login_err = "Błędny login lub hasło.";   
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
    <title>Login</title>
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
        <h2>Zaloguj się</h2>

        <?php 
            if (!empty($login_err))
                echo '<div class="alert alert-danger">' . $login_err . '</div>';       
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group">
                <p>
                    <label>Login: </label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </p>
            </div>    

            <div class="form-group">
                <p>
                    <label>Hasło: </label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </p>
            </div>

            <div class="form-group">
                <p>
                    <input type="submit" class="btn btn-primary" value="Zaloguj się">
                </p>
            </div>

            <p>Nie masz konta? <a href="register.php">Zarejestruj się.</a></p>

        </form>
    </div>

</body>

</html>