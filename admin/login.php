<?php include('../1connection.php'); ?>
<?php 
if(isset($_SESSION['seller']))
{
//unset($_SESSION['cid']);
unset($_SESSION['seller']);
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->
<?php include('addson/1head.php'); ?>

<body class="layout-4 bg-dark" style="">

<div id="app">
    <section class="section" >
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="https://t3.ftcdn.net/jpg/02/16/42/22/360_F_216422244_E5Dci50kkesrmrysk4kttonvRDaRxLt1.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary" style="border: 1px solid;">
                        <div class="card-header">
                            <h4>Admin Login</h4>
                        </div>
                         <span id="error"></span>
                        <div class="card-body">
                           <form id="myFormss" action="" method="post" >
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input  type="text" class="form-control" id="username" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                            Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control"  name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="button" onclick = "insert();" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="register.php">Create One</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy;  2021
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
                                <script type="text/javascript">
                                    // Prevent form from submit or refresh
                                    var error = document.getElementById("error")
                                     var error2 = document.getElementById("error2")
                                    var form = document.getElementById("myFormss");
                                    function handleForm(event) { event.preventDefault(); }
                                    form.addEventListener('submit', handleForm);
                                    // Function
                                    function insert(){
                                      $(document).ready(function(){

                                        // Make an array of languages to insert multiple checkbox values of languages
                                        // var languages = [];
                                        // $("input[name=languages]").each(function(){
                                        //   if($(this).is(":checked")){
                                        //     languages.push($(this).val());
                                        //   }
                                        // });

                                        $.ajax({
                                          // Action
                                          url: '2login.php',
                                          // Method
                                          type: 'POST',
                                          data: {
                                            // Get value
                                            username: $("input[name=username]").val(),
                                            password: $("input[name=password]").val(),
                                            action: "insert"
                                          },
                                          success:function(response){
                                            // Response is the output of action file
                                            if(response == 1){
                                             error.innerHTML = "<div class='alert alert-success alert-has-icon'><div class='alert-icon'><i class='fa fa-check'></i></div><div class='alert-body'><button class='close' data-dismiss='alert'><span>&times;</span></button><div class='alert-title'>Success</div>Successfully Login! Please Wait a moment!!</div> </div>"
                                              setTimeout(function(){ //function will be executed after 10 seconds       
                                               window.location.href = 'index.php';
                                              }, 2*1000);
                                            }
                                            else if(response == 2){
                                                   error.innerHTML = "<div class='alert alert-danger alert-has-icon'><div class='alert-icon'><i class='fa fa-cross'></i></div><div class='alert-body'><button class='close' data-dismiss='alert'><span>&times;</span></button><div class='alert-title'>Danger</div>Wrong Username or Password! Try Again!</div> </div>"
                                              setTimeout(function(){ //function will be executed after 10 seconds       
                                               error.innerHTML = "" //will show the button
                                                document.getElementById('username').value = ''
                                                 document.getElementById('password').value = ''
                                              }, 2*1000);
                                            }
                                             else if(response == 3){
                                                  error2.textContent = "Username and Password Field is Empty!"
                                                  error2.style.color = "red"
                                            }
                                            else{
                                              
                                            }
                                          }
                                        });
                                      });
                                    }

                                </script>
<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->
</html>