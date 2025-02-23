<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = 'W3Schools';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://developer.mozilla.org/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';

        echo '<a href="' . $linkURL . '">' . $linkName . '</a><br>';

        // If there is an image, output the image
        // If there is no image, output nothing
        if ($linkImage)
        {
            echo '<img src="'.$linkImage.'" width=100><br>';
        }


        ///Challenge 1

        $hour = ceil(rand(1,24)); // random hour between 1 and 24

        echo "The random hour is: " . $hour . ".00<br>";

            ///If the time is between 5 AM and 9 AM, the animals should have breakfast
        if ($hour >= 5 && $hour < 9) {
            echo "Breakfast: Bananas, Apples, and Oats";

            ///if the time is between 12 PM and 2 PM, the animals should have lunch
        } elseif ($hour >= 12 && $hour < 14) {
            echo "Lunch: Fish, Chicken, and Vegetables";

            ///If the time is between 7 PM and 9 PM, the animals should have dinner.
        } elseif ($hour >= 19 && $hour < 21) {
            echo "Dinner: Steak, Carrots, and Broccoli";

            ///If the time does not fall within any of the above intervals, the animals are not being fed
        } else {
            echo "The animals are not being fed at this time.";
        }


        ///Challenge 2

        $number = ceil(rand(1,100)); // random number between 1 and 100
        echo '<p>The randon number is '.$number.'</p>';
    

            // if random number is is divisible by 3 and 5
            if ($number % 3 == 0 && $number % 5 == 0) {
                echo "The magic number is FizzBuzz";

            // // if random number is is divisible by 3
            } elseif ($number % 3 == 0) {
                echo "The magic number is Fizz";

            // if random number is is divisible 5
            } elseif ($number % 5 == 0) {
                echo "The magic number is Buzz";

            // If the number is not divisible by either 3 or 5
            } else {
                echo "The magic number is $number";
            }



        ?>

    </body>
</html>