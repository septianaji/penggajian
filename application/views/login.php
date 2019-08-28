
<div class ="container text-center">
      <div class="row layout-center">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <div id="wrapper">

    				            <div id="wrappertop"></div>
    			<div id="wrappermiddle"><!-- id wrappermiddle -->
    					     <span><h2>Login System</h2></span>
    				 <form class="form-signin" action="<?php echo base_url('/login/proses_login'); ?>" method="post">

    						<div id="username_input">
    							<input name="username" type="text" class="form-control animate0 bounceIn" id="url" placeholder="Username" required autofocus />
    						</div>

    						<div id="password_input">
    							<input name="password" type="password" class="form-control animate1 bounceIn" id="url" placeholder="Password" required />
    						</div>

                <?php if ($this->session->flashdata('status') == 'failed'): ?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span>Username atau password salah!!</span>
                  </div>
                <?php endif; ?>


    						<div id="submit">
    							<button class="btn btn-primary button_blue animate2 bounceIn" id="url_btn" type="submit">Log In</button>
    						</div>

    					</form>

    		</div><!-- end id wrappermiddle -->
    				  <div id="wrapperbottom"></div>
          </div>
        </div>
    </div>
</div>
