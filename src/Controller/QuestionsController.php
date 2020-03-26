<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class QuestionsController
{
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }
}