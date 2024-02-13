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