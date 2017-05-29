<?php 

$book = new stdClass;
$book->title = " Potter and the Prisoner of Azkaban";
$book->author = "J. K. Rowling";
$book->publisher = "Arthur A. Levine Books";
$book->amazon_link = "http://www.amazon.com/dp/0439136369/";

//echo $book->title;

echo "<br/>";
 



$array = array(
"title" => "Harry Potter and the Prisoner of Azkaban",
"author" => "J. K. Rowling",
"publisher" => "Arthur A. Levine Books",
"amazon_link" => "http://www.amazon.com/dp/0439136369/"
);
 
$books = (object) $array;

//echo $books->author;


echo "<br/>";
echo "<pre>";
echo json_encode($book);
echo "</pre>";


  ?>


