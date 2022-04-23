<!--       function loadTasks() {
             // var $uslist = $('#uslist');
        $.ajax({
          url: "userlist.php",
          type: "POST",
          success: function(data) {
            // $("#uslist").html(data);
            // or 
            $.each(data, function(key, value){
              $("#uslist").append(`  <div class="licontainer">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
   <?php foreach ($result as $value) { ?>
  <tbody>
    <tr>

      <td><?php echo $value['name'] ?></td>
      <td><?php echo $value['address'] ?></td>
      <td><?php echo $value['email'] ?></td>
      <td><?php echo $value['password'] ?></td>
      <td>
        <i class="fa fa-trash" id="deleleBtn" data-id="<?php echo $value['id']; ?>"></i>
        <i class="fas fa-edit" id="editBtn" data-id="<?php echo $value['id']; ?>" data-bs-toggle="modal" data-bs-target="#editstatic"></i>
      </td>

    </tr>
  </tbody>
<?php } ?>
</table>

    
  </div>`

                );

            });
            
          }
        });
      }

      /////////////////////////////////////////
      ///////////////////////////////////////////
           // Edit User
      $(document).on("click", "#editBtn", function(e) {
        //loadTasks();
        e.preventDefault();
        var id = $(this).data('id');
        alert(id);

         $.ajax({
          url: "edit.php", // action
          type: "POST", // method
          data: {
            'checking_view': true,
            'id': id,
             },
          //data: {id: id}, // value or id pass
           success: function(response) { // this data bring the results array
            //loadTasks();
            //alert(data); 
            console.log(response);           

            $.each(response, function(key, value){ ///  $.each function not working////
              ///console.log(value['name']);
                        $("#nam").val(value['name']);
                        $("#addr").val(value['address']);
                        $("#ema").val(value['email']);
                        $("#pass").val(value['password']);

            });

          $('#editstatic').modal('show');

           }
         });
         

      }); -->