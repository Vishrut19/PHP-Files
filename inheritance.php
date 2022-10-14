<!-- Interitance basically means that one class inherits the properties of other class i.e. Child Class inherits the properties of Parent Class.-->
<?php
class Chef{
    function makeChicken(){
        echo "The chef is making chicken <br>";
    }
    function makeSalad(){
        echo "The chef is making salad <br>";
    }
    function makeSpecialDish(){
        echo "The chef is making some special dish <br>";
    }
}

class ItalianChef extends Chef{
    function makePasta(){
        echo "The Italian Chef is making Pasta <br>";
    }
    //This is basically function overriding.
    function makeSpecialDish(){
        echo "The Italian Chef is making Spagetti <br>";
    }
}


$chef = new Chef();
$chef -> makeSpecialDish();

$italianchef = new ItalianChef();
$italianchef -> makeSpecialDish();
?>