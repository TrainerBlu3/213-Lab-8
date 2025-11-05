<?php

class Book{

  public $title;
  public $author;
  private $price;

  public function __construct($title, $author, $price = 0){
    $this -> title = $title;
    $this -> author = $author;
    $this -> price = $price;
  }

  public function getDetails(){
    return "{$this->title} by {$this->author}";
  }

  public function __destruct(){
    echo "Book object destroyed<br>";
  }

  public function setPrice($p){
    $this -> price = $p;
  }

  public function getPrice(){
    return "{$this->title} costs \${$this->price}<br>";
  }
  
}

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book2 = new Book("The Way of Kings", "Brandon Sanderson");

echo $book1->getDetails() . "<br>";
echo $book2->getDetails();

$book3 = new Book("Tarzan", "Edgar Rice Burroughs");
echo $book3->getDetails() . "<br>";
unset($book3);

$book4 = new Book("Dune", "Frank Herbert", 19.99);

echo $book4->getDetails() . "<br>";
echo $book4->getPrice() . "<br>";

$book4->setPrice(24.99);
echo $book4->getPrice() . "<br>";

?>
