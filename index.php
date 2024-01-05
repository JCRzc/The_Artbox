<?php include("oeuvres.php");?>

<!doctype html>
<html lang="fr">
<?php include("head.php");?>
<body>
    <?php include("header.php"); ?>
    <main>
    <div id="liste-oeuvres">
    <?php 
    

foreach ($oeuvres as $id => $oeuvre) {
    $titre = $oeuvre["titre"];
    $description = $oeuvre["description"];
    $image = $oeuvre["image"];

    echo "<article class='oeuvre'>";
    echo "<a href='oeuvre.php?id=".$id."'>"; // Ajout de "?id=".$id."" dans le lien
    echo "<img src='".$image."' alt='".$titre."'>";
    echo "<h2>".$titre."</h2>";
    echo "<p class='description'>".$description."</p>";
    echo "</a>";
    echo "</article>";
}
?>
    </div>
    </main>
    <?php include("footer.php"); ?>
</body>
</html>