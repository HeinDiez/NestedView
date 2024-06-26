<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\UX\Turbo\TurboBundle;

#[Route('/')]
class RedditController extends AbstractController
{
    private $messages;
    private $post;

    public function __construct()
    {
        $this->post = [
            "subreddit" => 'tailwindcss',
            "name" => 'Hein diez',
            "date" => "1y ago",
            "numberOfReplies" => 342,
            "upvote" => '4.3k',
            "title" => "What is your approach using Tailwind when building a UI from a Figma design",
            "body" => "I have made some projects using Tailwind and I love it,
                but I'm having a hard time when I try using Tailwind to build a UI based on a Figma file
                most of the time the UI/UX guy designs the UI with random spacing values
                like: 13px, 27px, etc.. and random font colors which do not have a corresponding class name in Tailwind
                I'm forced to use CSS or SCSS with these designs but is there a way to overcome these issues in Tailwind? or is it better to stick to CSS/SCSS with such designs?"
        ];
        $this->messages = [
            [
                "id" => 1,
                "name" => "apex1911",
                "date" => "1y ago",
                "message" => "All of tailwindcss‘ sizes and colors are available in figma via plugins. I think the easiest way would be to tell your ui/ux guy to use them",
                "op" => false,
                "likes" => 23,
                "replies" => [
                    [
                        "id" => 3,
                        "name" => "nricu",
                        "date" => "1y ago",
                        "message" => "That's exactly what I'm doing.",
                        "op" => true,
                        "likes" => 254,
                        "replies" => [
                            [
                                "id" => 4,
                                "name" => "User1231541",
                                "date" => "10mo ago",
                                "message" => "Hey.. which plugin is this exactly? Does it enforce the designer to use tailwind specific spacing?",
                                "op" => false,
                                "likes" => 6,
                                "replies" => [
                                    [
                                        "id" => 9,
                                        "name" => "darkshifty",
                                        "date" => "1y ago",
                                        "message" => "We've discussed this with our ui/ux team to keep standard 5px iterations on spacing and we've extended our theme with the possibilities which works quite well.",
                                        "op" => false,
                                        "likes" => 6,
                                        "replies" => []
                                    ],
                                    [
                                        "id" => 10,
                                        "name" => "darkshifty",
                                        "date" => "1y ago",
                                        "message" => "We've discussed this with our ui/ux team to keep standard 5px iterations on spacing and we've extended our theme with the possibilities which works quite well.",
                                        "op" => false,
                                        "likes" => 6,
                                        "replies" => [
                                            [
                                                "id" => 11,
                                                "name" => "darkshifty",
                                                "date" => "1y ago",
                                                "message" => "We've discussed this with our ui/ux team to keep standard 5px iterations on spacing and we've extended our theme with the possibilities which works quite well.",
                                                "op" => false,
                                                "likes" => 6,
                                                "replies" => []
                                            ],
                                            [
                                                "id" => 12,
                                                "name" => "darkshifty",
                                                "date" => "1y ago",
                                                "message" => "We've discussed this with our ui/ux team to keep standard 5px iterations on spacing and we've extended our theme with the possibilities which works quite well.",
                                                "op" => false,
                                                "likes" => 6,
                                                "replies" => []
                                            ],
                                        ]
                                    ],
                                    [
                                        "id" => 13,
                                        "name" => "darkshifty",
                                        "date" => "1y ago",
                                        "message" => "We've discussed this with our ui/ux team to keep standard 5px iterations on spacing and we've extended our theme with the possibilities which works quite well.",
                                        "op" => false,
                                        "likes" => 6,
                                        "replies" => []
                                    ],
                                ]
                            ]
                        ]
                    ],
                    [
                        "id" => 7,
                        "name" => "darkshifty",
                        "date" => "1y ago",
                        "message" => "We've discussed this with our ui/ux team to keep standard 5px iterations on spacing and we've extended our theme with the possibilities which works quite well.",
                        "op" => false,
                        "likes" => 6,
                        "replies" => []
                    ],
                    [
                        "id" => 8,
                        "name" => "User1231541",
                        "date" => "6 minutes",
                        "message" => "Ha! really nice of you to share this.",
                        "op" => false,
                        "likes" => 6,
                        "replies" => []
                    ]
                ]
            ],
            [
                "id" => 2,
                "name" => "AlanKesselmann",
                "date" => "1y ago",
                "message" => "that's not the problem of figma or tailwind. your UI guy needs to start using design systems and use same values everywhere so you can configure your tailwind according to them or use tailwind plugins in fugma",
                "op" => false,
                "likes" => 65,
                "replies" => [
                    [
                        "id" => 5,
                        "name" => "darkshifty",
                        "date" => "1y ago",
                        "message" => "We've discussed this with our ui/ux team to keep standard 5px iterations on spacing and we've extended our theme with the possibilities which works quite well.",
                        "op" => false,
                        "likes" => 6,
                        "replies" => []
                    ]
                ]
            ],
            [
                "id" => 6,
                "name" => "User1231541",
                "date" => "6 minutes",
                "message" => "Ha! really nice of you to share this.",
                "op" => false,
                "likes" => 6,
                "replies" => []
            ],
            [
                "id" => 14,
                "name" => "User1231541",
                "date" => "6 minutes",
                "message" => "Ha! really nice of you to share this.",
                "op" => false,
                "likes" => 6,
                "replies" => []
            ]
        ];
    }
    #[Route('/', name: 'reddit_index')]
    public function homepage(): Response
    {
        return $this->render('reddit/index.html.twig', [
            'post' => $this->post,
            'messages' => $this->prepareMessages($this->messages),
        ]);
    }

    private function prepareMessages(array $messages): array
    {
        $filteredMessages = [];
        foreach ($messages as $message) {
            $filteredMessages[] = $this->filterReplies($message);
        }
        return $filteredMessages;
    }

    private function filterReplies(array $message): array
    {
        $message['hasReply'] = !empty($message['replies']);
        unset($message['replies']);
        return $message;
    }
}
