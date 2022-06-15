<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bah c'est une banque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<!-- ---------------------------------------------  style.css ------------------------------------------------------------ -->
<style>
        body{
            background-image: linear-gradient(to right top, #002864, #005fa2, #0095ab, #00c678, #a8eb12);
        }
        h1{
            text-align: center;
        }
        #fromage{
            color: red;
        }
        #jambon {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
        #jambon div{
            margin : 1%;
            padding: 1%;
        }

    </style>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
 
<div class="">
<h1> LaBanque </h1>
</div>
<?php

include_once('classes/banque.php');
include_once('classes/courrant.php');
include_once('classes/epargne.php');


/*
$JeanLouis = new compteCourrant(100,100,"Mr","x");
$JeanLouisEpargne = new compteEpargne(100,20,"Mr","x");


echo $JeanLouis->retrait(1500);

echo "<br><br>";

echo $JeanLouis;
echo "<br>";
echo $JeanLouisEpargne;
*/


$compte = [
    [12,1000,"MrPierre","x"],
    [920,20,"MrLac","y"],
    [180,2000,"MrArbre","z"]
];


$comptecour = [];
$compteepargne = [];


foreach ($compte as $p){
    $comptecour[] = new compteCourrant($p[0],$p[1],$p[2],$p[3]);
    $compteepargne[] = new compteEpargne($p[0],$p[1],$p[2],$p[3]);
}


?>
<table class="table">
    <tr class="nav justify-content-center"> <?php
foreach ($comptecour as $key=>$p){
    echo '<td class="nav-item"><a class="nav-link link-dark" href="index.php?id='.$key.'">'.$p->getNom().'</a></td>';
}
?> <?php
?> <section class="container"><div class=""> <?php
echo '<td class="nav-item"><a id="fromage" class="nav-link link-dark" href=index.php?product=1>Tout les compte</a></td><br>';
?> </tr></div></section>
</table>
<?php

if (isset($_GET['id'])){
    ?> 

    <section id="jambon">
    <div class="border border-primary rounded col-5"> <?php 
    echo "<h2>Compte courant</h2><br>";
    echo $comptecour[$_GET['id']];
    ?> </div><div class="border border-success rounded col-5"> <?php 
    echo "<h2>Compte epargne</h2><br>";
    echo $compteepargne[$_GET['id']];
    ?> </div></section> <?php 
}

/*
if (isset($_GET['product'])){
    foreach ($comptecour as $p){
        echo $p;
        echo "<br><br>";
    }
    foreach ($compteepargne as $c){
        echo $c;
        echo "<br><br>";
    }
}
*/


if (isset($_GET['product'])){
echo "<h2>Page qui peut fonctionnné mais qui fonctionne pas vraiment</h2>";
    ?> <section><div class=""><table class="table table-hover">
        <tr> <th scope="col"> Nom </th> <?php 
        foreach ($compte as $p){
            ?> <td> <?php 

            ?> </td> <?php
        }
        ?> <th scope="col"> Prénom </th> <?php 
        foreach ($compte as $p){
            ?> <td> <?php 

            ?> </td> <?php
        }
        ?> <th scope="col"> Argent </th> <?php 
        foreach ($compte as $p){
            ?> <td> <?php 

            ?> </td> <?php
        }
        ?> <th scope="col"> Découvert </th></tr> <?php 
        foreach ($compte as $p){
            ?> <td> <?php 

            ?> </td> <?php
        }

    ?> </table></div></section>  <?php
}

