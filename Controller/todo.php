<?php
    include_once("../DB/config.php");
    include_once("../Model/todo.php");

     if(isset($_POST))
     {
         $data = [];
         $title = $_POST['title'];
         if(!empty($title))
         {
             print_r(tododb($conn, $title));exit;
             if(tododb($conn, $title))
             {
                 echo json_encode(['status'=>'success','message'=>'created successfully!']);
             }
             else{
                 echo json_encode(['status'=>'error','message'=>'Somthing went wrong!']);
             }
         }
     }
 
     else{
        echo json_encode(['status'=>'error','message'=>'wrong!']);
     }