<?php

if (isset($_POST['create'])){

$titre = $_POST['titre'];
$message = $_POST['message'];

if (!is_dir('posts')){
   mkdir('posts');

}

$fichier = fopen('posts/'.$titre.'.txt', 'w');
fwrite($fichier, $message);
fclose($fichier); //si on ne ferme pas, fichier en cours d'utilisation'

echo'<p> New post added </p>';
header('location: index.php');

} else {
   echo'<p>not sent </p>';
}

?>
