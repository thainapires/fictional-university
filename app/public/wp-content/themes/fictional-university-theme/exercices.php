//Aula 1
<?php
    function greet($name, $color){
        echo "<p>My $name is blank and my favorite color is $color</p>";
    }

    greet('Thaina',"blue");
    greet('Vitor',"purple");

?>

<h1><?php bloginfo('name');?></h1>
<p><?php bloginfo('description');?></p>

//Aula 2

<?php
    $names = array('Thaina', 'Vitor');
    $count = 0;
    while($count < count($names)){
        echo "<p>hi, my name is <?php echo $names[$count]?></p>";
        $count++;
    }
?>