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
    <title>Łapy i Pazury</title>
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

    <div class="content_left">
        <blockquote>
            Pan Bóg, jak wiadomo, tworzył świat przez bodajże tydzień, a potem spojrzał na swoje dzieło i
            powiedział: <em>Ooo!</em><br>
            A później dodał: <em>A, mam jeszcze chwilę, teraz zrobię coś naprawdę ładnego. Coś mnie godnego, coś
                zaprawdę w boskim wymiarze.<br>
                Coś takiego, co jest autentyczną kwintesencją piękna i nie ma wad.</em><br>
            I zrobił kota.<br>&mdash; <strong>Andrzej Sapkowski, <em>&apos;Historia i fantastyka&apos;</em></strong>
        </blockquote>

        <nav id="main_nav">
            <h2>Przejdź do</h2>
            <ul>
                <li>
                    Aktualności
                    <ul class="subcategory">
                        <li><a href="#main_news_1">08.10.2021</a></li>
                        <li><a href="#main_news_2">20.09.2021</a></li>
                        <li><a href="#main_news_3">03.09.2021</a></li>
                        <li><a href="#main_news_4">19.07.2021</a></li>
                    </ul>
                </li>
                <li>
                    O nas
                    <ul class="subcategory">
                        <li><a href="#main_about">O Fundacji</a></li>
                        <li><a href="#main_actions">Nasze działania</a></li>
                        <li><a href="#main_us">Nasz zespół</a></li>
                    </ul>
                </li>
                <li>
                    Inne strony
                    <ul class="subcategory">
                        <li>
                            Formularze
                            <ul class="subsubcategory">
                                <li><a href="form-page.php">Formularz adopcyjny</a></li>
                                <li><a href="volunteer-form-page.php">Formularz wolontariusza</a></li>
                            </ul>
                        </li>
                        <li><a href="animals-page.php">Zwierzęta</a></li>
                        <li><a href="faq-page.php">FAQ</a></li>
                    </ul>
                </li>
                <li><a href="#main_personalise">Personalizuj</a></li>
            </ul>
        </nav>

        <div class="main_news">
            <h2>Aktualności</h2>
            <div id="main_news_1">
                <h3><time>08.10.2021</time></h3>
                <p>
                    Otrzymaliśmy odmieszkającej w pobliżu osoby informację, iż na terenie byłego szpitala im. Marciniaka
                    pokazuje się mały kociak wraz z mamą.
                    Niestety pracownicy ochrony odmówili wydania nam kociaka, którego oswoili i brali na ręce, gdyż “on
                    ma tu dobrze”. Tłumaczenia,
                    że zbliża się zima, a na wiosnę najprawdopodobniej nowy właściciel terenu rozpocznie prace budowlane
                    i żaden kot nie znajdzie tu schronienia,
                    nie przyniosły skutku&hellip;<br>
                    Kiedy oficjalną drogą udało nam się uzyskać zezwolenie na wejście na teren okazało się, że kociak 2
                    dni wcześniej zginął pod kolami auta.
                    Faktycznie "ma tu dobrze"&hellip;<br>
                    Na szczęście jego mamusia była skora do współpracy i przebywa już pod naszą opieką. Mało tego
                    &ndash; jest absolutnie łagodną i śliczną koteczką!<br>
                    Zainteresowanych adopcją szpitalnej mamy prosimy o kontakt :)
                </p>
                <img class="main_cat_image" src="images/szpitalna-mama-1.jpg" width="200" height="200" onmousemove="showCoords(event)" onmouseout="clearCoor()" alt="Nie udało się załadować obrazu :(">
                <p id="coor_client"></p>
                <p id="coor_screen"></p>
            </div>
            <div id="main_news_2">
                <h3><time>20.09.2021</time></h3>
                <p>
                    Odeszła pani Maria, a jej 7 kotów zostało w pustym mieszkaniu, które niedługo zostanie zabrane.<br>
                    Panią Marię znaliśmy wiele lat. Była samotną osobą o wielkim sercu dla zwierząt. Mimo choroby nie
                    poddawała się,
                    nawet gdy była w szpitalu w ciężkim stanie zawsze zakładała, że wróci bo przecież one czekają.<br>
                    One to obecnie 7 kotów w wieku 3&ndash;14 lat. Było 9, w tamtym roku pożegnaliśmy po długiej walce
                    Agacika, a Moruskowi znaleźliśmy nowy dom.<br>
                    Teraz sytuacja awaryjna. Koty domowe bardzo związane ze starszą panią, tęsknią w pustym mieszkaniu.
                    Wszystkie są łagodne, spokojne i żyją ze sobą w zgodzie,
                    nawet żyły w przyjaźni z gołębiem którego pani Maria uratowała 2 lata temu. Gołąb obecnie ma nowy
                    dom :)<br>
                    To niesamowite stadko bardzo prosi o dom. Zainteresowanych prosimy o kontakt :)
                </p>
                <img class="main_cat_image" src="images/kot-marii-1.jpg" width="200" height="200" alt="Nie udało się załadować obrazu :(">
            </div>
            <div id="main_news_3">
                <h3><time>03.09.2021</time></h3>
                <p>
                    40 km od Wrocławia ktoś uslyszał wołanie o pomoc i zobaczył przemarzniętą, ufną koteczkę z
                    zakrwawioną łapką.<br>
                    Kicia trafiła pod naszą opiekę. Łapka wygląda na uciętą tępym narzędziem (łopatą?), RTG blisko
                    kręgosłupa pokazało śrut. Wszystko wskazuje na ślady znęcania.
                    Przygotowujemy dokumentację i sprawa zostanie zgłoszona na policję.<br>
                    Kicia ma już wyczyszczoną ranę, we wtorek czeka ją operacja. Jest urocza, cierpliwa, łagodna.
                    Dziękujemy gabinetowi Kanwet za opiekę i serce.<br>
                    Bardzo prosimy o wsparcie kosztów operacji i leczenia kici.
                </p>
                <img class="main_cat_image" src="images/kicia-lapka-1.jpg" width="200" height="200" alt="Nie udało się załadować obrazu :(">
            </div>
            <div id="main_news_4">
                <h3><time>19.07.2021</time></h3>
                <p>
                    Mamusia Szałwia okociła się!<br>
                    Wszyscy pracownicy i wolontariusze fundacji są wniebowzięci &ndash; wreszcie mamy przesłodkie małe
                    kociaczki!<br>
                    Szałwia w ubiegły piątek wydała na świat cztery małe szałwie &ndash; jednego rudego i trzy buraski.
                    Kocia rodzinka zamieszkała w domu tymczasowym
                    u prezeski fundacji. Maluszki i mama czują się dobrze, chociaż Szałwia wygląda jakby nie spodziewała
                    się, że małych, puchatych fasolek będzie aż tyle!
                    Wybraliśmy tematyczne imiona &ndash; Bazylia, Oregano, Mięta i Majeranek.<br>
                    Zainteresowanych adopcją małych urwisów (gdy trochę podrosną) prosimy o kontakt :)
                </p>
                <img class="main_cat_image" src="images/szalwia-1.jpg" width="200" height="200" alt="Nie udało się załadować obrazu :(">
            </div>
            <p><a href="#main_nav">Wróć do nawigacji</a></p>
        </div>

        <div class="main_about">
            <h2>O Fundacji</h2>
            <p><strong>Łapy i Pazury</strong> to fundacja powstała z myślą o niesieniu pomocy kotom
                &ndash; pięknym i mądrym zwierzętom, których los jest często zagrożony z winy
                człowieka. Ludzie adoptują koty, dają im ciepły domek i jedzenia ile mogły by sobie wymarzyć, a
                potem nagle... przeprowadzka, ciąża, alergia, choroby
                kota lub właściciela. Część z tych kotów trafia do schronisk, część do fundacji, część na ulice,
                gdzie nie mają już ciepłego domku, jedzenia ani ukochanego
                człowieka, a są za to samochody, inne zwierzęta, w tym dzikie i niezaszczepione, oraz głód i
                choroby.</p>
            <p>Wszyscy kojarzymy babcię z sąsiedztwa, która dokarmia bezdomne koty w okolicy. Wygląda świetnie
                &ndash; dla kotów jest miska z karmą i miseczka z ciepłym mlekiem.
                Niestety babcia nie wie, że koty z okolicy są niewykastrowane i niewysterylizowane &ndash; a w
                okolicach marca zaczyna się ich pojawiać jeszcze więcej&hellip;
                Kocięta są bardzo delikatnymi stworzonkami i mają małe szanse przeżycia w warunkach zewnętrznych
                &ndash; zwłaszcza w zimniejszych miesiącach lub gdy ich mamę
                potrąci samochód.</p>
            <p>Dla tych właśnie kotów działamy!</p>
            <p>Jako fundacja <strong>Łapy i Pazury</strong> pomagamy wolno żyjącym oraz bezdomnym kotom
                z gminy Wrocław i okolic. <br>
                W pomaganie staramy się zaangażować społeczność lokalną &ndash; namawiamy na tworzenie domów
                tymczasowych, samodzielne udzielanie pomocy kotom,
                wyłapywanie kotów do sterylizacji. <strong>I to się udaje!</strong></p>
            <p><a href="#main_nav">Wróć do nawigacji</a></p>
            </div>

        <div class="main_actions">
            <h2>Nasze działania</h2>
            <ul>
                <li>Ograniczanie populacji kotów wolnożyjących &ndash; poprzez sterylizację i kastrację</li>
                <li>Leczenie kotów</li>
                <li>Prowadzenie profesjonalnej adopcji kotów</li>
                <li>Interwencje w przypadku łamania praw zwierząt oraz ich społecznych opiekunów</li>
                <li>Akcje edukacyjne, między innymi:
                    <ul>
                        <li><em>Zatrzymaj się i pomóż! Kampania na rzecz kotów miejskich</em> &ndash; 2012</li>
                        <li><em>Koty miejskie &ndash; akcja zima</em> &ndash; 2012</li>
                        <li><em>Stop porzucaniu</em> &ndash; 2016</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="main_us">
            <h2>Nasz zespół</h2>
            <ul>
                <li>
                    Zarząd fundacji
                    <ul>
                        <li>Edyta Nowacka</li>
                        <li>Joanna Wójcik</li>
                        <li>Adam Kowalski</li>                    
                    </ul>
                </li>
                <li>
                    Pracownicy
                    <ul>
                        <li>Ewelina</li>
                        <li>Janek</li>
                        <li>Adam</li>
                        <li>Julia</li>
                        <li>Stefan</li>
                        <li>Aleksander</li>
                        <li>
                            W tym studenci
                            <ul>
                                <li>Joasia</li>
                                <li>Bartek</li>
                                <li>Piotr</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    Wolontariusze
                    <ul>
                        <li>Julia</li>
                        <li>Agnieszka</li>
                        <li>Kacper</li>
                        <li>Krystian</li>
                        <li>Basia</li>
                        <li>Beata</li>
                        <li>
                            W tym studenci
                            <ul>
                                <li>Ania</li>
                                <li>Kasia</li>
                                <li>Staś</li>
                                <li>Kuba</li>
                                <li>Magda</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    Współpracujący weterynarze
                    <ul>
                        <li><a 
                                href="https://www.znanylekarz.pl/jaroslaw-kopcial/weterynarz-chirurg-onkolog/wroclaw#address-id=%5B104718%5D&filters%5Bspecializations%5D%5B%5D=92">Jarosław
                                Kopciał</a></li>
                        <li><a 
                                href="https://www.znanylekarz.pl/maciej-szpak/weterynarz/wroclaw#address-id=%5B122384%5D&filters%5Bspecializations%5D%5B%5D=92">Maciej
                                Szpak</a></li>
                        <li><a  
                                href="https://www.znanylekarz.pl/agnieszka-rudnicka/weterynarz/wroclaw#address-id=%5B926817%5D&filters%5Bspecializations%5D%5B%5D=92">Agnieszka
                                Rudnicka</a></li>
                    </ul>
                </li>
            </ul>
            <p><a href="#main_nav">Wróć do nawigacji</a></p>
        </div>

        <div id="main_personalise">
            <h2>Personalizuj wygląd strony</h2>
            <form method="post" action="set-cookie.php">
                <p>
                    <label>Wybierz styl strony:</label>
                    <select id="main_style_sheet" name="main_style_sheet">
                        <option selected>domyślny</option>
                        <option>brązowy</option>
                        <option>domyślny, tło białe</option>
                        <option>brązowy, tło białe</option>
                        <option>skala szarości</option>
                    </select>  
                </p>
            <p>
                <input id="submit_main" type="submit">
            </p>
            </form>
            
            <p><a href="#main_nav">Wróć do nawigacji</a></p>
        </div>

        <p><a href="#main_header">Wróć do góry strony</a></p>
    </div>

    <div class="footer">
        <h6>&copy; 2012-2021 by Łapy i Pazury All Rights Reserved.</h6>
    </div>
    
    <script src="main-page.js"></script>
</body>

</html>