<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a username'
            )
        ),
        'firstname' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your first name'
            )
        ),
        'lastname' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your last name'
            )
        ),
        'emailaddress' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your email address'
            )
        ),
         'password' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a password'
            )
        ),
    );

    public function beforeSave($options = array()){
        if (!parent::eforeSave($options)) {
            return false;
        }
        if (isset($this->data[$this->alias]['password'])){
            $hasher = new SimplePasswordHasher();
            $this->data[$this->alias] ['password'] = $hasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

}