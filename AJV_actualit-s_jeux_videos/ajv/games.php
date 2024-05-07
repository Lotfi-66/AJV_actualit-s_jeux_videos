<?php require_once('./requete_sql/config.php') ?>
<?php require_once('./requete_sql/fonctions_sql.php') ?>
<?php require_once('./template/_function_render.php') ?>

<?php require_once('./template/_header.php') ?>
<?php require_once('./template/_navbar.php') ?>

<div class="d-flex flex-wrap gap-4">
    <?php get_all_video_games() ?>
</div>

<?php require_once('./template/_footer.php') ?>