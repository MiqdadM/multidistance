<?php
include 'multidistance.php';

$data1 = [4, 3, 6];

$data2 = [2, 3, 7];

$tes = new multidistance($data1, $data2);
$tes->distance();

echo"<pre>";print_r($tes->getEuclidean());
echo"</pre>";
