<?php

  date_default_timezone_set('America/Costa_Rica');  
  $json = file_get_contents('php://input'); 
  $params = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE
 
  switch($_GET["n"]){
 
 
 case 1:
 
    $url = $_POST["url"];

    $json = file_get_contents($url);
    $datos= json_decode($json,true);
   // var_dump($datos);
    echo $json;

  break;

  case 2:

    $state = $_POST["state"];
    $id = trim($_POST["id"]);

    echo "{\"id\": \"$id\",\"state\": \"working\"}";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://iitd7euw75.execute-api.us-east-1.amazonaws.com/services/orders/updateOrder");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"id\": \"$id\",\"state\": \"$state\"}");
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json"
    ));
    
    $response = curl_exec($ch);
    curl_close($ch);
    
  //  var_dump($response);
  break;

  case 3:

    $ch = curl_init();

    $nombre = "Ejemplo";

    curl_setopt($ch, CURLOPT_URL, "https://iitd7euw75.execute-api.us-east-1.amazonaws.com/services/orders/createOrder");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{
      \"items\": [
        {
          \"id\": \"63dc592c-c1b7-4c7c-b85f-7bb64a0e63c5r\",
          \"qty\": 3
        }
      ],
      \"user\": \"$nombre\"
    }");
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json"
    ));
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    var_dump($response);



  break;

  case 4:

    $ch = curl_init();
    $id = $_POST["id"];

    curl_setopt($ch, CURLOPT_URL, "https://iitd7euw75.execute-api.us-east-1.amazonaws.com/services/products/deleteProduct");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"id\": \"$id\"}");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    var_dump("{\"id\": \"$id\"}");

  break;

  case 5:

    $json = file_get_contents("https://iitd7euw75.execute-api.us-east-1.amazonaws.com/services/products/getProducts");
    $datos= json_decode($json,true);
    echo $json;

  break;
  
}
?>