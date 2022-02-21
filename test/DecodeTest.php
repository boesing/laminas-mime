<?php

namespace LaminasTest\Mime;

use Laminas\Mail\Headers;
use Laminas\Mime\Decode;
use PHPUnit\Framework\TestCase;

class DecodeTest extends TestCase
{
    public function testDecodeMessageWithoutHeaders(): void
    {
        $text = 'This is a message body';

        $headers = new Headers();
        $body    = '';

        Decode::splitMessage($text, $headers, $body);

        self::assertInstanceOf(Headers::class, $headers);
        self::assertSame($text, $body);
    }
}
