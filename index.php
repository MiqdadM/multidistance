<?php

include 'multidistance.php';

$data1 = [4, 3, 6];

$data2 = [2, 3, 7];

try {
    echo "Vektor 1 = { ";
    foreach ($data1 as $key => $value) {
        echo "$value ";
    }
    echo "}";
    echo "</br>";

    echo "Vektor 2 = { ";
    foreach ($data2 as $key => $value) {
        echo "$value ";
    }
    echo "}";
    echo "</br>";
    echo "</br>";

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
    echo 'Minkowski Distance (&#955 = 3) Method';
    echo'<pre>';
    print_r($tes->getMinkowski());
    echo'</pre>';

    echo '</br>';
    echo 'Chebychef Distance Method';
    echo'<pre>';
    print_r($tes->getChebychef());
    echo'</pre>';

    echo '</br>';
    echo 'Canbera Distance Method';
    echo'<pre>';
    print_r($tes->getCanbera());
    echo'</pre>';

    echo '</br>';
    echo 'Bray Curtis Distance Method';
    echo'<pre>';
    print_r($tes->getBrayCurtis());
    echo'</pre>';

    echo '</br>';
    echo 'Kullback Leibler Distance Method';
    echo'<pre>';
    print_r($tes->getKullbackLeibler());
    echo'</pre>';

    echo '</br>';
    echo 'Jensen Shannon Distance Method';
    echo'<pre>';
    print_r($tes->getJensenShannon());
    echo'</pre>';
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
