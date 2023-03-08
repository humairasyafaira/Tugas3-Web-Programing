<?php 
    function urutanAngka($angka) {
        $baris = 1;
        $x = 1;
        while ($x <= $angka) {
          for ($y = 1; $y <= $baris; $y++) {
            echo $x . " ";
            $x++;
          }
          echo "<br/>";
          $baris++;
        }
      }
      
      echo urutanAngka(15);
      
?>