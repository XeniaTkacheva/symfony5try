<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionsController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }
    
    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'dddd',
            'Make sure your cat sleep... 😃',
            'Honestly... '
        ];
        
        return $this->render('question/show.html.twig', [
        'question' => ucwords(str_replace("-", " ", $slug)),
            'answers' => $answers
        ]);
    }
}