<section id="sect_form">
   <div id="hitocontacto"></div>
    <h2 class="oculto">Contacta con nostros</h2>
    <article>
        <form action="./php/enviarPHPMailer.php" method="post">
                    <h3>Contacta con nostros</h3>    
                    <input type="text" name="nombre" placeholder="nombre*" required>
                    <input type="tel" name="telefono" placeholder="teléfono*">
                    <input type="email" name="email" placeholder="correo electronico">
                    <textarea name="mensaje"></textarea>
                    <input type="submit" name="enviar" id="boton">
        </form>
    </article>
</section>