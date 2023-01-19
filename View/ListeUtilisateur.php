<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Andrea - Admin</title>
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <?php
         include("View/Header.php");
    ?>


            <div class="flex-ticket">
                <div class="white container scroller "> 
                    <!-- a rendre dynamique avec le php-->
                    <a href="routeur.php?action=messageAdmin" class="a-invisible">
                        <div class="msg">
                            <img src="Data/image.png" width="40px">
                            <p class="admin-text-msg">FEFNRIUNREIUVNRIUGRURBVRUBRYURBVRUVBRVRBVRB</p>
                        </div>
                    </a>
                    <a href="routeur.php?action=messageAdmin" class="a-invisible">
                        <div class="msg">
                            <img src="Data/image.png" width="40px">
                            <p class="admin-text-msg">TEST</p>
                        </div>
                    </a>
                    <a href="routeur.php?action=messageAdmin" class="a-invisible">
                        <div class="msg">
                            <img src="Data/image.png" width="40px">
                            <p class="admin-text-msg">TEST</p>
                        </div>
                    </a>
                    <a href="routeur.php?action=messageAdmin" class="a-invisible">
                        <div class="msg">
                            <img src="Data/image.png" width="40px">
                            <p class="admin-text-msg">TEST</p>
                        </div>
                    </a> 
                    
                </div>

                
                

            </div> 
    </div>

    
    <?php
    include("View/Footer.php");
    ?>

</body>
</html> 