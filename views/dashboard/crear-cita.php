<?php include_once __DIR__  . '/header-dashboard.php'; ?>

    <div class="contenedor-sm">
        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form class="formulario" method="POST" action="/crear-cita">
            <?php include_once __DIR__ . '/formulario-cita.php'; ?>
            <input type="submit" value="Registrar">
        </form>
    </div>

<?php include_once __DIR__  . '/footer-dashboard.php'; ?>