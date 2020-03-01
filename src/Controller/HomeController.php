<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController {

    /**
     * Montre la page qui m'intéressent
     * 
     * @Route("/bonjour/{prenom}/age/{age}", name="hello")
     * @Route("/bonjour", name="hello_base")
     * @Route("bonjour/{prenom}", name="hello_prenom")
     */
    public function hello($prenom = "anonyme", $age = 0){
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }
    /**
     * @Route("/" ,name="homepage") 
     */

    public function home() {

        $prenoms = ['Lior' => 31, 'Joseph' => 25, 'Anne' => 17];
         return $this->render( 
            'home.html.twig',
            [
                'title' => "Bonjour à tous !",
                'age' => 18,
                'tableau' => $prenoms

            ]
        );
    }
}

?>