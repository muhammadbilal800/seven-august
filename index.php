<?php include_once("./controller/api.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="number" placeholder="table starting" name="start">
        <input type="number" placeholder="table ending" name="end">
        <input type="number" placeholder="table" name="table">
        <button type="submit" name="create_table" >Submit</button>
    </form>
    <?php 
        if($table_result){
            echo $table_result;
        }
        if($error){
            echo "<h1>{$error}</h1>";
        }
    ?>
</body>
</html>