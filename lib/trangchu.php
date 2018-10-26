<?php

    function layNoiDung(){
        $conn = myConnect();
        $truyvan ="
            SELECT * FROM tin
            ORDER BY idTin ASC 
            LIMIT 0,1 ";
        return mysqli_query($conn, $truyvan);
        }
    

?>