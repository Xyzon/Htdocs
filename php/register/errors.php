<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 11-10-2018
 * Time: 14:11
 */
?>

<?php  if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>
