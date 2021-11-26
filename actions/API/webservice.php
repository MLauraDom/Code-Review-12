<?php

header("Content-Type:application/json");

if(!empty($_GET['id'])){

   $id=$_GET['id'];

   require_once("db_check.php");

   if(empty($name) && empty($price)){
       response(200, "Location not found", NULL, NULL);
   }
   else{
       response(200, "location found" , $name, $price);
   }
}

// If the id is not set - request is not valid
else {
   response(400, "Invalid request", NULL, NULL);
}


// Function for delivering a JSON response
function response($status,$status_message,$name,$price){
     
   // $response array
   $response['status']=$status;
   $response['status_message']=$status_message;
   $response['name']=$name;
   $response['price']=$price;

   //Generating JSON from the $response array
   $json_response=json_encode($response);

   // Outputting JSON to the client
   echo $json_response;
}

?>