<?php
include 'multidistance.php';

$data1 = [4, 3, 6];

$data2 = [2, 3, 7];
try {
    $tes = new multidistance($data1, $data2);
    $tes->distance();

    echo "Euclidean Distance";
    echo"<pre>";
    print_r($tes->getEuclidean());
    echo"</pre>";
    echo "</br>";
    echo "Manhatan Method";
    echo"<pre>";
    print_r($tes->getManhatan());
    echo"</pre>";
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
