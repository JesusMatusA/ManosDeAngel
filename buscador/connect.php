<?php
    $connect = new mysqli("localhost", "root", "", "clinicamanosdeangel");

    if($connect){
        ?>
        <script>
            console.log("carnal si hay conexion");
        </script>
        <?php
    }
?>