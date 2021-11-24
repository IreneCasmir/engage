<?php if(count($errors) > 0) : ?>
    <div>
        <?php foreach($errors as $e) : ?>
            <p><?php echo $e ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>