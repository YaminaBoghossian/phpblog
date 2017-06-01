<?php 
$cd = $_GET['filename'];
if (isset($_GET['filename'])){
    unlink('posts/'.$cd);
}
  
?>