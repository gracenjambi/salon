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

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        echo $id = $this->Auth->user('id');
    }

}