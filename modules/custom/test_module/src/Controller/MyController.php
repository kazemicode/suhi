<?php
namespace Drupal\test_module\Controller;
use Drupal\Core\Controller\ControllerBase;

class MyController extends ControllerBase {
    public function test(){
        return [
            '#markup' => 'hello world!',
        ];
    } 
}
