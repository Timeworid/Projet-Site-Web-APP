<!DOCTYPE html>
<html>
<head>
    <title>Test1</title>
    <link rel="stylesheet" href="PageProduit.css">
    <script src="Javascript/PageProduit.js"></script>
</head>
<body>

<?php
     include("View/Header.php");
?>


<!--CORPS DE LA PAGE-->>

<body>

<div class="header2">

</div>
    <div class="parallax1">
        <div class="texteparallax" style="font-family: 'Outfit', sans-serif;">
            <span class="contourtexteparallax">UN NOUVEAU CASQUE AUDIO CONCU POUR VOUS</span>
        </div>
    </div>

    <div style="font-family: 'Outfit', sans-serif; color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Devise de l'entreprise</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate sed tenetur asperiores illum, eos incidunt fuga in doloribus ullam. Quos id corporis eveniet ea saepe velit et, praesentium vel architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minus, optio sint ea similique a veniam quam autem doloremque vel ad aliquam pariatur quod, quia, blanditiis molestias dolorum fugit architecto!
        </p>
    </div>

    <div class="parallax2">
        <div class="texteparallax">
            <span class="contourtexteparallax" style="font-family: 'Outfit', sans-serif; background-color:transparent;font-size:25px;color: #f7f7f7;">100% MADE IN FRANCE</span>
        </div>
    </div>

    <div style="position:relative;">
        <div style="font-family: 'Outfit', sans-serif; color:black;background-color:#7FC0C4;text-align:center;padding:50px 80px;text-align: justify;">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, amet ab? Iste doloremque est explicabo, fugiat facere accusantium.</p>
        </div>
    </div>

    <div class="parallax3">
        <div class="texteparallax">
            <span class="contourtexteparallax" style="font-family: 'Outfit', sans-serif; background-color:transparent;font-size:25px;color: #f7f7f7;">DECOUVREZ NOTRE PRODUIT ICI</span>
        </div>
    </div>

    <div style="position:relative;">
        <div style="font-family: 'Outfit', sans-serif; color:black;background-color:#7FC0C4;text-align:center;padding:50px 80px;text-align: justify;">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, amet ab? Iste doloremque est explicabo, fugiat facere accusantium.</p>
        </div>
    </div>

<div class="parallax4">
    <div class="produit">
        <div class ="avisclient">
            <img src="Data/casque.png" alt="imageproduit" style="height:500px;">
        </div>
        <div class="notation" id=etoiles>
            <input type="radio" id="etoiles5" name="notation" value="5" />
            <label for="etoiles5" title="text">5 etoiles</label>
            <input type="radio" id="etoiles4" name="notation" value="4" />
            <label for="etoiles4" title="text">4 etoiles</label>
            <input type="radio" id="etoiles3" name="notation" value="3" />
            <label for="etoiles3" title="text">3 etoiles</label>
            <input type="radio" id="etoiles2" name="notation" value="2" />
            <label for="etoiles2" title="text">2 etoiles</label>
            <input type="radio" id="etoiles1" name="notation" value="1" />
            <label for="etoiles1" title="text">1 etoiles</label>
        </div>
        <!-- DEBUG -> Vérifie si une étoile est cochée -->

        <!-- <p>
            <input type="button" id="check" onclick="nowCheck()" value="Click it" />
        </p> -->
        <div style="color:white;"><p>Noter notre produit et laisser un avis</p></div>
</div>

<!-- Verifie si on peut mettre un avis/si on est connecté -->

<script>

</script>

    <div class="avisutilisateurs">
        <div class="commentaires" style="background-color:grey; border-radius:20px; color:white;">
            <p id="MsgUser2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, amet ab? Iste doloremque est explicabo, fugiat facere accusantium.</p>
        </div>
        <div class="commentaires" style="background-color:grey; border-radius:20px; color:white;">
            <p id="MsgUser1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, amet ab? Iste doloremque est explicabo, fugiat facere accusantium.</p>
        </div>
        <div class="commentaires" style="background-color:grey; border-radius:20px; color:white;">
            <p id="MsgUser">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, amet ab? Iste doloremque est explicabo, fugiat facere accusantium.</p>
        </div>
        <div class="commentaires2">
            <input type="Text" id="AvisUser" style="border-radius:20px; color:grey;">
            <button class="bouton-avis bouton-avis5" onclick="EnvoyerCommentaire()">Laissez-nous un avis</button>
        </div>
        </div>
    </div>

<div style="position:relative;">
    <div style="font-family: 'Outfit', sans-serif; color:black;background-color:#7FC0C4;text-align:center;padding:50px 80px;text-align: justify;">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, amet ab? Iste doloremque est explicabo, fugiat facere accusantium.</p>
    </div>
</div>


<!-- VIDEO -->

 <div class="myVideo">
    <div class="textevideo" style="font-family: 'Outfit', sans-serif;">
        <h5>Pour un son authentique</h5>
     </div>
    <video autoplay loop muted>
          <source src="Data/Video1.mp4" type="video/mp4">
          Your browser does not support the video tag.
    </video>
  
 </div>
 <?php
    include("View/Footer.php");
    ?>
</body>

</html>