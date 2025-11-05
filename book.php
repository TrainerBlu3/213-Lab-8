<? php

class Book{

  public $title;
  public $author

  public function __construct($title, $author){
    $this -> title = $title;
    $this -> author = $author;
  }

  public function getDetails(){
    echo "{$this->title} by {$this->author}";
  }

  public function __destruct(){
    echo "Book object destroyed<br>";
}

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book2 = new Book("The Way of Kings", "Brandon Sanderson");

echo $book1->getDetails() . "<br>";
echo $book2->getDetails();

$book3 = new Book("Tarzan", "Edgar Rice Burroughs");
echo $book3->getDetails() . "<br>";
unset($book3);

?>
