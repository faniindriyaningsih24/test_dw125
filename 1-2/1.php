<?php
    function handshake($jumlah){
        $sumhandshake=0;
        $jumlah=$jumlah-1;
        for($i=1;$i<=$jumlah;$i++)
        {
            for($i2=0;$i2<=($jumlah-$i);$i2++){
                $sumhandshake++;
            }
        }
        return $sumhandshake;
    }
    echo "Soal Nomor 1 <br>";
    echo "handshake(3) =". handshake(3);
    echo "<br>handshake(6) =". handshake(6);

?>
