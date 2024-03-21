<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info-tech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- Relier le devis avec la base des donnees et le php -->
   <!-- Relier le formulaire d'inscription avec la BDD  -->
   <!-- Styliser les balises Html et mettre à jour la BDD mysql -->
   <!-- Faire afficher le formulaire de devis sur une autre page sans ce recharge -->
   
        <h1>CENTRE DE FORMATION INFO-TECH</h1>
    <header>
        <div class="navigation">
          <nav> <a href="projet.php">Accueil</a></nav>
          <nav> <a href="Inscription.html">inscription</a></nav>
          <nav> <a href="devis.php">Devis</a></nav>
        </div>
    </header>
      <h1>Programme du centre de formation INFO-TECH</h1>
    <!-- <p> -->
    <div class="contenairImage">
        <img src="../projet1/docs/excel.png" alt="">
        <img src="../projet1/docs/WORD (1).png" alt="">
        <img src="../projet1/docs/Acces.png" alt="">
        <img src="../projet1/docs/powerpoint.png" alt="">
    </div>
       <p>
            Le Centre de Formation offre un programme complet spécialisé dans l'enseignement de Word, Excel, Access et PowerPoint, les piliers fondamentaux de la productivité bureautique. Notre équipe d'instructeurs qualifiés propose des cours interactifs et personnalisés, adaptés à tous les niveaux, afin de permettre aux apprenants de maîtriser efficacement ces outils essentiels. Grâce à des méthodes d'apprentissage innovantes et des exercices pratiques, nos participants acquièrent des compétences concrètes et sont prêts à relever les défis du monde professionnel. Rejoignez-nous pour développer 
            votre expertise et votre efficacité dans le domaine de la bureautique.
       </p>
    <?php
        $serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe = "";
        $base_de_donnees = "info_tech";
        // Établir la connexion
        $connexion = mysqli_connect($serveur, $utilisateur,
        $mot_de_passe, $base_de_donnees);
        // Vérifier la connexion
        if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
        } else {
        // echo "Connexion réussie à la base de données.";
        // print_r($connexion);
        }
        echo "<br>";
        $sql = "SELECT * FROM cours";
        $cours = mysqli_query($connexion, $sql);
        // Vérifier si la requête a réussi
         echo "<ul>";
            if ($cours) {
                // print_r($cours);
                foreach($cours as $cour) {
                    echo "<li>" . $cour['nom_du_cours'] .  "<br>". "</li>";
                }
            } else {
                echo "Erreur : " . mysqli_error($connexion);
            }
            echo "</ul>";
        // Fermer la connexion
        echo "<br>";
        if ($cours) {
            // print_r($cours);
            foreach($cours as $cour) {
                echo $cour['nom_du_cours'] . "<br>".  $cour['description'] . '<br>';
            }
        } else {
            echo "Erreur : " . mysqli_error($connexion);
        }
        echo "<br>";

    $sql = "SELECT utilisateurs.nom, utilisateurs.prenom, utilisateurs.email, cours.nom_du_cours, inscription.date_inscription
        FROM inscription
        INNER JOIN utilisateurs ON inscription.id_utilisateurs = utilisateurs.id_utilisateurs
        INNER JOIN cours ON inscription.id_cours = cours.id_cours";

    $inscription = mysqli_query($connexion, $sql);

if ($inscription) {
    while ($row = mysqli_fetch_assoc($inscription)) {
        echo "Nom : " . $row['nom'] . "<br>";
        echo "Prénom : " . $row['prenom'] . "<br>";
        echo "Email : " . $row['email'] . "<br>";
        echo "Nom du cours : " . $row['nom_du_cours'] . "<br>";
        echo "Date d'inscription : " . $row ['date_inscription'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Erreur : " . mysqli_error($connexion);
}
if (!empty($_POST)) {
    $nom = mysqli_real_escape_string($connexion, $_POST["nom"]);
    $prenom = mysqli_real_escape_string($connexion, $_POST["prenom"]);
    $gmail = mysqli_real_escape_string($connexion, $_POST["gmail"]);
    $mot_de_passe = mysqli_real_escape_string($connexion, $_POST["password"]);
    $sql = "SELECT`id_utilisateurs`
    FROM `utilisateurs` WHERE email= '$gmail' and mot_de_passe = '$mot_de_passe' LIMIT 1";
    $resultat =  mysqli_query($connexion, $sql);
    if ($resultat->num_rows > 0) {
        $result = $resultat->fetch_assoc();
        $utilisateur = $result["id_utilisateurs"];
    } else {
        // Si l'utilisateur n'existe pas, ajouter l'utilisateur dans la base de données
        $sql = "INSERT INTO utilisateurs (`nom`, `prenom`, `email`,`mot_de_passe`)
        VALUES ('$nom', '$prenom', '$gmail', '$mot_de_passe')";
        mysqli_query($connexion, $sql);

        $sql = "SELECT`id_utilisateurs`
        FROM `utilisateurs` ORDER BY id_utilisateurs desc LIMIT 1";
        $resultat =  mysqli_query($connexion, $sql);
        $result = $resultat->fetch_assoc();
        $utilisateur = $result["id_utilisateurs"];

    }
    $objet = mysqli_real_escape_string($connexion, $_POST["objet"]);
        $sql = "INSERT INTO `inscription`(`id_inscriptions`,
        `id_cours`, `id_utilisateurs`, `date_inscription`)
        VALUES ('[1]','[2]','[3]','[4]')";

    print_r($utilisateur);
    
    /*$sql = "INSERT INTO utilisateurs (`nom`, `prenom`, `email`,`mot_de_passe`) 
    VALUES ('$nom', '$prenom', '$gmail', '$mot_de_passe')";*/
    
    mysqli_close($connexion);
}

?>
<!-- page qui traite le formulaire HTML -->
<?php
 if (empty($_POST)) {
    echo 'Le formulaire n\'a pas eté soumis correctement';
    exit();
 }
// Existe t-il un $_POST ['nom] et est-il différent de null
if (isset($_POST['nom'])) {
  echo 'Vider le nom';
}
else {
    echo 'Erreur sur le nom.';
    exit();
}
// $_POST ['nom] est -il inferieur à 80 caractéres
// Utiliser isset et empty
?>
<h1>Nous avons bien reçu votre message !</h1>
Nom : <?php echo ($_POST['nom']) . '<br />' ; ?>
E-mail: <?php echo $_POST['gmail'] . '<br />';?>
Prénom: <?php echo $_POST['prenom'] . '<br />';?>
contact : <?php echo $_POST['objet'] . '<br />';?>
Abonnement Newsletter:   <?php echo $_POST['contact'] . '<br />';?>
Date de naissance :  <?php echo $_POST['date'] . '<br />';?>

</body>
</html>