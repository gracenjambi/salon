<!--<div class=""limiter>-->
<!--    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">-->
<!--        <div class="wrap-login100 p-1-55 p-r-55 p-t-65 p-b-54">-->
<!--            --><?php
//            echo $this->Form->create('User', array(
//
//            ));
//            echo $this->Form->input('User.username');
//            echo $this->Form->input('User.password');
////            echo $this->Html->link('forgot_password');
//            echo $this->Form->end('Login');
//
//            ?>
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->

<head>
    <?php
        echo $this->Html->css(array(
                '/login/css/main.css',
                '/login/css/util.css',
                '/login/fonts/font-awesome/css/font-awesome.css',
                '/login/fonts/font-awesome/css/font-awesome.min.css',
                '/login/fonts/iconic/css/material-design-iconic-font.min.css',
                '/login/vendor/animate/animate.css',
                '/login/vendor/css-hamburgers/hamburgers.min.css',
                '/login/vendor/animsition/css/animsition.min.css',
                '/login/vendor/select2/select2.min.css',
                '/login/vendor/daterangepicker/daterangepicker.css'
        ));

        echo $this->Html->script(array(
                '/login/js/main.js',
                '/login/'
        ));

        echo $this->Html->image(array(
                "/login/images/bg-01.jpg",
                '/login/images/icons/favicon.ico'
                ));

    ?>
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('/login/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" placeholder="Type your username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="pass" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="text-right p-t-8 p-b-31">
                    <a href="#">
                        Forgot password?
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>

                <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
                </div>

                <div class="flex-c-m">
                    <a href="#" class="login100-social-item bg1">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="login100-social-item bg2">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="login100-social-item bg3">
                        <i class="fa fa-google"></i>
                    </a>
                </div>

                <div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

                    <a href="#" class="txt2">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<?php
    echo $this->Html->script(array(
         '/login/vendor/jquery/jquery-3.2.1.min.js',
        '/login/vendor/animsition/js/animsition.min.js',
        '/login/vendor/bootstrap/js/popper.js',
        '/login/vendor/bootsrap/js/bootstrap.min.js',
        '/login/vendor/select2/select2.min.js',
        '/login/vendor/daterangepicker/moment.min.js',
        '/login/vendor/daterangepicker/daterangepicker.js',
        '/login/vendor/countdowntime/countdowntime.js',
        '/login/js/main.js'
    ));
?>

</body>
</html>