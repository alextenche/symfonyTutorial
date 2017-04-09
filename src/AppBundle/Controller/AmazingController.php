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
    public function showAction($amazingName)
    {
        $notes = [
            "This is a text, this is a text",
            "Note test",
            "Another note test"
        ];

        return $this->render('amazing/show.html.twig', [
            'name' => $amazingName,
            'notes' => $notes
        ]);
    }

}