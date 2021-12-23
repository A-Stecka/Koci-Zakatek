var donation = 0, no_of_cats = 0, no_of_cans = 0, no_of_days = 0;

function calculate() {
    donation = parseFloat(document.getElementById("donation_form_donation").value);
    no_of_cats = parseInt(document.getElementById("donation_form_no_of_cats").value);
    if (isNaN(donation) || isNaN(no_of_cats))
        window.alert("Wygląda na to, że podano niewłaściwe wartości!\n" + 
            "Pamiętaj - wartość Twojego datku to liczba rzeczywista, a liczba karmionych kotów to liczba całkowita.")
    else {
        if (donation <= 0 || no_of_cats <= 0)
            window.alert("Jeśli próbujesz zepsuć naszą stronę, nie udało się :)\nPodaj proszę wartości większe od zera.")
        else {
            document.getElementById("result_value").innerHTML = donation + " zł";
            document.getElementById("result_no_of_cats").innerHTML = no_of_cats;
                    
            no_of_cans = Math.floor(donation / 5.47);
            document.getElementById("result_no_of_cans").innerHTML = no_of_cans;

            no_of_days = Math.floor(no_of_cans.toFixed(2) * 2.0 / no_of_cats.toFixed(2));
            document.getElementById("result_no_of_days").innerHTML = no_of_days;

            correct_grammar();
        }
    }
}

function correct_grammar() {
    if (no_of_cans === 1)
        document.getElementById("correct_grammar_cans").innerHTML = "puszkę";
    else
         document.getElementById("correct_grammar_cans").innerHTML = "puszek";
            
    if (no_of_cats === 1)
        document.getElementById("correct_grammar_cats").innerHTML = "miał pełny brzuszek";
    else 
        document.getElementById("correct_grammar_cats").innerHTML = "miało pełne brzuszki";
            
    if (no_of_days === 1)
        document.getElementById("correct_grammar_days").innerHTML = "pełny dzień";
    else {
        if (no_of_days === 2 || no_of_days === 3 || no_of_days === 4)
            document.getElementById("correct_grammar_days").innerHTML = "pełne dni";
        else
            document.getElementById("correct_grammar_days").innerHTML = "pełnych dni";
    }
}

var button = document.getElementById("calculate_button");
button.addEventListener("click", calculate, false);
