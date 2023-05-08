
<div class="bg-dark w-100 p-3 text-center mb-4">
    <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) { ?>
        <a href="imagenes.php" class="text-decoration-none text-white px-2">Catálogo</a>
    <?php }
    if ($_SESSION['rol'] == 1) {
    ?>
        <a href="usuarios.php" class="text-decoration-none text-white px-2">Gestión de Usuarios</a>
    <?php
    }
    ?>
</div>