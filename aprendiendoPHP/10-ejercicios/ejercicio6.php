<?php

    echo '<table border = "1">';

        echo '<tr>';

            for($i = 1; $i <= 10; $i++){
                echo "<td> tabla del $i: </td>";
            }

        echo '<tr>';

        echo '<tr>';

            for($i = 1; $i <= 10; $i++){
                echo '<td>';
                for($j = 1; $j <= 10; $j++){
                    echo ($i * $j). '<br>';
                }
                echo '</td>';
            }

        echo '<tr>';

    echo '</table>';
?>