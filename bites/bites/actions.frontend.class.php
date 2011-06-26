<?php

namespace bites\frontend;

class Actions extends \ActionBase {

  public function index($var_array = array()) {
    $form = $this->render->form('contact');
    if(isset($_POST['submit']) && $form->validate()){
      
    }
    $this->form = $form->render();      
  }

  // 404 function
  public function oopsCannotFindPage($var_array = array()) {

  }

}
