<?php 
    foreach ($_GET as $key => $value)
        $_GET[$key] = htmlspecialchars($value);
    foreach ($_POST as $key => $value)
        $_POST[$key] = htmlspecialchars($value);
?>


<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="pageFAQ.css">
        <script src="pageFAQ.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <title>
            Foire aux questions
        </title>
    </head>

    
    


    <body>
        
    <?php
        include("Header.php");
    ?>

    
        <h1>Foire au question</h1>
        
        <!--<input id="searchbar" onkeyup="search_question()" type="text"
        name="search" placeholder="Cherchez la question"> -->
    

    
    <section class="faq-section">
        <?php foreach ($faqs as $faq){
            echo '<div class="divquestion">
            <input type="checkbox" id="q1">
            <label for="q1">'.$faq["question"].'</label>
            <p>...Lorem ipsum dolor sit amet ...</p>
            <p>'.$faq["réponse"].'</p>
            </div>'} 
        ?>

        <div class="divquestion">
            <input type="checkbox" id="q1">
            <label for="q1">Question 1 ?</label>
            <p>...Lorem ipsum dolor sit amet ...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt aliquam ligula non posuere. Etiam ultricies non lorem non ultricies. Integer tempus ipsum tortor, sit amet scelerisque diam scelerisque quis. Vivamus tempus, elit a faucibus laoreet ?</p>
        </div>

        <div class="divquestion">
            <input type="checkbox" id="q2">
            <label for="q2">Question 2 ?</label>
            <p>...Lorem ipsum dolor sit amet ...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt aliquam ligula non posuere. Etiam ultricies non lorem non ultricies. Integer tempus ipsum tortor, sit amet scelerisque diam scelerisque quis. Vivamus tempus, elit a faucibus laoreet ?</p>
        </div>

        <div class="divquestion">
            <input type="checkbox" id="q3">
            <label for="q3">Question 3 ?</label>
            <p>...Lorem ipsum dolor sit amet ...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt aliquam ligula non posuere. Etiam ultricies non lorem non ultricies. Integer tempus ipsum tortor, sit amet scelerisque diam scelerisque quis. Vivamus tempus, elit a faucibus laoreet ?</p>
        </div>

    </section>

    

    <section>
        <h2> Poser votre question</h2>
        <br>
        <input class="text" type="text" id="question" name="question"  size="100">
        <br>
        <div class="g-recaptcha" data-sitekey="6LfY9wQkAAAAAE-iWVoofmGEPaGk06MwRNszlM3l"></div>
        <input class="bouton" type="submit" value="Valider" onclick="return confirmer()">
    </section> 


    <?php
        include("Footer.php");
    ?>
    </body>

    
    

    


</html>