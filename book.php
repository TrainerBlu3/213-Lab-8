<?php

class Book{

  public $title;
  public $author;
  private $price;
  private const CATEGORY = "Literature";
  private static $count = 0;

  public function __construct($title, $author, $price = 0){
    $this -> title = $title;
    $this -> author = $author;
    $this -> price = $price;

    self::$count++; // increases count by 1 every time the constructor is called.
  }

  public function getDetails(){
    return "{$this->title} by {$this->author} (" . self::CATEGORY . ")";
  }

  public function __destruct(){
    echo "Book object destroyed\n";
    self::$count--; // decreases count by 1 every time the destructor is called.
  }

  public function setPrice($p){
    $this -> price = $p;
  }

  public function getPrice(){
    return "{$this->title} costs \${$this->price}\n";
  }

  public static function getCount(){
    return "There are " . self::$count . " books";
  }
  
}

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book2 = new Book("The Way of Kings", "Brandon Sanderson");

echo $book1->getDetails() . "\n";
echo $book2->getDetails() . "\n";

$book3 = new Book("Tarzan", "Edgar Rice Burroughs");
echo $book3->getDetails() . "\n";
echo Book::getCount() . "\n";
unset($book3);
echo Book::getCount() . "\n";

$book4 = new Book("Dune", "Frank Herbert", 19.99);

echo $book4->getDetails() . "\n";
echo $book4->getPrice() . "\n";

$book4->setPrice(24.99);
echo $book4->getPrice() . "\n";

class Textbook extends Book {
        public $subject;

        public function getDetails() {
                return parent::getDetails() . " - " . $this->subject;
        }
}

$textbook = new Textbook("Math 122 ATLAS", "Stephen Brown");
$textbook->subject = "Math";
echo $textbook->getDetails() . "\n";
?>
