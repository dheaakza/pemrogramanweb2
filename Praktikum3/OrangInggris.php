<?php

require_once 'Orang.php';

class OrangInggris extends Orang{

    //override
    public function ucapSalam()
{
   echo "Hello My Name Is " . $this->nama;
}

}