<?php

// src/helpers.php

if (!function_exists('tik')) {
    function tik(?string $name = 'default'): void
    {
        app()->instance("tiktok_timer_{$name}", hrtime(true));
    }
}

if (!function_exists('tok')) {
    function tok(?string $name = 'default', bool $echo = true): float
    {
        $key = "tiktok_timer_{$name}";
        $start = app()->get($key);

        if ($start === null) {
            if ($echo) {
                dump("⚠️ Timer '{$name}' شروع نشده! اول tik() را فراخوانی کنید.");
            }
            return 0.0;
        }

        $durationMs = (hrtime(true) - $start) / 1_000_000;

        if ($echo) {
            $message = sprintf("⏱️ [TikTok] [%s] → %.3f ms", $name, $durationMs);
            
            if (app()->hasDebugModeEnabled() || config('app.debug')) {
                dump($message);
            } else {
                \Log::info($message);
            }
        }

        app()->forget($key);

        return $durationMs;
    }
}