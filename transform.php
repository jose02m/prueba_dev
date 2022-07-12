<?php
  $num = $_POST['num'];
  
  if($num < 0){
    echo "El número debe ser mayor a 0.";
    return;
  }

  transformNumber($num);

  function transformNumber($num){
    $stop = false;  

    while($stop == false){
      if($num%2 == 0){
        $num = $num/2;
        echo $num . ", ";
      } else {
        $num = ($num*3)+1;
        echo $num . ", ";
      }
  
      if($num == 1){
        $stop = true;
      }
    }
  }
?>