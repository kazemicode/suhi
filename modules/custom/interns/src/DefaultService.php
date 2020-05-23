<?php

namespace Drupal\interns;
use Drupal\interns\DefaultServicesInterface;

/**
 * Class DefaultService.
 */
class DefaultService implements DefaultServiceInterface {
  private $coffee = ["black", "light roast", "blonde roast", "latte"];

  /**
   * Constructs a new DefaultService object.
   */
  public function __construct() {

  }

  public function orderCoffee(){

    return $this->coffee[array_rand($this->coffee)];
  }

}
