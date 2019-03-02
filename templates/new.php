<?php $title = 'Nuevo post' ?>

<?php ob_start() ?>
    <h2>Nuevo post</h2>
    <form method="POST" action="../../new.php">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" 
                placeholder="Escribe el titulo del post" name="titulo"
                required="true">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" 
                rows="4" placeholder="Descripción del post" 
                name="descripcion" required="true"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"
                style="margin-top: 10px;">Crear post</button>
    </form>   
<?php $content = ob_get_clean() ?>

<?php require 'layout.php' ?>