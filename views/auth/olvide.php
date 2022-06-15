<div class="contenedor olvide">
    <?php include_once __DIR__ .'/../templates/nombre-sitio.php'; ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera cuenta</p>

        <?php include_once __DIR__ .'/../templates/alertas.php'; ?>

        <form class="formulario" method="POST" action="/olvide" novalidate>
            <div class="campo">
                <label for="email">Email</label>
                <input 
                    type="email"
                    id="email"
                    placeholder="Email"
                    name="email"
                />
            </div>
            <input type="submit" class="boton" value="Enviar">
        </form>

        <div class="acciones">
            <a href="/">Inicia Sesión</a>
        </div>
    </div> 
</div>