<!--Getters and Setters are the special functions that are created inside the PHP classes and are used to control the access that people has to the attribute to those classes-->
<?php
class Movie{
    public $title;
    private $rating;

    function __construct($title,$rating){
        $this -> title = $title;
        $this -> rating = $rating;
    }

    function getRating(){
        $this -> rating;
    }

    function setRating($rating){
        if ($rating=="G" || $rating == "PG" || $rating == "PG-13" || $rating=="R" || $rating == "NR") {
            $this -> rating = $rating;
        }else{
            $this -> rating = "NR";
        }
    }
}

$avengers = new Movie("Avengers","R");

$avengers -> setRating("R");
echo $avengers -> getRating();
echo $avengers -> rating;
?>