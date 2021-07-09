 <div class="bg-light d-flex flex-column justify-content-center align-items-center" style="height:100vh">
   <div class="p-4">
     <div class="row justify-content-center align-items-center">
       <div class="col-md-5">
         <div class="login-form bg-dark text-light shadow-lg pb-4" style="border-radius: 1em;">
           <div class="img-fluid pb-3 text-center">
             <img src="<?= base_url('assets/images/logo.jpg'); ?>" alt="" class="p-0 m-0" style="border-radius: 1em 1em 0 0;width:100%;height:80px">
           </div>
           <!-- <div id="infoMessage"><?php echo $message; ?></div> -->
           <?php echo form_open("auth/login", "class='row g-3 px-4'"); ?>
           <div class="col-12">
             <label><?php echo lang('login_identity_label', 'identity'); ?></label>
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
           <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-warning text-dark btn-lg btn-block rounded-pill fw-bold"'); ?>
           <?php echo form_close(); ?>

           <hr class="mt-4">
           <div class="col-12">
             <!-- <p class="text-center mb-0">Have not account yet? <a href="#">Signup</a></p> -->
             <p class="text-center mb-0"><a href="forgot_password" class="text-warning"><?php echo lang('login_forgot_password'); ?></a></p>
           </div>
         </div>
       </div>
     </div>

   </div>
 </div>