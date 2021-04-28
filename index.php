<?php 

$paragrafo = 
"Giacomo: Giovanni guarda, non so proprio come dirtelo, ma i mobili di tua madre fan veramente cagare. <br>

Giovanni: Ma cosa ne vuoi capire tu Giacomo, non sai neanche cos'è una pialla! <br>

Giacomo: Ma cosa c'entra? Non è che uno deve costruire i mobili per saperli apprezzare! <br>

Giovanni: No caro: chi sa fare, sa capire! <br>

Giacomo: Ma che cazzo di proverbio è? <br>

Giovanni: Non è un proverbio: è la vita, Giacomo! <br>"; 

$badword = $_GET["badword"];
echo $paragrafo;
echo "<br>";
echo "Lunghezza :" . " " .strlen($paragrafo);

echo "<br>";
$paragrafoBad = str_replace("$badword","***",$paragrafo);
echo "<br>";
echo $paragrafoBad;
echo "<br>";
echo "Lunghezza :" . " " .strlen($paragrafoBad);

?>