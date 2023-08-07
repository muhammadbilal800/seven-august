<?php 
    $table_result = "";
    $error = "";
    if(isset($_POST["create_table"])){
       $start= $_POST["start"];
       $end=  $_POST["end"];
       $table=  $_POST["table"];
       if($start < $end){
            for($index=$start;$index<=$end;$index++){
                $table_result.="{$table} x {$index} = ". $table * $index. "<br>";
            }
       }else{
            $error = "Starting should be greater than ending!";
       }
    }
?>