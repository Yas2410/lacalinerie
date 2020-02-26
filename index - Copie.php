<?php

try
{
    $bdd = new PDO('mysql:host=localhost:3308;dbname=calinerie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$param="";
//$requete = $bdd->prepare("SELECT children.first_name FROM children");
//$requete = $bdd->prepare("SELECT allergen.name FROM allergen");
//$requete = $bdd->prepare("SELECT children.first_name, allergen.name FROM children INNER JOIN children_allergen ON children.id_children=children_allergen.id_children INNER JOIN allergen ON allergen.id_allergen=children_allergen .id_allergen");
//$requete = $bdd->prepare("UPDATE allergen SET name='nuts' WHERE name='peanuts'");
$requete = $bdd->prepare("SELECT children.first_name FROM children WHERE children.birth_date LIKE '%2018%'");
// $requete->bindParam(':param', $param);
$requete->execute();
$resultat = $requete->fetchAll();

echo '<pre>';
print_r($resultat);
echo '</pre>';
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yasemin Koçak">
    <meta name="description"
        content="Bienvenue à La Calinerie! Retrouvez toutes les informations utiles à l'accueil de votre enfant! Le site vous propose également un espace parent dédié : Actualités, agenda, photos"
        .>
    <meta name="keywords" content="Crèche, Enfants, Parents, Accueil, Jeux, Garde">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dancing+Script|Raleway&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.css">
    <title>Crèche Multi-Accueil LA CALINERIE</title>
</head>

<body>
    <!--HEADER : PAGE ACCUEIL-->
    <header class="container-fluid d-flex flex-column justify-content-around p-5 mb-5" id="Cover">
        <div class="row mx-0">
            <div class="offset-8 col-4">
                <div class="row justify-content-between mx-0 no-gutters">
                    <div class="offset-3 col-6">
                        <img src="img/logo1.png" alt="Logo La Calinerie" class="img-fluid">
                    </div>
                    <div class="col-10 text-center ml-4 mb-5">
                        <h1 id="TextLogo"> <span id="T1">L</span>a Ca<span id="T2">l</span>ine<span id="T3">r</span>ie
                        </h1>
                    </div>
                    <div class="col-3 text-center Bouton Zoom">
                        <a href="#CRECHE">LA CRECHE</a>
                    </div>
                    <div class="col-5 text-center Bouton Zoom">
                        <a href="#PARENTS">ESPACE PARENTS</a>
                    </div>
                    <div class="col-3 Bouton Zoom">
                        <a href="#CONTACT">CONTACT</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--LA CRECHE-->
    <section class="container pt-4 mb-5 pb-4 justify-content-center">
        <div class="row">
            <div class="col-6" id="CRECHE">
                <img src="img/01.jpg" alt="Photo d'enfants" class="img-fluid">
            </div>
            <div class="offset-1 col-5">
                <p class="text-muted text-justify">
                    Située au milieu du parc des Prés Lacoste, la crèche La Câlinerie propose un aménagement intérieur
                    avec 3 espaces définis qui possèdent chacun un coin jeu, un dortoir et un espace de change. Ils sont
                    adaptés à chaque groupe d’âge : petit, moyen et grand.
                </p>
                <div class="row px-0 mx-0 justify-content-center text-center text-muted font-weight-bold">
                    <div class="col-3 m-3">
                        <p>
                            <img src="img/icon1.1.png" alt="Icon" class="img-fluid">
                            <br> 26 PLACES
                        </p>
                    </div>
                    <div class="col-3 m-3">
                        <p class="p-0">
                            <img src="img/icon2.1.png" alt="Icon" class="img-fluid">
                            <br> DES REPAS BIO
                        </p>
                    </div>
                    <div class="col-3 m-3">
                        <p>
                            <img src="img/icon3.1.png" alt="Icon" class="img-fluid">
                            <br> 3 ESPACES
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ESPACE PARENTS-->
    <section class="container-fluid position-relative mb-5" id="Cover2">
        <div class="row mx-0 Bloc p-5 justify-content-between align-items-center" id="Formulaire">
            <div class="col-12 justify-content-center" id="PARENTS">
                <h1 class="text-center ml-2 mb-5">BIENVENUE SUR L'ESPACE PARENTS</h1>
                <form action="" class="row align-items-center">
                    <label class="col-4 text-right" for="email">Mail : </label>
                    <input class="col-5 form-control mb-4" id="email" type="email" placeholder="Entrer votre email">

                    <label class="col-4 text-right mt-3" for="password">Mot de Passe : </label>
                    <input class="col-5 form-control" placeholder="Entrer votre mot de passe" type="password"
                        id="password">
                    <button class="col-3 offset-5 mt-4 mb-4" id="BtnParents">Se connecter</button>
                </form>
                <div class="row justify-content-center mt-3">
                    <div class="offset-2 col-3 text-center"><a href="#">Mot de passe oublié?</a></div>
                    <div class="col-3 ml-1"><a href="#">Créer un compte</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--ESPACE CONTACT-->
    <section class="container pt-5">
        <div class="row m-0 position-relative mt-5">
            <div class="col-3" id="BlocContact">
                <h2 class="text-center" id="CONTACT">Où nous trouver?</h2>
                <p> Adresse <br> Téléphone</p>
                <div class="col-8" id="LogoBas">
                    <img src="img/logo1.png" alt="Logo La Calinerie" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid mt-5" id="Footer">
    </footer>
</body>

</html>