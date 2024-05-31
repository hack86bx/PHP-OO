<?php


require_once "SecondClass.php";

$instance1 = new SecondClass();

var_dump(
        $instance1,
    );


    ?>

<h3>Public Properties</h3>
<p>Rarely used because they are too permissive &lpar;except with read only&rpar;</p>
<p>To access a property from outside the instance, $instance->parameter&lpar;without $&lpar;</p>
<h4>They can be read  from the exterior of the object</h4>
<code>echo $instance1->param2;</code><br>
<?php
echo $instance1->param2;
?>
<h4>They can also be mmodified from the exterior of the object</h4>
<code>echo $instance1->param2;</code><br>
<?php
$instance1->param1 = 25;
echo $instance1->param1;

?>

<h3>Public Constants</h3>
<p>Can be displayed from outside the instance with ::</p>
<code>
    echo $instance1::CONSTANT_1;
    echo SecondClass::CONSTANT_1;
</code>
<?php   
echo $instance1::CONSTANT_1;
echo "<br>";
echo SecondClass::CONSTANT_1;


?>
<h3>Public Methods</h3>
<p>These methods can be called from outside &lpar;as well as the inside&rpar; with the operator -></p>

<?php
$instance1->bonjourLesAmis(); 
echo "<br>";
$show = $instance1->getParam2();
echo $show;
