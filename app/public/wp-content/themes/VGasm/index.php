<?php get_header(); ?>


<!-- The below code is sample code for how to show all of the posts on one page, with links to their individual posts (so you can see just one post on one page) -->
<?php 

while(have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
    <?php the_content()?>
    <hr>
<?php } 

?>


<?php get_footer(); ?>




<!-- What is below is test code for looping. This is how you would loop over, say, names. You are using "count", iterating over the array and counting up by one each time (++), which will end after it reaches the end of the array. 
<?php 

$names = array('Jason', 'Simone', 'Stacie', 'Kevin');

$count = 0;

while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
}

?>

-->



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