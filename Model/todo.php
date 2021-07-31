<?php
include_once('../DB/config.php');


function tododb($conn, $title){
    $stmt = $conn->prepare(
        "insert into tbl_todo(title)values(:title)"
    );
    $result = $stmt->execute([

        ':title' => $title,
    ]);
    if( $result ){
        $id = $conn->lastInsertId();
        getlastInsertedRow($conn, $id);
        exit;
    }
    return false;
}
function getlastInsertedRow($conn, $id){
    $stmt = $conn->prepare("SELECT * FROM tbl_todo WHERE id=:id");
    $stmt->execute([
        ':id'=>$id
    ]);
    $response = $stmt->fetch();
    echo json_encode($response);
}



?>