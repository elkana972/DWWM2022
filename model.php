<?php

function creer_tableau($n,$p,$s)
{
    //
    $t1 = array(
        array("nom"=>$n,"prenom"=>$p,"sexe"=>$s )   
    );
    return $t1;
}



function afficher_tableau($var)
{
    foreach($var as $nb => $infos){
        echo ' <br> Utilisateur n°' .($nb + 1). ' :<br>';
        foreach ($infos as $c => $v){
            echo $c. ' : ' .$v. '<br>';
        }
        echo '<br>';
    }
    return $var;
}

function ajouter_element($tableau_initial,$nouveau_tableau)
{
    $fusion = array_merge($tableau_initial,$nouveau_tableau);
    return $fusion;
}

/*
$tableau2 = array_merge($tableau,
    array(
            array(
        "nom"=>"lesmond","prenom"=>"liana","sexe"=>"f")
    )
);
*/