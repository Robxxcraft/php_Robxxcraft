<?php
    $jml = $_GET['jml'];
    echo "<table border=1>\n";
    for ($a= $jml; $a > 0 ; $a--) { 
        echo "<tr>\n";
        $total = [];
        for ($b= $a; $b > 0 ; $b--) { 
            array_push($total, $b);
        }
        echo "<tr><td style='border: none;'>TOTAL: ".array_sum($total)."</td></tr>\n";
        foreach ($total as $ttl) { 
            echo "<td style='display: inline-block; width: 24px !important;'>$ttl</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>";
?>