<?php
    require_once 'style.html';
?>


<html>

<div class="block1" align="right">
    <?php require_once 'google.html';?>
</div>

</html>

<?php


$sql = "SELECT * FROM google";

function execute_query($query){

    $connection=mysqli_connect('localhost','debian-sys-maint','flqNRiW67Jwst6kJ','db');

    $result=mysqli_query($connection,$query);

    if ($result==false){
        echo mysqli_error($connection);
    }

    mysqli_close($connection);

    return $result;
}

file_put_contents('data1.json','');

$table = execute_query($sql);
foreach ($table as $item) {
   $arr[]=$item;
}

$json_form = json_encode($arr);
file_put_contents('data1.json',$json_form);