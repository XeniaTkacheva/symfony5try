<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionsController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig', [
        
        ]);
    }
    
    /**
     * @Route("/questions/{slug}", name="app_question_show")
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