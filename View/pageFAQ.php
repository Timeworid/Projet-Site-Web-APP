<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="pageFAQ.css">
        <script src="question.js"></script>
        <title>
            Foire aux questions
        </title>
    </head>

    
    


    <body>
        
    <?php
         include("View/Header.php");
    ?>
        <h1>Foire au question</h1>
        
        <!--<input id="searchbar" onkeyup="search_question()" type="text"
        name="search" placeholder="Cherchez la question"> -->
    

    
    <section class="faq-section">
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
    <?php
        include("View/Footer.php");
    ?>
    </body>

    
    

    


</html>