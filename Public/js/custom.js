
     $(document).ready(function () {
        $("#submit").click(function (event) {

           // alert(event);
           //console.log(event);
           
            event.preventDefault();
            var title = $("#add-todo").val();
           
            var data = {
                title: title,
                
            }
            $.ajax({
                url: "../Controller/todo.php ",
                data: data,
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    $("#close-modal").click();
                    $("#add-todo").val('');
                    $('ul > li:first').before("<li class='list-group-item'>"+title+"</li>");
                   
                }
            });
        });
    
        var html = "";
        function getData(){
            $.ajax({
                url:"../controller/profile.php",
                type:'get',
              dataType:'JSON',
             
              success: function(res){
                  
                  $.each(res,function(index,value){
                      html += "<li class='list-group-item'>"+ value.title + value.created_on +"</li>";
                      
                  });
                  $("#append-here").html(html)
               }
           });
        }
     getData();
    });