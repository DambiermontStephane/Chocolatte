<?php

use Couchbase\View;

class HomeController extends BaseController
{
    public function show()
    {
        return $this->view('home', [
            'title' => 'Chocolatte',
            'pre_title' => 'Bienvenue chez',
            'under_title' => 'Du bon café',
            'employees' => Employee::getHomepageEmployees(),
            'reviews' => Review::getHomepageReview()
        ]);
    }
}
