<?php

//acces aux données

function getBillets(){
    
   
    $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
        . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
        . ' order by BIL_ID desc');
    
    return $billets;
}

function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=bddBlog;charset=utf8',
        'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return  $bdd;
    
}

?>