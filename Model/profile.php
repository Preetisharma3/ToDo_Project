<?php
    include_once('../DB/config.php');

    function tododb($conn)
    {
        $stmt=$conn->prepare("SELECT * FROM tbl_todo order by id DESC");
        $stmt->execute();
        return $stmt->fetchall();
    }
?>