<?php
function get_all_video_games()
{
    // on recupere la connexion
    global $connexion;
    // on cree la requete
    $query = "SELECT * FROM jeu";
    // on execute la requete
    if ($result = mysqli_query($connexion, $query)) {
        // on verifie que l'on a des resultats
        if (mysqli_num_rows($result) > 0) {
            // on peut parcourir les resultats
            while ($video_game = mysqli_fetch_assoc($result)) {
                // on appelle la methode pour afficher les jeux video
                render_all_video_games($video_game);
            }
        }
    }
}

//methode qui permet de recuperer les consoles des marques
function get_consoles_with_count()
{
  //on expose $connexion
  global $connexion;
  //on crée la requete
  $query = "SELECT console.id, console.name, COUNT(jeu.console_id) AS total
    FROM console 
    INNER JOIN jeu ON console.id = jeu.console_id 
    GROUP BY console.id";

  //on execute la requete
  if ($result = mysqli_query($connexion, $query)) {
    //on vérifie que l'on a des resultats
    if (mysqli_num_rows($result) > 0) {
      //on peut parcourir les résultats
      while ($console = mysqli_fetch_assoc($result)) { ?>
        <li>
          <a class="dropdown-item" href="../console.php?console_id=<?php echo $console['id'] ?>">
            <?php echo $console['name'] ?> ( <?php echo $console['total'] ?> )
          </a>
        </li>
<?php }
    }
  }
}