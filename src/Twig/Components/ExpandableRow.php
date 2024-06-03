<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsLiveComponent]
class ExpandableRow
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public bool $expanded = false;

    #[LiveProp]
    public int $id;
    #[LiveProp]
    public array $message;

    private $messages;
    public function __construct()
    {
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

    public function replies(): array|bool
    {
        $replies = $this->getRepliesById($this->id, $this->messages);

        return $this->expanded ? $this->prepareMessages($replies) : false;
    }

    #[LiveAction]
    public function toggle (): void
    {
        $this->expanded = !$this->expanded;
    }

    private function prepareMessages(array $messages): array
    {
        $filteredMessages = [];
        foreach ($messages as $message) {
            $filteredMessages[] = $this->filterReplies($message);
        }
        return $filteredMessages;
    }

    private function getRepliesById(int $id, array $messages): array
    {
        foreach ($messages as $message) {
            if ($message['id'] === $id) {
                return $this->filterIDReplies($message['replies']);
            }

            $nestedReplies = $this->getRepliesById($id, $message['replies']);
            if (!empty($nestedReplies)) {
                return $nestedReplies;
            }
        }

        return [];
    }

    private function filterIDReplies(array $replies): array
    {
        $filteredReplies = [];
        foreach ($replies as $reply) {
            $filteredReply = $reply;
            $filteredReply['hasReply'] = !empty($filteredReply['replies']);
            $filteredReplies[] = $filteredReply;
        }
        return $filteredReplies;
    }

    private function filterReplies(array $message): array
    {
        $message['hasReply'] = !empty($message['replies']);
        unset($message['replies']);
        return $message;
    }
}
