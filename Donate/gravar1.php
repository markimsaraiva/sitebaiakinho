<?
$arquivo = "arquivo.txt";
$texto = $_POST["texto"];

if(is_writable($arquivo)) {
$manipular = fopen("$arquivo", "w");

if(!$manipular) {
echo "";
}
if(!fwrite($manipular, $texto)) {
echo "";
}
echo "Sai";

fclose($manipular);
}
else {
echo "O $arquivo n�o tem permiss�es de leitura e/ou escrita.";
}
?>