<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- For login page   -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
<!-- For Login Page -->

</head>
<body>
<?php session_start(); ?>
<?php if(isset($_SESSION['wrong'])){ ?>
  <div class="alert alert-primary" role="alert">
    <?php echo $_SESSION['wrong']; ?>
</div>
<?php } ?>
<?php unset($_SESSION['wrong']) ?>
  <section>
    <div class="header">
      <h1>WELCOME </h1>
      <p>This Project Using By AJAX for CRUD Operation</p>
      <p>And also useing HTML Modal form for Edit And Login Form</p>
    </div>
  </section>
<div class="container">
    <div class="gradient-custom-3">
      <div class="row clearfix">
        <div class="col-md-8">
          <h1 style="font-size: 30px; padding: 10px 0px 0px 10px;">USER LIST</h1>
          <div class="user-list">
            <ul id="uslist">


            </ul>
          </div>          
        </div>

        <div class="col-md-4">
          <div class="box" style="border-radius: 15px;">
              <h2 class="text-uppercase text-center mb-3"><span style="margin-top: 25px;">User Registration</span></h2>
                <form class="regi-form needs-validation">

                <div class="input-form needs-validation">
                  <input type="text"  id="name" class="form-control form-control-md" required/>
                  <label class="form-label" for="name">Your Name</label>
                </div>

                <div class="input-form">
                  <input type="text"  id="address" class="form-control form-control-md" required />
                  <label class="form-label" for="address">Your Address</label>
                </div>

                <div class="input-form">
                  <input type="email"   id="email" class="form-control form-control-md" required />
                  <label class="form-label" for="email">Your Email</label>
                </div>

                <div class="input-form">
                  <input type="password"  id="password" class="form-control form-control-md" required />
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="input-form">
                  <input type="password"  id="conpass" class="form-control form-control-md"  />
                  <label class="form-label" for="conpass">Repeat your password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" id="addBtn" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>
                <div class="d-flex justify-content-center" >
                <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" data-bs-toggle="modal" data-bs-target="#loginstaticBackdrop">User Logoin</button>
                </div>
              </form>
          </div>
        </div>
      </div>
  </div>

</div>


<!-- Pop-up modal start........................................................................ -->
<!-- Pop-UP Modal Edit..........................................................................-->

<div class="modal fade" id="editstatic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
                  <div class="box" style="border-radius: 15px;">
              <h2 class="text-uppercase text-center mb-3"><span style="margin-top: 25px;">Edit User</span></h2>

                <form class="edit-form needs-validation">

                <div class="input-form needs-validation">
                  <input type="text"  id="nameEdit" class="form-control form-control-md" />
                  <label class="form-label" for="nameE">Your Name</label>
                </div>

                <div class="input-form">
                  <input type="text"  id="addressEdit" class="form-control form-control-md" />
                  <label class="form-label" for="addressEdit">Your Address</label>
                </div>

                <div class="input-form">
                  <input type="email"  id="emailEdit" class="form-control form-control-md" />
                  <label class="form-label" for="emailEdit">Your Email</label>
                </div>

                <div class="input-form">
                  <input type="password"  id="passwordEdit" class="form-control form-control-md" />
                  <label class="form-label" for="passwordEdit">Password</label>
                </div>
                <input type="hidden" id="idEdit" class="form-control">

                <div class="d-flex justify-content-center">
                  <button type="submit" id="updateBtn" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" data-bs-dismiss="modal">Update</button>
                </div>
              </form>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Edit modal finish...................................................................................... -->

<!--Login modal start....................................................................................... -->
<!-- Pop Up Login Modal..................................................................................... -->

<div class="modal fade" id="loginstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
                  <div class="box" style="border-radius: 15px;">
              <h2 class="text-uppercase text-center mb-3"><span></span></h2>
                  </div>
                  <div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign In</h3>
        <div class="d-flex justify-content-end social_icon">
          <a href="https://github.com/abir790" target="_blank" class="github"><span><i class="fa-brands fa-github"></i></span></a>
          <a href="https://abirhasanapon.com/" target="_blank" class="globe"><span><span><i class="fas fa-globe"></i></span></a>
          <a href="https://www.facebook.com/ajoblove79/" target="_blank" class="facebook"><span><i class="fab fa-facebook-square"></i></span></a>
        </div>
      </div>
      <div class="card-body">
        <form action="login/login_action.php" method="POST">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="email" class="form-control" placeholder="email">   
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="text" name="password" class="form-control" placeholder="password">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn">
          </div>
          <div class="form-group">
            <a class="btn float-left login_btn" href="index.php">Registration_Here</a>
          </div>
        </form>
      </div>
          <div class="r">
            <h1 style="font-size:16px;">Email: abirhasaan79@gmail.com</h1>
            <button style="color:red;" id="pass" onclick="document.getElementById('pass').innerHTML='12345678' ";>
               Click here and get the password
            </button>
          </div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Login Mandal finish......................................................................... -->


    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/"></script>


    <!-- For Login Page -->
<script type="text/javascript">
  //getPass(){
  // next think about it 
  //}
</script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- For Login Page -->

<!-- Start Ajax jQuery Script ..................................................................... -->
<script type="text/javascript" src="js/ajax.js"></script>
  <script>
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
        //alert(name);

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

    </script>
</body>
</html>
