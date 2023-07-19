<?php

function ucgen($x){
    for($i=0;$i<=$x;$i++){
        for($y=0;$y<$i;$y++){
            echo "o";
        }
        echo "<br>";
    }
}
ucgen(4);

?>