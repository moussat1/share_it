<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;

class HomeController extends AbstractController
{
    public function homepage(ResponseInterface $response)
    {
        return $this->template($response, 'home.html.twig');
    }

    public function telechargement(ResponseInterface $response,int $id) 
    {
        
    }
}
