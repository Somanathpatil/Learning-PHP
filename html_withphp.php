<?php
echo "<h1 style='color:green'>  Html with php</h1>";

$name="Somanath";
echo "<h1>$name</h1>";
?>

<?php
$h2_color="orange";
$name="Somanath";
?>

<h2 style="color:<?php echo $h2_color;?>">
    <?php echo"this is my place $name";?>
</h2>
<h2 style="color:<?php echo$h2_color;?>">
    <?php echo"I am $name";?>
</h2>
<h2 style="color:<?php echo$h2_color;?>">
    <?php echo"My name is $name";?>
</h2>
<h2 style="color:<?php echo$h2_color;?>">
    <?php echo"My friend call me $name";?>
</h2>