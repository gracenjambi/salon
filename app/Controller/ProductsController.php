<?php
App::uses('AppController', 'Controller');

class ProductsController extends AppController {
    public function index() {
        // Fetch products result set from database
        $products = $this->Product->find('all', array(
            'fields'=> array(
                'Product.id',
                'Product.title',
                'Product.description',
                'Product.price',
                'Product.created',
                'Product.status'
            ),
            'conditions' => array(
                'Product.status' => 1
            )
        ));

        // Set Products Data and pass to View
        $this->set('products', $products);
    }
}