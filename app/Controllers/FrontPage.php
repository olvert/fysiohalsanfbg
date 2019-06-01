<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

  public function jumbotron() {
    return get_field('jumbotron');
  }
}
