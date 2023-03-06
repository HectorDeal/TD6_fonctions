<?php

// déclaration de la variable lyrics qui doit être sur plusieurs ligne comme sur le doc
$lyrics = <<<EOD
Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
I feel the room swayin'
While the band's playin'
One of our old favorite songs from way back when
So, take her wrap, fellas
Dolly, never go away again
Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
I feel the room swayin'
While the band's playin'
One of our old favorite songs from way back when
So, golly, gee, fellas
Have a little faith in me, fellas
Dolly, never go away
Promise, you'll never go away
Dolly'll never go away again
EOD;



/**
 * fonction qui permet de transformer une chaine en un table de sous chaines.
 * Chaque segment correspond à une ligne. 
 * @param String $string
 * @return Array
 */

function getLyrics($lyrics){
    $sing = [];
    $sing = explode("\n",$lyrics);
    print_r($sing);
}


/**
 * Fonction qui prend en paramètre un tableau et retourne un élément du tableau aléatoirement
 * @param Array $array
 * @return String
 */
function  getRandLyric($lyrics){
    $sing2 = explode("\n", $lyrics);
    $rand = array_rand($sing2, 1);
    echo $sing2[$rand];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>hello, dolly</title>
</head>

<body>
    <div class="container">
        <main class="text-center">
            <h1>Hello, Dolly Song</h1>
            <blockquote>
                <p>Hello, Dolly</p>
                <?= getRandLyric($lyrics) ?>
                <!-- <?= getLyrics($lyrics) ?> -->
                <footer><cite>Louis Armstrong</cite> - 1964</footer>
            </blockquote>
        </main>
        <footer id="site-footer" class="text-center">
            <p>Crédit image <a href='https://www.freepik.com/vectors/background'>Background vector created by starline - www.freepik.com</a></p>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>