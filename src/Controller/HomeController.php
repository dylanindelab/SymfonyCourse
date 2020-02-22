<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController {
    /**
     * @Route("/" ,name="home") 
     */

     public function home() {

        $prenoms = ['Lior' => 31, 'Joseph' => 25, 'Anne' => 17];
         return $this->render( 
            'home.html.twig',
            [
                'title' => "Bonjour à tous",
                'age' => 18,
                'tableau' => $prenoms

            ]
         );
     }
}

?>