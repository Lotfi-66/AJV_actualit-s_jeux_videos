<?php 
function render_all_video_games($video_game)
{ ?>
    <div class="card">
        <div class="d-flex flex-column align-items-center">
            <img class="jeu_img" src="../img/games/<?php echo $video_game['image_path'] ?>"
                 alt="image de <?php echo $video_game['titre'] ?>">
            <h5 class="jeu_nom"><?php echo $video_game['titre'] ?></h5>
            <p class="jeu_prix"><?php echo number_format($video_game['prix'] / 100, 2, ',', ' '); ?>€</p>
            <a class="align-self-start btn btn-primary text-light" href="../detail.php?jeu_id=<?php echo $video_game['id'] ?>">Voir détail</a>
        </div>
    </div>
<?php }