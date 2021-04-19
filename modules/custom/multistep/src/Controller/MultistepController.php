
<?php

namespace Drupal\multistep\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * A controller that redirects to Form Closed page.
 */
class MultistepController extends ControllerBase {

  /**
   * Redirect to
   */
  public function redirectTo() {
    global $base_url;

    $path = '/courses/closed';

    $response = new RedirectResponse($base_url . $path);
    $response->send();
  }

}
