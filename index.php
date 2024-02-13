<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="toda la parrafada hasta 320 caracteres">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
        include "./php/nav.php";
    ?>

    <header>

    </header>
    <main>
        
        <section>
            <h2>Conoce los mejores destinos</h2>
            <article>
                <h3 class="oculto">20 años de experiencia en viajes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eaque quasi provident dolore reiciendis omnis quidem culpa quod commodi possimus, sapiente vero dolorem repellendus beatae architecto vel eum mollitia aperiam, aliquid a sunt. Facere quas ab ratione atque exercitationem sed molestiae, enim, quisquam iusto, dolor architecto facilis labore modi dolorem!</p>
                <div id="destinos">
                    <div class="destino">
                        <img src="./assets/img/londres.jpg" alt="">
                    </div>
                    <div class="destino">
                        <img src="./assets/img/madrid.jpg" alt="">
                    </div>
                    <div class="destino">
                        <img src="./assets/img/paris.jpg" alt="">
                    </div>
                </div>
            </article>    
        </section>
    
        <!-- contacto -->
        <?php
        include "./php/form.php";
        ?>

    </main>
   
    <!-- footer -->
    <?php
        include "./php/footer.php";
    ?>

    
</body>
</html>