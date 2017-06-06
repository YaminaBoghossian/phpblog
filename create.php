<?php
    $title = "";
    $content = "";

//  si filename est trouvé alors le code a lintereiru sexecute ,
// Ensuite on cible le titre et on lit
// le contenu du fichier avec file get contents .
    if (isset($_GET['filename'])){
        $title = $_GET['filename'];
        $content = file_get_contents('posts/'.$_GET['filename']);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
           @font-face {
                    font-family:"Love Me";
                    src: url('Love Me.ttf');
           }

           @font-face {
                    font-family:"Please write me a song";
                    src: url('Please write me a song.ttf');

           }

        body {
            background-color: #64516d;
            text-align : center;
        }

        h1 {
            font-family: "Love Me";
            font-size: 60px;
        }

        textarea {
            padding : 40px;
            font-family: "Please write me a song";
            font-size: 25px;
            width: 70%;
            height: 300px;
        }

        #title {
            font-family: "Please write me a song";
            font-size: 30px;
            width: 40%;
            height: 50px;
        }
    </style>
</head>

<body>
    <h1> New Post </h1>
    <form action="createfile.php" method="POST">
        <p> <label for="Title"> <input  id = "title" type="text" name="titre" placeholder="Title" value="<?php echo $title;?>" /> </label></p>
        <p> <textarea  name="message"> <?php echo $content; ?> </textarea></p>
        <p> <input type="submit" value="submit" name="create" /></p>
    </form>
</body>

</html>