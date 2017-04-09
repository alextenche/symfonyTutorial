<?php


namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AmazingController extends Controller
{
    /**
     * @Route("/amazing/{amazingName}")
     */
    public function showAction($amazingName){
        $templating = $this->container->get("templating");
        $html = $templating->render('amazing/show.html.twig', [
            'name' => $amazingName
        ]);

        return new Response($html);
    }

}