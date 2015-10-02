<?php


function estBissextile($annee) {
// variable intermediaire booleenne, TRUE si l’annee est bissextile
 $estBissextile = (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400==0));
 return $estBissextile;
}
Var_dump (estBissextile(2015)) ; //bool FALSE
Echo " 2015 est elle une annee bissextile ? réponse : " , estBissextile(2015) ;
for ($annee=2015;$annee<=2500;$annee++){
 if (estBissextile($annee)){ //appel de la fonction
 echo $annee,PHP_EOL;
 }
} 

?>
