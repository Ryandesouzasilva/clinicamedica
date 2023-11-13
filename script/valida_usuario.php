<?php
//usuario
//senha 
$tab_usuario = [
    ["admin","admin123"],
    ["guest","guest123"],
    ["guest2","guest321"]
];
echo $_POST["usuario"];
echo "<br>";
echo $_POST["senha"];
echo "<br>";
echo "total de usuarios cadastrados: ".count($tab_usuario);
echo "<br>";
function val_usuario($_POST["usuario",$_POST[""]])
     $user = $_POST["usuario"];
     $pass = $_POST["senha"];
for($i=0;$i<count($tab_usuario);$i++) {
    if($_POST["usuario"]==$tab_usuario[$i][0]){
        if($_POST["usuario"]==$tab_usuario[$i][1]){

            echo "usuario invalido"
        }
        else {
            echo "senha invalida";
        }
        else {
            echo "usuario invalido";
        }
    }
    echo "<br>";
    echo $tab_usuario[$i][0];
    echo " - ";
    echo $tab_usuario[$i][1];
    echo "<br>";
}

if($_POST["usuario"]==$tab_usuario[0][0]) {
    echo "usuario Válido";
}
echo "OK";
echo "<br>";
?>