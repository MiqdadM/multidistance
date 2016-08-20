<?php

use \MiqdadM\Multidistance\multidistance;

/**
 *
 */
class multidistanceTest extends \PHPUnit_Framework_TestCase
{
    public function testMethodOutput()
    {
        $data1 = [4, 3, 6];
        $data2 = [2, 3, 7];

        $expected  = [2.2360679774998];
        $expected2 = [3];
        $expected3 = [1.9129311827724];
        $expected4 = [2];
        $expected5 = [0.41025641025641];
        $expected6 = [0.12];
        $expected7 = [1.8476846432762];
        $expected8 = [0.37829763262563];

        $test = new multidistance($data1, $data2);
        $test->distance();

        $result = $test->getEuclidean();
        $this->assertEquals($expected, $result);

        $result2 = $test->getManhatan();
        $this->assertEquals($expected2, $result2);

        $result3 = $test->getMinkowski();
        $this->assertEquals($expected3, $result3);

        $result4 = $test->getChebychef();
        $this->assertEquals($expected4, $result4);

        $result5 = $test->getCanbera();
        $this->assertEquals($expected5, $result5);

        $result6 = $test->getBrayCurtis();
        $this->assertEquals($expected6, $result6);

        $result7 = $test->getKullbackLeibler();
        $this->assertEquals($expected7, $result7);

        $result8 = $test->getJensenShannon();
        $this->assertEquals($expected8, $result8);
    }
}
