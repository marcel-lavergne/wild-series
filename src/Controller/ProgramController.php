<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProgramController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @Route("/programs/show/{id}",requirements={"id"="\d+"},methods={"GET"}, name="program_serie")
     */
    public function show($id)
    {
        return $this->render('program/serie.html.twig',[
            'id' => $id
        ]);
    }
}