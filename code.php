<?php
echo("Hola mundo desde PHP!!!");
session_start();
$conn = mysqli_connect(
    'localhost', //ubicacion
    'root', //ususario
    '', //contraseña
    'crud1',//nombre BD
);

if (isset($conn)) {
    echo "Bd conectada";
}
else {
    echo "Noooooo";

};

