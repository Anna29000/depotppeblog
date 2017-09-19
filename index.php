
<?php
require 'modele.php';
try{ $billets = getBillets();
require 'vueAcceuille.php';
}
catch (Exception $e){
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}


                   ?>


