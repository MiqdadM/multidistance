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
        $euclidean = [];
        $manhatan = [];
        $cheby = [];
        $minkowski = [];
        $value1 = $this->vektor1;
        $value2 = $this->vektor2;
        $pow = 0;
        $abs = 0;
        $root = 0;
        for ($i = 0; $i < count($value1); ++$i) {
            $diff = $value1[$i] - $value2[$i];
            $pow += pow($diff, 2);
            $abs += abs($diff);
            $root += pow($diff, 3);
        }
        $euc = sqrt($pow);
        $man = $abs;
        $rootlambda = pow($root, 1 / 1 / 3);
        array_push($euclidean, $euc);
        array_push($manhatan, $abs);
        array_push($minkowski, $rootlambda);

        $this->setEculidean($euclidean);
        $this->setManhatan($manhatan);
        $this->setMinkowski($minkowski);
    }

    protected function setEculidean(array $euclidean)
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
}
