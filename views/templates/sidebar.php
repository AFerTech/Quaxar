<aside class="sidebar">
    <div class="contenedor-sidebar">
        <h2>QUAXAR</h2>

        <div class="cerrar-menu">
            <img id="cerrar-menu" src="build/img/cerrar.svg" alt="imagen cerrar menu">
        </div>
    </div>
    

    <nav class="sidebar-nav">
        <a class="<?php echo ($titulo === 'Clientes') ? 'activo' : ''; ?>" href="/clientes">Clientes</a>
        <a class="<?php echo ($titulo === 'Crear clientes') ? 'activo' : ''; ?>" href="/crear_clientes">Agregar Cliente</a>
        <a class="<?php echo ($titulo === 'Proyectos') ? 'activo' : ''; ?>" href="/dashboard">Proyectos</a>
        <a class="<?php echo ($titulo === 'Crear Proyecto') ? 'activo' : ''; ?>" href="/crear-proyecto">Crear Proyecto</a>
        <a class="<?php echo ($titulo === 'Citas') ? 'activo' : ''; ?>" href="/citas">Citas</a>
        <a class="<?php echo ($titulo === 'Crear Cita') ? 'activo' : ''; ?>" href="/crear-cita">Crear Cita</a>
        <a class="<?php echo ($titulo === 'Perfil') ? 'activo' : ''; ?>" href="/perfil">Perfil</a>
    </nav>

    <div class="cerrar-sesion-mobile">
        <a href="/logout" class="cerrar-sesion">Cerrar Sesión</a>
    </div>
</aside>