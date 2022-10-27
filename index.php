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
?>

<form action="#" method="get">

<?php
/**
 * include class Form
 */
require "Form.php";
require "Text.php";
/**
 * create instance
*/
$form = new Form($_GET);
echo $form->input('username');
echo $form->input('password');
echo $form->submit();


?>

</form>


<?php 

var_dump(Text::PublicWithZero((8)));

?>