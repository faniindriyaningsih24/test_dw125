<?php
function generateserial($jumlah){
    $char = "1234567890abcdefghijklmnopqrstuvwxyz";
    $code ="";
    for($i=1;$i<=$jumlah;$i++)
    {
        for($i2=0;$i2<=4;$i2++){
            $code.= substr(str_shuffle($char),0,4);
            if($i2!=4){
                $code.="-";
            }
        }
        $code.="<br>";
    }
    $key= $code;
    return $key;
}
echo "<br><br>soal nomor 2<br>";
echo generateserial(3);
?>