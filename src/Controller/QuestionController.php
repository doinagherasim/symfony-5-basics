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
    /**
     * @Route("/question/{$slug}")
     */
    public function question($slug) {
        return new Response(sprintf('question page "%s"!', $slug));
    }

    /**
     * @Route("/blog/{$slug}")
     */
    public function blog($slug) {
        return new Response(sprintf('blog page "%s"!',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}