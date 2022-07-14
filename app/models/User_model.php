<?php 

class User_model {
    private $nama = 'Bekti Prihanto';

    public function getUser()
    {
        return $this->nama;
    }
}