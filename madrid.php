<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <?php
        include "./php/nav.php"
    ?>
    
    <main>
        
        <section>
            <h2>MADRID</h2>
            <article  class="art_ciudades">
                <h3>La ciudad de los museos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eaque quasi provident dolore reiciendis omnis quidem culpa quod commodi possimus, sapiente vero dolorem repellendus beatae architecto vel eum mollitia aperiam, aliquid a sunt. Facere quas ab ratione atque exercitationem sed molestiae, enim, quisquam iusto, dolor architecto facilis labore modi dolorem!</p>
                <img class="img_ciudades" src="./assets/img/madrid01.jpg" alt="">
           </article>    
           <article  class="art_ciudades">
                <h3>La ciudad de la cultura</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eaque quasi provident dolore reiciendis omnis quidem culpa quod commodi possimus, sapiente vero dolorem repellendus beatae architecto vel eum mollitia aperiam, aliquid a sunt. Facere quas ab ratione atque exercitationem sed molestiae, enim, quisquam iusto, dolor architecto facilis labore modi dolorem!</p>
                <img class="img_ciudades" src="./assets/img/madrid02.jpg" alt="">
       </article>    
        </section>
      
        <section id="sect_form">
            <h2 class="oculto">Contacta con nostros</h2>
            <article>
                
                <form action="./php/enviar.php" method="post">
                    <h3>Contacta con nostros</h3>    
                    <input type="text" name="nombre" placeholder="nombre*" required>
                    <input type="tel" name="telefono" placeholder="teléfono*">
                    <input type="email" name="email" placeholder="correo electronico">
                    <textarea name="mensaje"></textarea>
                    <input type="submit" name="enviar" id="boton">
                </form>
            </article>
        </section>
    </main>
    <footer>
        <p>Desarrollado por Niko</p>
    </footer>
    
</body>
</html>