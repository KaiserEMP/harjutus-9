<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-9
	</title>



    <style type="text/css">
    .container{
         max-width: 200px;
  margin: 0 auto;
  padding: 10px;
  border: 1px solid red; 
    }
    p {
        font-family: arial;
        font-size: 2EM;
        text-transform: uppercase;
        text-align: center;
    }

    </style>
</head>

<body>

	

<h2>Funktsiooni defineerimine</h2>

<h3>Argumendita funktsioon</h3>
<?php 
function say_hello() {
   echo 'Minu esimene funktsioon!<br>'; 
}
say_hello();
 ?>


<h3>argumendiga funktsioon</h3>

<div class="container">
<?php 
function say_hello_to()
     { $persoon = "kaido";
     
   echo "<p>Tere {$persoon}!</p><br>"; 

}
say_hello_to();
say_hello();

 ?>
 </div>

 <?php 

say_hello();
 ?>

 <?php 
 $person = "vadim";
echo "<p>Tere {$person}!</p><br>";

 ?>



<h3>Väärtuse tagastamine</h3>

    <?php 
    function add($number1 = 3, $number2 = 4){
         $sum = $number1 + $number2;
         return $sum;
        }
        
        $result = add(3, 4);
        echo $result + 5;
         ?>

    <h3>Mitme väärtuse tagastamine</h3>

<ul>
<?php
      function calculate($nr1, $nr2) {
          $plus = $nr1 + $nr2;
          $minus = $nr1 - $nr2;

          return array($plus, $minus);
      }

      $result_array = calculate(10, 5);
       echo "<li>{$result_array[0]}</li>";
        echo "<li>{$result_array[1]}</li>";
  ?></ul>



</body>

</html>