<?php
// src/Controller/MSLController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MSLController extends Controller
{
    /**
	* @Route("/{page}")
    */


    public function index($page = 'home')
    {
        $number = mt_rand(0, 100);

       //return new Response(
        //    '<html><body>Lucky number: '.$number.'</body></html>'
        //);

       return $this->render('msl.html.twig');
    }


    
}