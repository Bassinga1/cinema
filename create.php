<?php
    // Traitement des données
    // var_dump($_SERVER); 
    // exit();

    // Si les données arrivent dans le serveur par la méthode POST,
    if ( $_SERVER['REQUEST_METHOD'] === "POST") 
    {
        // un peu de cybersécurité
        // echo htmlspecialchars($_POST['name']);
        echo strip_tags($_POST['name']);
        // Protection contre les failles de types XSS
        
        // Protection contre les failles de types CSRF
        
        // Protection contre les robots spameurs
        
        // Validation des données remplis dans le formulaire
        
        // S'il y'a au moins une erreur,
        
        // Sauvegarder les anciennes données du formulaire en session
        
        // Sauvegarder les messages d'erreur en session
        
        // Rédirriger l'utilisateur vers la page de laquelle proviennent les informations
        
        // arrêter l'execution du script
        
        // Dans le cas contraire
        // Arrondir la note à un chiffre après la virgule, si elle est envoyée
        
        // Etablir une connexion sur la Base des Données
        
        // Effectuer la requête d'insertion des données dans la table film
        // Générer un message flash de succès
        
        // Effectuer une redirection vers la page d'acceuil
        // arrêter l'execution du script
    }
?>

<?php  require __DIR__ . "/components/head.php"; ?>

    <?php require __DIR__ . "/components/nav.php"; ?>

        <main class="container">
            <h1 class="text-center my-3 display-5">Nouveau film</h1>

            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-6 mx-auto shadow p-4 bg-white">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="name">Nom du film <span class="text-danger">*</span>: </label>
                                <input type="text" name="name" id="name" class="form-control" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="actors">Nom du ou des acteurs <span class="text-danger">*</span> : </label>
                                <input type="text" name="actors" id="actors" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="review">La note du film / 5 : </label>
                                <input type="number" step="0.1" min="0" max="5" name="review" id="review" class="form-control" >
                            </div>

                            <div class="mb-3">
                                <label for="comment">Le commentaire : </label>
                                <textarea name="comment" id="comment" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary shadow">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </main>

    <?php require __DIR__ . "/components/footer.php"; ?>  

<?php  require __DIR__ . "/components/foot.php"; ?>
