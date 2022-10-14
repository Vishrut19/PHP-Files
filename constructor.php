<?php
class Book {
    var $title;
    var $author;
    var $pages;

    // function __construct(){          //This is a basic constructor function
    //     echo "New Book Created <br>";
    // }

    // function __construct($name){   //This is a Parametrized Constructor.
    //     echo $name;
    // }

    function __construct($aTitle, $aAuthor, $aPages){
        $this -> title = $aTitle;  //$this keyword is used to refer to the current object that is created.
        $this -> author = $aAuthor;
        $this -> pages = $aPages;     
    }
}

$book1 = new Book("Harry Potter","J.K.Rowling",500);
echo $book1 -> title;
// $book1 -> title = "Harry Potter";
// $book1 -> author = "J.K.Rowling";
// $book1 -> pages = 500;

// $book2 = new Book("riya");
// $book2 -> title = "Game of Thrones<br>";
// $book2 -> author = "George R.R. Martin<br>";
// $book2 -> pages = 100;
?>