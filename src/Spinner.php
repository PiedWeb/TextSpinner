<?php

namespace PiedWeb\TextSpinner;

class Spinner
{
    public static function spin(string $text): string
    {
        if (! preg_match('/\{(.*)\}/si', $text)) {
            return self::removeExtraSpaces($text);
        } else {
            preg_match_all('/\{([^{}]*)\}/si', $text, $matches);
            $occur = count($matches[1]);
            for ($i = 0; $i < $occur; ++$i) {
                $words = explode('|', $matches[1][$i]);
                shuffle($words);
                $text = self::replaceOnce($matches[0][$i], $words[0], $text);
            }

            return    self::spin($text);
        }
    }

    protected static function replaceOnce(string $search, string $replace, string $subject): string
    {
        $firstChar = strpos($subject, $search);
        if (false !== $firstChar) {
            $beforeStr = substr($subject, 0, $firstChar);
            $afterStr = substr($subject, $firstChar + strlen($search));

            return $beforeStr.$replace.$afterStr;
        } else {
            return $subject;
        }
    }

    protected static function removeExtraSpaces(string $text): string
    {
        return preg_replace('/\s+/', ' ', $text);
    }
}
