<html>

<head>
    <title>The Basics of PHP(Hypertext preprocessor)</title>
</head>

<body>
Hi Robert

<!-- HTML doesn't recognize php tags meaning If you write something their and file is saved with .html extension content will not be displayed
     (text etc).-->

<!-- Standard form -->
<?php
// Some PHP example comment #1.
# Some PHP example comment #1.
echo 'Hi Robert<br/>';
?>

<!-- Shorthand form -->
<?
 echo "This is shorthand way of starting and creating a php script.<br/>";
 echo "\n";
 echo "";

 $count = 0;
 for($i=1; $i<=10;  $i++){
     echo (string)$i.'<br/>';
 }
?>

<!-- Strings -->
<?php
// Special Characters
echo "<br/>";
$return = "A carriage return is \r";
$tab = "A tab is \t";
$dollar = "A dollar sign is \$";

echo $return;
echo $tab;
echo $dollar;
echo '<br/>';

$adhereDoc = <<<EXACMPLE
The batman 
EXACMPLE;

echo $adhereDoc;
//echo "We are Implementing echo multiline string";
echo "<br/>";

echo 'Hi welcome to free basic tutorial of php
    \'Yep!';


?>

</body>

</html>

