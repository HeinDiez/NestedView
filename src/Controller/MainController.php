<?php

namespace App\Controller;

use App\Repository\PlanetRepository;
use App\Repository\VoyageRepository;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        $categories = [
            [
                "id" => 1,
                "name" => "Electronics",
                "type" => "folder",
                "subcategories" => [
                    [
                        "id" => 2,
                        "name" => "Computers",
                        "type" => "folder",
                        "subcategories" => [
                            [
                                "id" => 3,
                                "name" => "Laptops",
                                "type" => "folder",
                                "subcategories" => [
                                    [
                                        "id" => 9,
                                        "name" => "ASUS",
                                        "type" => "text",
                                        "subcategories" => []
                                    ],
                                    [
                                        "id" => 10,
                                        "name" => "Lenovo",
                                        "type" => "text",
                                        "subcategories" => []
                                    ]
                                ]
                            ],
                            [
                                "id" => 4,
                                "name" => "Desktops",
                                "type" => "text",
                                "subcategories" => []
                            ]
                        ]
                    ],
                    [
                        "id" => 5,
                        "name" => "Mobile Phones",
                        "type" => "folder",
                        "subcategories" => [
                            [
                                "id" => 11,
                                "name" => "Apple",
                                "type" => "image",
                                "imageUrl" => "images/planet-1.png",
                                "subcategories" => []
                            ],
                            [
                                "id" => 12,
                                "name" => "Samsung",
                                "type" => "image",
                                "imageUrl" => "images/planet-1.png",
                                "subcategories" => []
                            ]
                        ]
                    ]
                ]
            ],
            [
                "id" => 6,
                "name" => "Furniture",
                "type" => "folder",
                "subcategories" => [
                    [
                        "id" => 7,
                        "name" => "Living Room",
                        "type" => "text",
                        "subcategories" => []
                    ],
                    [
                        "id" => 8,
                        "name" => "Bedroom",
                        "type" => "text",
                        "subcategories" => []
                    ]
                ]
            ]
        ];


        return $this->render('main/homepage.html.twig', [
            'categories' => $categories,
        ]);
    }
}
