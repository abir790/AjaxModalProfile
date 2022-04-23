    $(document).ready(function() {
      //alert("alert");
        function loadTasks() {
             // var $uslist = $('#uslist');
        $.ajax({
          url: "./registration/userlist.php",
          type: "POST",
          success: function(data) {
            $("#uslist").html(data);
            }     
        });
      }

      loadTasks();

      // Add User....................................................................................
      $("#addBtn").on("click", function(e) {
        e.preventDefault();

        var name = $("#name").val();
        var address = $("#address").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var conpass = $("#conpass").val();
        alert(name);

        $.ajax({
          url: "./registration/regi_action.php",
          type: "POST",
          data: {name: name,address: address,email: email,password: password,conpass: conpass},

          
          success: function(data) {
            loadTasks(); // its for auto load and current show on the list
            $("#name").val('');// thats for empty value of form input field
            $("#address").val('');
            $("#email").val('');
            $("#password").val('');
            $("#conpass").val('');
            //data=0;
            if (data == 0) {
              alert("Something wrong went. Please try again.");
            }
          }
        });
      });
      // Finish Add User Action .........................................................................
 
        // Delete User ..................................................................................
      $(document).on("click", "#deleleBtn", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        //var id = $("#deleleBtn").val(); // val use for input values but data use for existing data-id=$value['id']

        alert("are you sure");
        
         $.ajax({
          url: "./registration/delete.php",
          type: "POST",
          data: {id: id},
           success: function(data) {
            loadTasks();
            if (data == 0) {
              alert("Something wrong went. Please try again.");
            }
           }
         });
      });
      // Delete User Finish .............................................................................

     // Edit User.......................................................................................
      $(document).on("click", "#editBtn", function(e) {
        //loadTasks();
        e.preventDefault();
        var id = $(this).data('id');
        //alert(id);
        var name=$('#'+id).children('td[data-target=name]').text();
         var address=$('#'+id).children('td[data-target=address]').text();
          var email=$('#'+id).children('td[data-target=email]').text();
          var password=$('#'+id).children('td[data-target=password]').text();
          //console.log(password);

          $('#nameEdit').val(name);
          $('#addressEdit').val(address);
          $('#emailEdit').val(email); 
          $('#passwordEdit').val(password);
          $('#idEdit').val(id);
          $('#editstatic').modal('show');
          //$('#editstatic').modal('toggle');
      });
      // finish edit ...........................................................................


      // For Update..............................................................................
        $("#updateBtn").on("click", function(e) {
        e.preventDefault();

        
        var name = $("#nameEdit").val();
        var address = $("#addressEdit").val();
        var email = $("#emailEdit").val();
        var password = $("#passwordEdit").val();
        var id = $("#idEdit").val();
        //alert(id);

        $.ajax({
          url: "./registration/update.php",
          type: "POST",
          data: {name: name, address: address, email: email, password: password,id: id},

          
          success: function(data) {
            loadTasks(); 
            if(data == 0){
              alert("Something");
            }

          }
        });
      });


      // Finish Update...........................................................................

    }); //finishing bracket
