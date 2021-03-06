<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

  public function jumbotron() {
    return get_field('jumbotron');
  }

  public function rehab() {
    return get_field('rehab');
  }

  public function treatment() {
    return get_field('treatment');
  }

  public function about() {
    return get_field('about');
  }

  public function booking() {
    return get_field('booking');
  }

  public function fullwidth_image() {
    return get_field('fullwidth_image');
  }

  public function contact() {
    return get_field('contact');
  }

  public function book_button() {
    return get_field('book_button', 'option');
  }
}
