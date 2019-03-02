<?php $title = 'Lista de Posts' ?>

<?php ob_start() ?>
    <h2>Lista de Posts</h2>
    <div class="row">
        <?php foreach($posts as $post): ?>
        <div class="card col-12">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $post['title'];?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <?php echo date('Y-m-d')?>
                </h6>
                <p class="card-text">
                    Some quick example text to build on the card title and 
                    make up the bulk of the card's content.
                </p>
                <a href="/tecnologias_web/index.php/show?id=<?php echo $post['id']?>" 
                    class="card-link">Ver más</a>
            </div>
        </div>
        <?php endforeach; ?>
        <a class="btn btn-primary" 
            href="/tecnologias_web/templates/new.php/" 
            role="button">Nuevo post</a>
    </div>

<?php $content = ob_get_clean() ?>

<?php require 'layout.php' ?>