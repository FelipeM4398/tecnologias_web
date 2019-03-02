<?php $title = $post['title'] ?>

<?php ob_start() ?>
    <h2 class="title-post"><?php echo $post['title'] ?></h2>

    <div class="date"><?php echo date('Y-m-d') ?></div>
    <div class="body">
        <?php echo $post['description'] ?>
    </div>
    <a class="btn btn-primary" 
            href="/tecnologias_web/" 
            role="button">Volver</a>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
