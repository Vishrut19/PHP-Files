<!-- A class is basically a blueprint of an Object -->
<?php
//This is a class definition.
class Book {
    //These are all attributes of a Class.
    var $title;
    var $author;
    var $pages; 
}

// An object is basically an instance of a Class.

$book1 = new Book;  //This is bascially called an Object which is an Instance of a Class. 
$book1 -> title = "Harry Potter";
$book1 -> author = "J.K.Rowling";
$book1 -> pages = 500;

$book2 = new Book;
$book2 -> title = "Game of Thrones<br>";
$book2 -> author = "George R.R. Martin<br>";
$book2 -> pages = 100;

echo $book2 -> title;
echo $book2 -> author;
echo $book2 -> pages;
?>