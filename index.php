<?php 
require "Personnage.php";


$merlin = new Personnage("Merlin");
$merlin->regenerate(20);
$merlin->Hit();

$harry = new Personnage("Harry");

$merlin->attack($harry);


echo '<pre>';

    var_dump($merlin);
    var_dump($harry);

echo '</pre>';

$form = new Form(array(
    'username' => 'Roger'
    ));



?>