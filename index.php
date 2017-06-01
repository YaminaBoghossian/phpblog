    
    <?php 
    echo "<h1>" .  "Mon Blog" . "</h1>";
    $dossier = "/home/boghossian/devv/php/phpblog/posts";
    
    if (is_dir($dossier)){               /* verifier si le dossier en lien existe */
        if ($open = opendir($dossier)){        /*s'il existe ouvrir le dossier */
            while(($fichier = readdir($open))!== false) { 
                if( $fichier != '.' && $fichier != '..') {       
                echo '<a href="'.$dossier.$fichier.'">'.$fichier.'</a>'.'</br>';
                echo file_get_contents($dossier."/".$fichier).'</br>';/* AFIN D'afficher le contenu
                des fichiers*/
                }
            }
            closedir($open);
            
        } 
    }

    ?>