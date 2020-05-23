<?php
namespace Drupal\interns;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\interns\DefaultService;


class InternsController extends ControllerBase implements ContainerInjectionInterface {
    public $services;

    public function test(){
        return [
            '#markup' => $this->services->orderCoffee(),
        ];

    }

/**
 * {@inheritdoc}
 */
public static function create(ContainerInterface $container) {
    return new static(
        $container->get('interns.default'));
    }

public function __construct(DefaultService $services){
    $this->services = $services;

    }
}