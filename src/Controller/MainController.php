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
use Symfony\Component\Asset\Packages;


class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(Packages $assets): Response
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
                                        "content" => "Desktops are powerful, versatile computing devices designed to be used at a fixed location, typically on a desk. They consist of several components, including a central processing unit (CPU), monitor, keyboard, and mouse. Unlike laptops, desktops are not portable, but they offer several advantages in terms of performance, expandability, and customization.",
                                        "subcategories" => [
                                            [
                                                "id" => 14,
                                                "name" => "Lenovo Legion 9",
                                                "type" => "image",
                                                "imageUrl" => $assets->getUrl('images/LenovoLegion.jpg'),
                                                "subcategories" => []
                                            ]
                                        ]
                                    ]
                                ]
                            ],
                            [
                                "id" => 4,
                                "name" => "Desktops",
                                "type" => "text",
                                "content" => "Desktops are powerful, versatile computing devices designed to be used at a fixed location, typically on a desk. They consist of several components, including a central processing unit (CPU), monitor, keyboard, and mouse. Unlike laptops, desktops are not portable, but they offer several advantages in terms of performance, expandability, and customization.",
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
                                "imageUrl" => $assets->getUrl('images/iphone.jpeg'),
                                "subcategories" => []
                            ],
                            [
                                "id" => 12,
                                "name" => "Samsung",
                                "type" => "image",
                                "imageUrl" => $assets->getUrl('images/samsung.jpg'),
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
                        "content" => "A living room is a central space in a home, designed for relaxation, socializing, and various family activities. It's often the heart of the household, where people gather to watch television, read, entertain guests, or simply unwind after a long day. The design and layout of a living room can vary greatly depending on personal style, cultural influences, and functional needs.",
                        "subcategories" => []
                    ],
                    [
                        "id" => 8,
                        "name" => "Bedroom",
                        "type" => "text",
                        "content" => "A bedroom is a private sanctuary within a home, primarily designed for rest and sleep. It's a personal retreat where one can unwind, recharge, and enjoy a sense of peace and solitude. The design and functionality of a bedroom are essential for creating a comfortable and restful environment.",
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
