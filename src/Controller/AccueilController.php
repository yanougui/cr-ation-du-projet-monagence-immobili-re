<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

  

/**
 * Description of AccueilController
 *
 * @author camil
 */
class AccueilController extends AbstractController {
    /**
     * 
     * @param Environment $twig
     */
    private $twig;
    public function __construct(Environment $twig) {
        $this->twig = $twig;
    }
    /**
     * @Route("/",name="accueil")
     * @return Response
     */
    public function index( ):Response{
          
         
        return $this->render("pages/accueil.html.twig" 
             
         );
    }

}
