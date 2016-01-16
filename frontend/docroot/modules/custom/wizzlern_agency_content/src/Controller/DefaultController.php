<?php

/**
 * @file
 * Contains Drupal\wizzlern_agency_content\Controller\DefaultController.
 */

namespace Drupal\wizzlern_agency_content\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\wizzlern_agency_content\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Controller callback: Dummy page.
   *
   * @return array
   *   Return an empty page.
   */
  public function dummyPage() {
    return [];
  }

}
