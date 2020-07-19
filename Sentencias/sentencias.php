<?php

echo '<p><H1>Primer ejemplo If (True)</H1></p>';

$Tacos = true;

if($Tacos == true) {

echo 'Si hay tacos';

} else {

echo 'No hay tacos';

}

?>

<?php

echo '<p><H1>Segundo ejemplo If (Quien es el mayor)</H1></p>';

$juan = 40;
$carlos = 30;

if ($juan > $carlos) {

echo "Sí, Juan es mayor que Carlos.";

} 

else {

echo "No, juan es menor que Carlos";

}

?>

<?php

echo '<p><H1>Tercer ejemplo If (false)</H1></p>';

$Llora = false;

if($Llora == false) {

echo 'Esta triste';

} else {

echo 'Esta feliz';

}

?>

<?php

echo '<p><H1>Cuarto ejemplo If (Numeros pares)</H1></p>';

$numero = 0;

while ($numero <= 50)
  {
    $numero++;
    if ($numero % 2 == 0)
      {
        echo "</br> $numero  ";
      }

  }

?>

<?php

echo '<p><H1>Quinto ejemplo If (Numeros Impares)</H1></p>';

$numero = 2;

while ($numero <= 51)
  {
    $numero++;
    if ($numero %2  == 1)
      {
        echo "</br> $numero  ";
      }

  }

?>

<?php

echo '<p><H1>Primer ejemplo For </H1></p>';
for ($i=1; $i<=10; ++$i)
{
  echo sprintf("El Cuadrado de %d is %d.</br>", $i, $i*$i);
}
?>
<?php

echo '<p><H1>Segundo ejemplo For </H1></p>';

for ($i = 1; $i < 6; $i++) {
    print "<p>Bienvenidos al Alquiler de equipos de computo</p>\n";
}

?>

<?php

echo '<p><H1>Tercer ejemplo If</H1></p>';

for ($i = 1; $i <= 10; $i++) {
    echo "$i, ";
}

?>

<?php

echo '<p><H1>Cuarto ejemplo For</H1></p>';

for($i= 50 ;  $i<= 100;  $i+=2) {
    echo "$i, ";
}

?>

<?php

echo '<p><H1>Quinto ejemplo For</H1></p>';

$numTablaInicial =3;
$numTablaFinal = 5;

echo 'Numero inicial '.$numTablaInicial.'<br/>';
echo 'Numero final '.$numTablaFinal.'<br/>'.'<br/>';

for ($contador=$numTablaInicial; $contador<=$numTablaFinal; $contador++){
  echo 'Tabla del '.$contador.'<br/>';
  for ($i=1; $i<=10; $i++){
  echo $contador.'*'.$i.'='.$contador*$i.'<br/>';
  }
  echo '<br/>';
  echo '<br/>';
}
?>

