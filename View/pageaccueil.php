<!DOCTYPE html>
<html>
<head>
<title>flexboxtrye</title>
<link rel="stylesheet" href="pageaccueil.css">
</head>
<body>

<?php
     include("View/Header.php");
?>
    
<div class="header">
    <h1>Présentation du site</h1>
    <p>Notre site est destinés à la présentation de nos valeurs, de nos engagements, et bien sur de nos produits et nos offres.
        Il est fait main du début à la fin par une équipe francaise qui représente notre engagement écologique, de plus
        , il offre une option FAQ pour que vous puissiez nous communiquer vos remarques constructives ou des question 
        technique quant à l'utilisation de nos produits.</p>
</div>
<div class="content">
    <a href="#" class="bloc1">ACHETEZ <div class="maintenant">MAINTENANT</div> </a>
    <div class="bloc2">
        <h2>Présentation du produit</h2>
        <p>Notre produit phare se nomme ANDREA, c'est un casque high-tech offrant plusieurs options permettant
            de vous accompagner au mieux lors de vos sessions de sports, ce casque est notament équipé d'un capteur
            cardiaque, d'un capteurs de température et un capteur de CO2.</p>
     </div>
    <div class="bloc3"> 
        <a href="routeur?action=presentationProduit"><img class="image" src="https://www.ravate.com/68488/casque-audio-bose-qc35-ii-noir.jpg" alt="image"></a>
    </div>
</div>
    
<div class="footer">
    <h1>Présentation des fonctionalités du site et du produit</h1>
    <p>Notre site est destinés à la présentation de nos valeurs, de nos engagements, et bien sur de nos produits et nos offres.
        Il est fait main du début à la fin par une équipe francaise qui représente notre engagement écologique, de plus
        , il offre une option FAQ pour que vous puissiez nous communiquer vos remarques constructives ou des question 
        technique quant à l'utilisation de nos produits.
        Notre produit phare se nomme ANDREA, c'est un casque high-tech offrant plusieurs options permettant
        de vous accompagner au mieux lors de vos sessions de sports, ce casque est notament équipé d'un capteur
        cardiaque, d'un capteurs de température et un capteur de CO2.
    </p>
</div>
<?php
    include("View/Footer.php");
?>
</body>
</html>