<?php 

$names = array('Jason', 'Simone', 'Stacie', 'Kevin');

$count = 0;

while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
}

?>








<!-- <?php 

$count = 1;

while($count <= 100) {
    echo "<li>$count</li>";
    $count++;
}

?> -->





<!-- <?php 

$myName = "Jason";

?>

<p>Hi, my name is <?php echo $myName ?></p> -->

<!-- <?php 
 function greeting($name, $color) {
    echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
 }

greeting('Jason', 'blue');
greeting('Simone', 'red');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p> -->