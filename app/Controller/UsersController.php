<?php
class UsersController extends AppController {
    public $components = array('Cookie');

    /**
     * paginate
     *
     * @var array
     */
    public $paginate = array(
        'paramType' => 'querystring',
        'maxLimit' => 10000

    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function register() {
        if ($this->request->is('post')){
            $this->User->create();
            if ($this->User->save($this->request->data)){
                $this->Session->setFlash(__('New user registered'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(__('Could not register user'));
        }
    }

    public function login(){
        if ($this->request->is('post')){
            if ($this->Auth->login()){
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Incorrect username or password'));
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    /*
 * User profile page
 */
//    public function profile(){
//        $this->viewBuilder()->layout('dashboard_layout');
//        if($this->Auth->user('id') > 0){
//            $userDetails = $this->Users->get($this->Auth->user('id'));
//            $currentPswd = $userDetails->password; //Used in change password to restrict user to add the same password again
//            $this->set(compact('userDetails','userDevices', 'currentPswd'));
//        }else{
//            return $this->redirect(['action' => 'welcome']);
//        }
//    }





}