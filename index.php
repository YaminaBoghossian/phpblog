  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>index blog</title>
<style>
            @font-face {
                    font-family:"Love Me";
                    src: url('Love Me.ttf');
           }

           @font-face {
                    font-family:"Please write me a song";
                    src: url('Please write me a song.ttf');

           }
           h1 {
               font-family : "Love Me";
               font-size: 70px;
               text-align: center;
               
           }
           a {
               font-family: "Please write me a song";
               font-size: 40px;
               color: purple;
               
           }

           input {
               width: 10%;
               height: 2em;
               background-color: #64516d;
           }

           #text {
               font-size: 20px;
           }
</style>
  </head
  <body>
      <h1> Index </h1>
 
    <?php 
    
    $dossier = "/home/boghossian/devv/php/phpblog/posts";
    
    if (is_dir($dossier)){               /* verifier si le dossier en lien existe */
        if ($open = opendir($dossier)){        /*s'il existe ouvrir le dossier */
            while(($fichier = readdir($open))!== false) { 
                if( $fichier != '.' && $fichier != '..') {       
                echo "<p>".'<a href="'.$dossier.$fichier.'">'.$fichier.'</a>'."</p>";
                echo file_get_contents($dossier."/".$fichier).'</br>'; /*'afficher le contenu
                des fichiers*/
                echo '<form method = "GET" action = "create.php">
                <input type = "hidden" name = "filename" value = "'.$fichier.'">
                <input type = "submit" value = "edit"> </form>';
                
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