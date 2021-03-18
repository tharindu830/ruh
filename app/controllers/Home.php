<?php

 class Home extends Controller {
   public function __construct($controller, $action){
     parent::__construct($controller, $action);
   }

   public function indexAction(){

     $db = DB::getInstance();

     $contacts = $db->find('contacts', [
       'conditions' => ["fname = ?"],
       'bind' => ['tharindu'],
       'order' => "lname, fname",
       'limit' => 5
     ]);
     dnd($contacts);
     $this->view->render('home/index');
   }
 }
