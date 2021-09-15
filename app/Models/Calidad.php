<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    use HasFactory;

    public static function estadistica($nums){
        $sum=0;
        for($i=0;$i<count($nums);$i++){
            $sum+=$nums[$i];
        }
        $media = $sum/count($nums);
        $sum2=0;
        for($i=0;$i<count($nums);$i++){
            $sum2+=($nums[$i]-$media)*($nums[$i]-$media);
        }
        $vari = $sum2/count($nums);
        $sq = sqrt($vari);
        $coef = ($sq/$media)*100;
        //echo "La varianza es: $vari <br>";
        //echo "La desviacion estandar es: ".$sq;

        return array(round($media,3), round($sq,3), round($coef,3));
    }
}
