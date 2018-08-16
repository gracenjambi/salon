<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta(array(
		        'icon',
                'favicon'
        ));

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');


//      ======= BOOTSTRAP CSS ASSETS =======
		echo $this->Html->css(array(
		    '/bootstrap/bootstrap.css',
            '/bootstrap/bootstrap-grid.css',
            '/bootstrap/bootstrap-reboot.css',
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

//		======= BOOTSRAP FONT ASSETS =======
		echo $this->Html->meta(array(
		        ''
        ));

    //		======= BOOTSTRAP JAVASCRIPT ASSETS =======
    echo $this->Html->script(array(
        '/js/bootstrap/bootstrap.bundle.js',
        '/js/bootstrap/bootstrap.js',
        '/login/js/main.js'

    ));

    ?>
</head>


<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'https://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>



		<div id="footer">
			<?php
            echo $this->Html->link(
                    $this->Html->image('cake.power.gif', array(
                            'alt' => $cakeDescription, 'border' => '0')),
					        'https://cakephp.org/',
					array(
					    'target' => '_blank',
                        'escape' => false,
                        'id' => 'cake-powered')
				);
			?>

		</div>
	</div>

    <?php
    echo $this->Html->script(array(
        '/login/vendor/jquery/jquery-3.2.1.min.js',
        '/login/vendor/animsition/js/animsition.min.js',
        '/login/vendor/bootstrap/js/popper.js',
        '/login/vendor/select2/select2.min.js',
        '/login/vendor/daterangepicker/moment.min.js',
        '/login/vendor/daterangepicker/daterangepicker.js',
        '/login/vendor/countdowntime/countdowntime.js',
        '/login/js/main.js'
    ));
    ?>

</body>
</html>
