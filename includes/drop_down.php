<?php


   require('config.php');
 
   $sql = "select ftd_id,d_from ,d_to FROM field_test_data  WHERE bh_id =".$_GET['id'].""; 
   $json = [];
   $query=mysqli_query($con,$sql);
   while($result=mysqli_fetch_array($query)){
        $json[$result['ftd_id']] = $result['d_to']."-".$result['d_from'];
   }

   echo json_encode($json);
?>