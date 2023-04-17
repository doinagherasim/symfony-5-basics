<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
public function homepage() {
    return new Response('New Symfony project');
}
    /**
     * @Route("/questions/show-page")
     */
    public function show() {
        return new Response('Show new page');
    }
}