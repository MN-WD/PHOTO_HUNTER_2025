<?php

namespace Core\Helpers;

function truncate(string $text, int $length = 100)
{
    if (strlen($text) > 100) {
        // ^ même chose que => $text = $photo['resume']
            $cut = substr($text, 0, $length);
            $cut = substr($cut, 0, strrpos($cut, ' '));
            return $cut . '...';
            // return substr($text, 0, strrpos($text, ' ', -100)) . '...';
        } else {
            return $text;
        }
}