<?php

declare(strict_types=1);

namespace PiedWeb\TextSpinner\Test;

use PiedWeb\TextSpinner\Spinner;

class SpinnerTest extends \PHPUnit\Framework\TestCase
{
    public function testSpinner()
    {
        $text = 'my {{first|second|third}|{first|second|third}|{first|second|third}} text.';

        $spinText = Spinner::spin($text);
        var_dump($spinText);
        $this->assertTrue(in_array('my', explode(' ', $spinText)));
    }
}
