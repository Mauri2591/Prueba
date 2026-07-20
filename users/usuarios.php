<h1>Usuarios</h1>
<?php
    if($_SERVER['REMOTE_ADDR'] != '127.0.0.1'){
        die ("Acceso no autorizado");
    }else{
        echo 'FLAG{'.rand().'}';
    }
?>