
<?php
require 'modele.php';
try{ $billets = getBillets();
require 'vueAcceuille.php';
}
catch (Exception $e){
    $msgErreur = $e->getMessage();
    require 'erreure.php';
}   


                   ?>


