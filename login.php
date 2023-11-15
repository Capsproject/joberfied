<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Login</h4>
                </div>

                <!-- <form action="process.php?action=login" enctype="multipart/form-data" method="post"> -->
                  <div class="modal-body hold-transition login-page">
                    <div id="loginerrormessage"></div>
                    <div class="login-box"> 
                        <div class="login-box-body" style="border: solid 1px #ddd;padding: 35px;min-height: 350px;"> 
                 <!--logo image for login-->
                        <img src="plugins/home-plugins/img/joberfiedlogo.png" alt="showcase image" style="height:100px; width:100px;  display: block; margin-left: auto; margin-right: auto; margin-bottom: 40px;">
                        
                          <form action="" method="post">
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Username" name="user_email" id="user_email">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="form-group has-feedback">
                              <input type="password" class="form-control" placeholder="Password" name="user_pass" id="user_pass">
                              <span class="far fa-eye form-control-feedback" id="togglePassword" style="margin-top: -22px;"></span>
                            </div>
                           
                          </form> 
                                                 
                          <a href="<?php echo web_root; ?>index.php?q=register" class="text-center">Create new account</a>

                        </div>
                        <!-- /.login-box-body -->
                      </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button> <button class="btn btn-primary"
                    name="btnlogin" id="btnlogin"  >Login</button>
                  </div>
                <!-- </form> -->
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

          <script>
          const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#user_pass');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
    
});</script>