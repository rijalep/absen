<?php

if(!function_exists('bulan')){
    function bulan($bln){
        switch ($bln){
            case 1:
                return "JANUARI";
                break;
            case 2:
                return "FEBRUARI";
                break;
            case 3:
                return "MARET";
                break;
            case 4:
                return "APRIL";
                break;
            case 5:
                return "MEI";
                break;
            case 6:
                return "JUNI";
                break;
            case 7:
                return "JULI";
                break;
            case 8:
                return "AGUSTUS";
                break;
            case 9:
                return "SEPTEMBER";
                break;
            case 10:
                return "OKTOBER";
                break;
            case 11:
                return "NOVEMBER";
                break;
            case 12:
                return "DESEMBER";
                break;
        }
    }
}

if(!function_exists('tgl_indo')){
    function date_indo($tgl){
        $ubah    = gmdate($tgl, time()+60*60*8);
        $pecah   = explode("-",$ubah); 
        $tanggal = $pecah[2];
        $bulan   = bulan($pecah[1]);
        $tahun   = $pecah[0];
        return $tanggal.' '.$bulan.' '.$tahun;
    }
}
