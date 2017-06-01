  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title></title>
  </head>
  <body>
      <h1> My Blog </h1>
 
    <?php 
    
    $dossier = "/home/boghossian/devv/php/phpblog/posts";
    
    if (is_dir($dossier)){               /* verifier si le dossier en lien existe */
        if ($open = opendir($dossier)){        /*s'il existe ouvrir le dossier */
            while(($fichier = readdir($open))!== false) { 
                if( $fichier != '.' && $fichier != '..') {       
                echo "<p>".'<a href="'.$dossier.$fichier.'">'.$fichier.'</a>'."</p>";
                echo file_get_contents($dossier."/".$fichier).'</br>'; /*'afficher le contenu
                des fichiers*/
                echo '<form method = "GET" action = "delete.php">
                <input type = "hidden" name = "filename" value= "'.$fichier.'">
                <input type = "submit" value = "delete"> </form>';
                
                }
            }
            closedir($open);
            
        } 
    }

    ?>

    
     </body>
  </html> 