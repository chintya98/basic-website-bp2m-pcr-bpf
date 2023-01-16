<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?= base_url('auth'); ?>">
              <h1>Login Form</h1>
              <?= $this->session->flashdata('message'); ?>
              <div>
              <input type="text" class="form-control" value="<?= set_value('username'); ?>" id="username" name="username" placeholder="Masukkan Username">
			    <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
              </div>
              <div>
              <input type="password" class="form-control" id="password"
											name="password" value="<?= set_value('nama'); ?>" placeholder="Password">
											<?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
               
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
              

              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-pencil"></i> BP2M PCR</h1>
                  <p>©2022 BPF1</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>