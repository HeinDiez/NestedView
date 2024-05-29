<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category-tree', name: 'category_tree')]
    public function index(): Response
    {
        $categories = [
            [
                "id" => 1,
                "name" => "Electronics",
                "subcategories" => [
                    [
                        "id" => 2,
                        "name" => "Computers",
                        "subcategories" => [
                            [
                                "id" => 3,
                                "name" => "Laptops",
                                "subcategories" => [
                                    [
                                        "id" => 9,
                                        "name" => "ASUS",
                                        "subcategories" => []
                                    ],
                                    [
                                        "id" => 10,
                                        "name" => "Lenovo",
                                        "subcategories" => []
                                    ]
                                ]
                            ],
                            [
                                "id" => 4,
                                "name" => "Desktops",
                                "subcategories" => []
                            ]
                        ]
                    ],
                    [
                        "id" => 5,
                        "name" => "Mobile Phones",
                        "subcategories" => [
                            [
                                "id" => 4,
                                "name" => "Apple",
                                "subcategories" => []
                            ],
                            [
                                "id" => 4,
                                "name" => "Samsung",
                                "subcategories" => []
                            ]
                        ]
                    ]
                ]
            ],
            [
                "id" => 6,
                "name" => "Furniture",
                "subcategories" => [
                    [
                        "id" => 7,
                        "name" => "Living Room",
                        "subcategories" => []
                    ],
                    [
                        "id" => 8,
                        "name" => "Bedroom",
                        "subcategories" => []
                    ]
                ]
            ]
        ];

        return $this->render('category/category.html.twig', [
            'categories' => $categories,
        ]);
    }
}