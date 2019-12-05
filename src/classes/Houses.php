<?php
class House {
    //code goes here
    public $color = "red";
   public $price = 100000;

   private $topPrice = 50000;


 public function __construct($color, $price, $topPrice) {
    echo "Iam constructing a new house<br>";
    $this->color = $color;
    $this->price = $price;
    $this->topPrice = $topPrice;

    $this->printPrice();
}



   public function PrintHello() {
    //    code
       echo "Printing Hello<br>";
   }
public function printPrice() {
echo "This house costs $this->price<br>";
}
public function getTopPrice() {
    echo "My top price is $this->topPrice <br>";
}

public function formatText($text) {
    return "<em>$text<em>";
}

public function strongText($text) {
    return "<strong>$text<strong>";
}



}
