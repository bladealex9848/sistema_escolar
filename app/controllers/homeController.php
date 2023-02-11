<?php

class homeController extends Controller
{
  function __construct()
  {
  }

  function index()
  {
    $data =
      [
        'title' => 'Home',
        'slug' => 'home'
      ];

    View::render('index', $data);
  }
}
