<?php

/*
$books = json_decode('
   
[
    {
        "title": "The Catcher in the Rye",
        "author": "J.D. Salinger",
        "publication_year": 1951,
        "category": "Fiction"
    },
    {
        "title": "To Kill a Mockingbird",
        "author": "Harper Lee",
        "publication_year": 1960,
        "category": "Fiction"
    },
    {
        "title": "1984",
        "author": "George Orwell",
        "publication_year": 1949,
        "category": "Dystopian"
    },
    {
        "title": "The Great Gatsby",
        "author": "F. Scott Fitzgerald",
        "publication_year": 1925,
        "category": "Fiction"
    },
    {
        "title": "Brave New World",
        "author": "Aldous Huxley",
        "publication_year": 1932,
        "category": "Dystopian"
    }
]
 

'
)

*/

$books = array(
    array(
        "title" => "The Catcher in the Rye",
        "author" => "J.D. Salinger",
        "publication_year" => 1951,
        "category" => "Fiction"
    ),
    array(
        "title" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "publication_year" => 1960,
        "category" => "Fiction"
    ),
    array(
        "title" => "1984",
        "author" => "George Orwell",
        "publication_year" => 1949,
        "category" => "Dystopian"
    ),
    array(
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "publication_year" => 1925,
        "category" => "Fiction"
    ),
    array(
        "title" => "Brave New World",
        "author" => "Aldous Huxley",
        "publication_year" => 1932,
        "category" => "Dystopian"
    )
);


$booksByCategory = array();

foreach ($books as $book) {
    $category = $book['category'];
    if (!isset($booksByCategory[$category])) {
        $booksByCategory[$category] = array();
    }
    $booksByCategory[$category][] = $book;
}
echo "<table style='border: solid 1px black;'>";

foreach ($booksByCategory as $category => $books) {

    echo "<th style='border: solid 1px black;'>" . $category . "</th><br>";

    foreach ($books as $book) {

        echo "<tr style='border: solid 1px black;'>";
        echo "<td style='border: solid 1px black;'>" . $book['title'] . "</td>";
        echo "<td style='border: solid 1px black;'>" . $book['author'] . "</td>";
        echo "<td style='border: solid 1px black;'>" . $book['publication_year'] . "</td>";
        echo "</tr>";


    }
}

echo "</table>";