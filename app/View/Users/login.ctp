<div class="limiter">
    <div class="container-login100" style="background-image: url('../login/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" role="form" method="post">
					<span class="login100-form-title p-b-49">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
                    <span class="label-input100">
                        <?php
                            echo $this->Form->input('username')
                        ?>
                    </span>
                    <input class="input100" type="text" name="username" placeholder="Type your username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>

                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">
                        <?php
                        echo $this->Form->input('password')
                        ?>

                    </span>
                    <input class="input100" type="password" name="password" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="text-right p-t-8 p-b-31">
                    <a href="forgot_password">
                        Forgot password?
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn">

                        </div>
                        <button class="login100-form-btn">
                            <?php
                            echo $this->Form->submit(__('Login'));
                            echo $this->Form->end();
                            ?>

                        </button>

                    </div>
                </div>

                <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
                </div>

                <div class="flex-c-m">
                    <a href="facebook" class="login100-social-item bg1">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="twitter" class="login100-social-item bg2">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="google" class="login100-social-item bg3">
                        <i class="fa fa-google"></i>
                    </a>
                </div>

                <div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

                    <a href="register" class="txt2">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

