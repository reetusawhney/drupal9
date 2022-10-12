<?php

namespace Drupal\custom_registration\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RegistrationRoute extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {

    if ($route = $collection->get("node.add")) {
      //$routeData = $route->getOptions();
      //print_r($routeData['parameters']['node_type']);

      //$route->setPath('/login');
      //$route->setRequirement('_access', 'TRUE');
    }
  }

}
