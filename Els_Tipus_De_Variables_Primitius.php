<?php
$i = 12;
$tipus_de_i = gettype( $i );
echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i <br>";

//2.La antibarra lo que hace es omitir que la variable se substituya por el $i asi que imprime como si solo fuera parte del texto.
//3.Para comprobar que esta actua sobre el,y deshabilita la variable.
//4.Int
//5.te dice que tipo de variable.
//6.7.
$a = 132.5434;
$tipus_de_a = gettype( $a );
echo "La variable \$a 
      conté el valor $a 
      i és del tipus $tipus_de_a <br>";

$e = True;
$tipus_de_e= gettype( $e );
echo "La variable \$e 
      conté el valor $e 
      i és del tipus $tipus_de_e<br>";
$o =[2,3,"Eric"] ;
$tipus_de_o = gettype( $o );
echo "La variable \$o 
      conté el valor $o 
      i és del tipus $tipus_de_o";
?>

