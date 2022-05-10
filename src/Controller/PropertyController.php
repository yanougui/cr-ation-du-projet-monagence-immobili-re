<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;


use App\Entity\Property;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Repository\PropertyRepository;
 

 
 


/**
 * Description of BienController
 *
 * @author camil
 */
class PropertyController extends AbstractController {
     /**
      * 
      * @var PropertyRepository
      */
    private $repository;
     




    public function __construct(PropertyRepository $repository ) {
        $this->repository = $repository;
         
    }


    /**
     * 
     * @param Environment $twig
     */
     
    function _construct(Environment $twig){
        $this->twig = $twig;
    }


    /**
     * @Route("/biens", name="property")
     * @return Response
     */
    public function index():Response {
        
       return $this->render("pages/property.html.twig",[
            'current_menu' =>'properties'
        ]);
        
    }
   
}
