<?php   
$annee=2000;//cela peut etre changer ^^
if ($annee%4==0&&$annee%100!=0||$annee%400==0){
  echo "année bissextile";
}else{
  echo "Année non bissextile";
}
?>
