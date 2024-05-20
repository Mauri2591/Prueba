<?php include_once 'Config/Conexion.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <navs>
            <li style="display: flex; list-style: none; justify-content: space-around;">
                <ul>Inicio</ul>
                <ul>Nosotros</ul>
                <ul>Mas</ul>
            </li>
            </nav>
    </section>
    <section style="width: 75%; justify-content: center; margin: 0 auto; text-align: center;">
        <h1>Bienvenidos</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut libero eius facere incidunt obcaecati quas delectus, qui tempore blanditiis! Aperiam illo vitae cumque doloribus ratione ex veritatis aliquid quos delectus?</p>
    </section>

    <section style="height: 300px; display: flex;">
        <div style="display: flex; width: 33.3%;"><img src="" alt="">
            <h4>Imagen de Animales</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, id cumque quae nulla error quis, repellendus facere veritatis omnis cum quidem tempora unde nesciunt. Quam adipisci aliquam quisquam eveniet necessitatibus.</p>
            <a href="Home/?pagina=<?php echo openssl_encrypt("123456",AES,"Ciber*-^%&!$#ADd1s95FG7");?>" target="_blank" rel="noopener noreferrer">ir</a>
        </div>
        <div style="display: flex; width: 33.3%;"><img src="" alt="">
            <h4>Imagen de Animales</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, id cumque quae nulla error quis, repellendus facere veritatis omnis cum quidem tempora unde nesciunt. Quam adipisci aliquam quisquam eveniet necessitatibus.</p>
            <span type="button" style="width: 100px; background-color: gray; color:#fff; height: 50px;">Ver</span>
        </div>
        <div style="display: flex; width: 33.3%; justify-content: center;"><img src="" alt="">
            <h4>Imagen de Animales</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, id cumque quae nulla error quis, repellendus facere veritatis omnis cum quidem tempora unde nesciunt. Quam adipisci aliquam quisquam eveniet necessitatibus.</p>
            <span type="button" style="width: 100px; background-color: gray; color:#fff; height: 50px;">Ver</span>
        </div>
    </section>

    <script src="main.js"></script>
</body>

</html>