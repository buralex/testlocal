<?php 

 /*-------------- menu --------------------*/
 function drawMenu($menu, $vertical=true) {
    $style="";
    if (!$vertical) {
        $style= " style='display: inline-block; margin-right: 15px;' ";
    }
    echo "<ul>";
        foreach ( $menu as $item ) {
          echo "<li$style><a href = '{$item['href']}'>{$item['link']}</a></li>";
        }
    echo "</ul>";
  }
 

  function drawTable($cols, $rows, $color){
    echo "<table border='1' style='width: 300px;'>\n";
      
       for ( $j=1 ; $j<= $rows; $j++){
         echo "\t<tr>\n";
            for( $i=1 ; $i<= $cols; $i++){
              if($j==1 || $i==1) {
                echo "\t\t<th style='background: $color; text-align: center;'>" . $i * $j . "</th>\n";
              } else {
                echo "\t\t<td>" . $i * $j . "</td>\n";
              }
            }
         echo "\t</tr>\n";
       }
       
    echo "</table>";
  }
?>