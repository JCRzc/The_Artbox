<?php
include("oeuvres.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (array_key_exists($id, $oeuvres)){

    
    // Recherche l'œuvre correspondant à l'identifiant dans le tableau $oeuvres
    $oeuvre = $oeuvres[$id];

    // Vérifie si l'œuvre existe
        $titre = $oeuvre['titre'];
        $description = $oeuvre['description'];
        $image = $oeuvre['image'];
        $descriptioncomplete = $oeuvre['description-complete'];

    } else {
        echo "Œuvre non trouvée.";
        exit();           
    }

} else {
    echo "Identifiant d'œuvre non spécifié.";
    exit();
}
?>

<!doctype html>
<html lang="fr">
<?php include("head.php"); ?>
<body>
       <?php include("header.php");?>

        <main>
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="<?php echo $image; ?>" alt="<?php echo $titre; ?>">
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo $titre; ?></h1>
                    <p class="description"><?php echo $description; ?></p>
                    <p class="description-complete"><?php echo $descriptioncomplete; ?></p>
                </div>
            </article>
        </main>

        <?php include("footer.php"); ?>
</body>
</html>
