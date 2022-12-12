<!DOCTYPE html>
<html>
<?php
        $handle = fopen("./Header.html", "r");
        if($handle){
            while (!feof($handle)) {
                $buffer = fgets($handle);
                echo $buffer;
            }
            if(feof($handle)){
                fclose($handle);
            };
        };  
    ?>
<head>
    <title>Test1</title>
    <link rel="stylesheet" href="../PageProduit.css">
</head>
<body>



<!--CORPS DE LA PAGE-->>
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
        <div class="texteparallax">
            <span class="contourtexteparallax" style="font-family: 'Outfit', sans-serif;">RESPIREZ ENFIN DE L'AIR PUR EN COURANT</span>
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
</body>
<?php
$handle = fopen("./Footer.html", "r");
    if($handle){
		while (!feof($handle)) {
            $buffer = fgets($handle);
            echo $buffer;
        }
        if(feof($handle)){
            fclose($handle);
        };
    }; 
    ?>
</html>