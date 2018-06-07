<?php
#Abstract Classes
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//Write MyBook class
class MyBook extends Book {
    protected $title;
    protected $author;
    protected $price;
    function __construct($title, $author, $price){
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
    }
    function display(){
        $this->output("Title",$this->title);
        $this->output("Author",$this->author);
        $this->output("Price",$this->price);
    }
    
    function output($header,$var){
        echo $header.": ".$var;
    }
}

$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>
