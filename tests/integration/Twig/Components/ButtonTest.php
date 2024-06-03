<?php

namespace App\Tests\Integration\Twig\Components;

use App\Twig\Components\Button;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\UX\TwigComponent\Test\InteractsWithTwigComponents;

class ButtonTest extends KernelTestCase
{
    use InteractsWithTwigComponents;

    public function testButtonRenders()
    {
        $component = $this->mountTwigComponent('Button');
        $this->assertInstanceOf(Button::class, $component);

        $rendered = $this->renderTwigComponent('Button', [], '<span>Click me!</span>');
        $this->assertSame('Click me!', $rendered->crawler()->filter('span')->text());
    }
}
