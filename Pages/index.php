<?php
  
  include_once('./header.php'); 
  include_once('../DB/config.php');
  include_once("../Model/profile.php");

?>


<div class="container">
  <div class="row mt-5">
    <div class="col-md-10 text-right"><button class="btn btn-primary" data-toggle="modal" data-target="#add-todo-modal">Add Todo</button></div>
  </div>
  <div class="row justify-content-center mt-3">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Todo List
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush" id="append-here">
            <!-- <li class="list-group-item">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, hic.

              <span class="float-right">
                <select name="" id="">
                  <option value="pending">Pending</option>
                  <option value="default">Default</option>
                </select>
              </span>
              <p class="text-left  text-muted">10:55 PM</p>
            </li> -->
            
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->



<?php include_once('./footer.php'); ?>