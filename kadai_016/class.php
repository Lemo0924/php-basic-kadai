<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題016</title>
</head>

<body>
  <p>
    <?php
    
    class Food {

      private $name;
      private $price;

      public function show_price(){
       
      }

      public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
      echo $this->price . '<br>';
      }
    
    } 

    $food = new Food('potato', 250);
   
    $food->show_price() . '<br>';
  
print_r($food);

?>
</p>

<p>
  <?php

  class Animal {
   private $name;
   private $height;
   private $weight ;

   public function __construct($name, $height, $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight =$weight;
   }
   public function show_height() {
    echo $this->height . '<br>';
 
   } 
  }


  $animal = new Animal('dog', 60, 5000);
  $animal->show_height() ;

  print_r($animal);
  
  ?>

</p>
  </body>
  </html>
