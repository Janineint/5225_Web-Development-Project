<!doctype html>
<html>
  <head>
    <title>PHP and Creating Output</title>
  </head>
  <body>
    <?php 
    echo '<h1>PHP and Creating Output</h1>';
    echo '<p>The PHP echo command can be used to create output.</p>'; 
    ?>

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <p>Can you display a sentence with ' and "?</p>

    <img src="php-logo.png">

    <?php 
    echo '<img src="https://outline-prod.imgix.net/20191127-P04d5YcjzSSa4sZMzYAS?auto=format&q=60&w=1280&s=6719bb9d2ff9ab9c422f96773a1a1a80">'; 
    ?>
    <img src="<?php echo 'https://outline-prod.imgix.net/20191127-P04d5YcjzSSa4sZMzYAS?auto=format&q=60&w=1280&s=6719bb9d2ff9ab9c422f96773a1a1a80'; ?>" alt=""> <!--- Prefeerred-->

    <p>Variables</p>
    <hr>
    
    <?php
    $name = 'Janine';
    $lastname = 'Intrakul';

    echo "Hello, " . $name;
    $person['first'] = 'Janine';
    $person['last'] = "Int";
    $person['email'] = "janineintra@gmail.com"; 
    $person['web'] = "https://github.com/Janineint"; 
    ?>

<!-- Trying JS -->
    <script>
        document.write('Hello World in JS')
    </script>


<!--PHP mail to email and hyperlink-->

    <br><a href="mailto:<?php echo $person['email']; ?>">Email me</a></br>
    <br><a href="<?php echo $person['web']; ?>" target="_blank">Visit my github</a></br>
  </body>
</html>