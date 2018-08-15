<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
        'DebugKit.Toolbar',
        'Acl' => array('habtm' => array(
            'userModel' => 'Users.User',
            'groupAlias' => 'Group'
        )),
        'Auth' => array(
            //your Auth settings
        ),
        'Cookie'
    );

    public $helpers = array(
        'Html',
        'Form',
        'Session',
        'Number',
        'Text'
    );


    public function login(){
        if ($this->request->is('post')){
            $user = $this->Auth->identify();
            if ($user){
                $this->Auth-setUsser($user);
                $this->_setCookie();
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    protected function _setCookie(){
        if (!$this->request->data('remember me')){
            return false;
        }
        $data = [
            'username' => $this->request->data('username'),
            'password' => $this->request->data('password')
        ];
        $this->Cookie->write('RememberMe', $data, true, '+1 week');
        return true;
    }



}
