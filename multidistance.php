<?php

/**
 *
 */
class multidistance
{
    protected $vektor1;

    protected $vektor2;

    protected $euclidexec;

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
        $value1 = $this->vektor1;
        $value2 = $this->vektor2;
        $pow = 0;
        for ($i=0; $i < count($value1) ; $i++) {
            $diff = $value1[$i] - $value2[$i];
            $pow += pow($diff, 2);
        }
        $euc= $this->hitungEuclidean($pow);
        array_push($euclidean, $euc);

        $this->euclidexec = $euclidean;
    }

    protected function hitungEuclidean($nilai)
    {
        return sqrt($nilai);
    }

    public function getEuclidean()
    {
        if (empty($this->euclidexec)) {
            throw new Exception('Clustered data have not been hydrated yet - run cluster method first');
        }
        return $this->euclidexec;
    }
}
