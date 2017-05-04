<?php

// src/Controller/CategoriesController.php
namespace App\Controller;
class CategoriesController extends AppController
{
    
    public function index()
{
$categories = $this->Categories->find('all');
$this->set(compact('categories'));
}
}
