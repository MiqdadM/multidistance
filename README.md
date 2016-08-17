# multidistance

[![Build Status](https://travis-ci.org/MiqdadM/multidistance.svg?branch=master)](https://travis-ci.org/MiqdadM/multidistance)


Calculate 2 Vektor Using 8 Distance Based Similarity Method : 
- Euclidean Distance Method
- Manhatan Distance Method 
- Minkowski Distance Method
- Chebychef Distance Method 
- Canbera Distance Method 
- Bray Curtis Distance Method 
- Kullback Leibler Distance Method 
- Jensen Shannon Distance Method

## usage

```php

require 'multidistance.php';

$test = new multidistance([4, 3, 6], [2, 3, 7]);
$test->distance();

echo 'Euclidean Distance Method';
echo'<pre>';
print_r($test->getEuclidean()); // 2.2360679774998
echo'</pre>';

echo '</br>';
echo 'Manhatan (City Block) Distance Method';
echo'<pre>';
print_r($test->getManhatan()); // 3
echo'</pre>';

echo '</br>';
echo 'Minkowski Distance (&#955 = 3) Method';
echo'<pre>';
print_r($test->getMinkowski()); // 1.9129311827724
echo'</pre>';

echo '</br>';
echo 'Chebychef Distance Method';
echo'<pre>';
print_r($test->getChebychef()); // 2
echo'</pre>';

echo '</br>';
echo 'Canbera Distance Method';
echo'<pre>';
print_r($test->getCanbera()); // 0.41025641025641
echo'</pre>';

echo '</br>';
echo 'Bray Curtis Distance Method';
echo'<pre>';
print_r($test->getBrayCurtis()); // 0.12
echo'</pre>';

echo '</br>';
echo 'Kullback Leibler Distance Method';
echo'<pre>';
print_r($test->getKullbackLeibler()); // 1.8476846432762
echo'</pre>';

echo '</br>';
echo 'Jensen Shannon Distance Method';
echo'<pre>';
print_r($test->getJensenShannon()); // 0.37829763262563
echo'</pre>';

```
