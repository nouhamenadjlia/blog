<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index(): Response
    {
        $post_list =[
            [
                "title" => "post 1",
                "image" => "https://via.placeholder.com/360"

            ],
            [
                "title" => "post 2",
                "image" => "https://via.placeholder.com/360"

            ],
            [
                "title" => "post 3",
                "image" => "https://via.placeholder.com/360"

            ],
            [
                "title" => "post 4",
                "image" => "https://via.placeholder.com/360"

            ]
            ];
            
        return $this->render('app/index.html.twig', [
            "post_list" => $post_list
        ]);
    }
    /**
     * @Route("/post", name="post")
     */
    public function show(){
        $post = [
            "title" => "post 1",
            "image" => "https://via.placeholder.com/360"

        ];
        return $this->render('app/show.html.twig', [
            "post"=> $post
        ]);
    }
}
