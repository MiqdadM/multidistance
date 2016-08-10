<?php

include 'multidistance.php';

$data1 = [4, 3, 6];

$data2 = [2, 3, 7];

try {
    $tes = new multidistance($data1, $data2);
    $tes->distance();

    echo 'Euclidean Distance Method';
    echo'<pre>';
    print_r($tes->getEuclidean());
    echo'</pre>';

    echo '</br>';
    echo 'Manhatan (City Block) Distance Method';
    echo'<pre>';
    print_r($tes->getManhatan());
    echo'</pre>';

    echo '</br>';
    echo 'Minkowski Distance Method';
    echo'<pre>';
    print_r($tes->getMinkowski());
    echo'</pre>';
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
