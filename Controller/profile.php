<?php
    include_once("../DB/config.php");
    include_once("../Model/profile.php");

        tododb($conn);
        echo json_encode(tododb($conn));

?>