<?php

namespace Helpers;

class Console
{
    const BG_NONE = '00';
    const BG_BLACK = 40;
    const BG_RED = 41;
    const BG_GREEN = 42;
    const BG_YELLOW = 43;
    const BG_BLUE = 44;
    const BG_PINK = 45;
    const BG_GREEN_LIGHT = 46;
    const BG_WHITE = 47;

    const FG_BLACK = 30;
    const FG_RED = 31;
    const FG_GREEN = 32;
    const FG_YELLOW = 33;
    const FG_BLUE = 34;
    const FG_PINK = 35;
    const FG_GREEN_LIGHT = 36;
    const FG_WHITE = 37;

    const RESET = 0;
    const BOLD = 1;
    const ITALIC = 3;
    const UNDERLINE = 4;
    const BLINK = 5;
    const INVERSE = 7;

    public static function log(string $message, ...$color)
    {
        $message = static::formatMessage($message, $color);

        fwrite(STDOUT, $message);
    }

    private static function formatMessage(string $message, array $color)
    {
        if (count($color) == 0) return $message;

        $foreground = array_filter($color, fn ($cl) => $cl >= 30 && $cl <= 37);
        $background = array_filter($color, fn ($cl) => $cl >= 40 && $cl <= 47);
        $transform = array_filter($color, fn ($cl) => $cl >= 0 && $cl <= 7 && $cl != 6);

        $foreground = array_shift($foreground) ?? Console::FG_WHITE;
        $background = array_shift($background) ?? Console::BG_NONE;
        $transform = array_shift($transform) ?? '';

        $color = trim(join(';', [$background, $foreground, $transform]), ";");

        return "\e[{$color}m{$message}\e[m";
    }
}
