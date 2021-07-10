 <div class="bg-light d-flex flex-column justify-content-center align-items-center" style="height:100vh">
   <div class="p-4">
     <div class="row justify-content-center align-items-center">
       <div class="col-md-5">
         <div class="login-form bg-dark text-light shadow-lg pb-4" style="border-radius: 1em;">
           <div class="img-fluid pb-3 pt-3 text-center">
             <img class="w-75" src="<?= base_url('assets/images/conf/logo-sl.png'); ?>" alt="" class="p-0 m-0" style="border-radius: 1em 1em 0 0;width:;">
           </div>
           <div id="infoMessage" class="text-center text-danger"><?php echo $message; ?></div>
           <?php echo form_open("auth/login", "id='form-login' class='row g-3 px-4'"); ?>
           <div class="col-12">
             <label>Username</label>
             <div class="input-group input-group-lg rounded-pill">
               <span class="input-group-text bg-warning border-0" id="inputGroup-sizing-lg"><i class="mdi mdi-account text-dark"></i></span>
               <?php echo form_input($identity, '', 'class="form-control form-control-lg" placeholder="Username"'); ?>
             </div>
           </div>
           <div class="col-12">
             <label> <?php echo lang('login_password_label', 'password'); ?></label>
             <div class="input-group input-group-lg rounded-pill">
               <span class="input-group-text bg-warning border-0" id="inputGroup-sizing-lg"><i class="mdi mdi-key text-dark"></i></span>
               <?php echo form_input($password, '', 'class="form-control form-control-lg" placeholder="Password"'); ?>
             </div>
           </div>
           <div class="col-12">
             <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"', 'class="form-check-input"'); ?>
             <label class="form-check-label" for="rememberMe"> <?php echo lang('login_remember_label', 'remember'); ?></label>
           </div>
           <div class="col-md-12 d-grid gap-2">
             <?php echo form_submit('submit', lang('login_submit_btn'), 'id="lo-gin" class="btn btn-warning text-dark btn-lg rounded-3 fw-bold"'); ?>
           </div>

           <?php echo form_close(); ?>

           <!-- <button id="test-notif" class="btn btn-default">Notif</button> -->
           <!-- <hr class="mt-4"> -->
           <div class="col-12 mt-2">
             <!-- <p class="text-center mb-0">Have not account yet? <a href="#">Signup</a></p> -->
             <!-- <p class="text-center mb-0"><a href="forgot_password" class="text-warning"><?php echo lang('login_forgot_password'); ?></a></p> -->
           </div>
         </div>
       </div>
     </div>

   </div>
 </div>

 <script>
   $(document).ready(function() {

     if ('<?= $message; ?>') {
       Lobibox.notify('default', {
         size: 'mini',
         rounded: true,
         position: 'center top', //or 'center bottom'
         msg: '<?= $message; ?>'
       });
     }


   })
 </script>