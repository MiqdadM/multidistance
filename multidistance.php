<?php

/**
 *
 */
class multidistance
{
    protected $vektor1;

    protected $vektor2;

    protected $euclidexec;

    protected $manhatexec;

    protected $chebyexec;

    protected $minkowexec;

    protected $canberaexec;

    protected $brayexec;

    protected $kullbackexec;

    protected $jensenexec;

    public function __construct(array $vektor1, array $vektor2)
    {
        if (empty($vektor1)) {
            throw new Exception('Jumlah Data Vektor 1 Yang Anda Masukan Harus Tidak Boleh Kosong');
        }

        if (empty($vektor2)) {
            throw new Exception('Jumlah Data Vektor 2 Yang Anda Masukan Harus Tidak Boleh Kosong');
        }

        if (count($vektor1) !==  count($vektor1, COUNT_RECURSIVE)) {
            throw new Exception('Data Vektor 1 Yang Anda Multidemesional');
        }

        if (count($vektor2) !==  count($vektor2, COUNT_RECURSIVE)) {
            throw new Exception('Data Vektor 1 Yang Anda Multidemesional');
        }

        if (count($vektor1) !== count($vektor2)) {
            throw new Exception('Jumlah Nilai Vektor Yang Anda Masukan Tidak Sama Anatara Vektor 1 dan Vektor 2 /n Atau Terjadi Perbedaan Type');
        }

        $this->vektor2 = $vektor2;
        $this->vektor1 = $vektor1;
    }

    public function distance()
    {
        $value1 = $this->vektor1;
        $value2 = $this->vektor2;

        $euclidean = [];
        $manhatan = [];
        $minkowski = [];
        $cheby = [];
        $canbera = [];
        $bray = [];
        $kullback = [];
        $jensen = [];

        $pow = 0;
        $abs = 0;
        $root = 0;
        $insert = [];
        $div = 0;
        $sum = 0;
        $log = 0;
        $multiply1 = 0;
        $multiply2 = 0;

        for ($i = 0; $i < count($value1); ++$i) {
            $diff = $value1[$i] - $value2[$i];
            $pow += pow($diff, 2);
            $abs += abs($diff);
            $root += pow($diff, 3);
            $insert[$i] = $diff;
            $div += abs($diff) / abs($value1[$i] + $value2[$i]);
            $sum += $value1[$i] + $value2[$i];
            $log += $value1[$i] * (log($value1[$i]/$value2[$i]));
            $multiply1 += $value1[$i] * (log((2 * $value1[$i]) / ($value1[$i] + $value2[$i])));
            $multiply2 += $value2[$i] * (log((2 * $value2[$i]) / ($value1[$i] + $value2[$i])));
        }

        $euc = sqrt($pow);
        $rootlambda = pow($root, 1 / 1 / 3);
        $cheby = $insert;
        $curtis = $abs / $sum;
        $fullmultiply = $multiply1 + $multiply2;

        array_push($euclidean, $euc);
        array_push($manhatan, $abs);
        array_push($minkowski, $rootlambda);
        array_push($canbera, $div);
        array_push($bray, $curtis);
        

        $this->setEuclidean($euclidean);
        $this->setManhatan($manhatan);
        $this->setMinkowski($minkowski);
        $this->setChebychef($cheby);
        $this->setCanbera($canbera);
        $this->setBrayCurtis($bray);
    }

    protected function setEuclidean(array $euclidean)
    {
        $this->euclidexec = $euclidean;
    }

    protected function setManhatan(array $manhatan)
    {
        $this->manhatexec = $manhatan;
    }

    protected function setMinkowski(array $minkowski)
    {
        $this->minkowexec = $minkowski;
    }

    protected function setChebychef(array $cheby)
    {
        $chebychef = [];
        array_push($chebychef, max($cheby));
        $this->chebyexec = $chebychef;
    }

    protected function setCanbera(array $canbera)
    {
        $this->canberaexec = $canbera;
    }

    protected function setBrayCurtis(array $bray)
    {
        $this->brayexec = $bray;
    }


    public function getEuclidean()
    {
        if (empty($this->euclidexec)) {
            throw new Exception('Jalankan Method distance Terlebih Dahulu');
        }

        return $this->euclidexec;
    }

    public function getManhatan()
    {
        if (empty($this->manhatexec)) {
            throw new Exception('Jalankan Method distance Terlebih Dahulu');
        }

        return $this->manhatexec;
    }

    public function getMinkowski()
    {
        if (empty($this->minkowexec)) {
            throw new Exception('Jalankan Method distance Terlebih Dahulu');
        }

        return $this->minkowexec;
    }

    public function getChebychef()
    {
        if (empty($this->chebyexec)) {
            throw new Exception('Jalankan Method distance Terlebih Dahulu');
        }

        return $this->chebyexec;
    }

    public function getCanbera()
    {
        if (empty($this->canberaexec)) {
            throw new Exception('Jalankan Method distance Terlebih Dahulu');
        }

        return $this->canberaexec;
    }

    public function getBrayCurtis()
    {
        if (empty($this->brayexec)) {
            throw new Exception('Jalankan Method distance Terlebih Dahulu');
        }

        return $this->brayexec;
    }

    public function getKullbackLeibler()
    {
        if (empty($this->kullbackexec)) {
            throw new Exception('Jalankan Method distance Terlebih Dahulu');
        }

        return $this->kullbackexec;
    }

    public function getJensenShannon()
    {
        if (empty($this->jensenexec)) {
            throw new Exception('Jalankan Method distance Terlebih Dahulu');
        }

        return $this->jensenexec;
    }
}
