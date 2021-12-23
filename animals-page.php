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
    <title>Nasi podopieczni</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    <meta name="keywords"
        content="fundacja, schronisko, zwierzęta, zwierzaki, koty, kotki, kociaki, pomoc, dzikie, adopcja">
    <meta name="description"
        content="Ta strona należy do fundacji Łapy i Pazury, zajmującej się kotami, a w szczegolności szukaniem dla nich bezpiecznych stałych domów.">
</head>

<body>
    <div class="header" id="animals_header">
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

    <div class="content_center">
        <h2>Podopieczni schroniska Łapy i Pazury</h2>
        <p>
            <table>
                <thead>
                    <tr>
                        <th colspan="3">Koty</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="3" class="table_cat_image">
                            <a href="lacia-more-page.php">
                                <img src="images/lacia-1.jpg" width="200" height="200"
                                    alt="Nie udało się załadować obrazu :(">
                            </a>
                        </th>
                        <th colspan="2" class="table_cat_name">Łacia</th>
                    </tr>
                    <tr>
                        <th class="table_info">Nr ew.</th>
                        <td class="table_info">480/20</td>
                    </tr>
                    <tr>
                        <th class="table_info">W schronisku od</th>
                        <td class="table_info">15.09.2019</td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="table_cat_image">
                            <a href="ksandal-more-page.php">
                                <img src="images/ksandal-1.jpg" width="200" height="200"
                                    alt="Nie udało się załadować obrazu :(">
                            </a>
                        </th>
                        <th colspan="2" class="table_cat_name">Ksandal</th>
                    </tr>
                    <tr class="table_info">
                        <th>Nr ew.</th>
                        <td>480/25</td>
                    </tr>
                    <tr class="table_info">
                        <th>W schronisku od</th>
                        <td>05.11.2020</td>
                    </tr>
                </tbody>
            </table>
        </p>
        <p>
            <table>
                <thead>
                    <tr>
                        <th colspan="3">Kocięta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="3" class="table_cat_image">
                            <a href="psotka-more-page.php">
                                <img src="images/psotka-1.jpg" width="200" height="200"
                                    alt="Nie udało się załadować obrazu :(">
                            </a>
                        </th>
                        <th colspan="2" class="table_cat_name">Psotka</th>
                    </tr>
                    <tr class="table_info">
                        <th>Nr ew.</th>
                        <td>480/10</td>
                    </tr>
                    <tr class="table_info">
                        <th>W schronisku od</th>
                        <td>27.08.2021</td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="table_cat_image">
                            <a href="puzel-more-page.php">
                                <img src="images/puzel-1.jpg" width="200" height="200"
                                    alt="Nie udało się załadować obrazu :(">
                            </a>
                        </th>
                        <th colspan="2" class="table_cat_name">Puzel</th>
                    </tr>
                    <tr class="table_info">
                        <th>Nr ew.</th>
                        <td>480/76</td>
                    </tr>
                    <tr class="table_info">
                        <th>W schronisku od</th>
                        <td>15.08.2021</td>
                    </tr>
                </tbody>
            </table>
        </p>
        <p><a href="#animals_header">Wróć do góry strony</a></p>
    </div>
    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>
</body>

</html>