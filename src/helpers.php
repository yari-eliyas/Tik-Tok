<?php

// src/helpers.php

if (!function_exists('tik')) {
    function tik(?string $name = 'default'): void
    {
        $GLOBALS["tiktok_timer_{$name}"] = hrtime(true);
    }
}

if (!function_exists('tok')) {
    function tok(?string $name = 'default', bool $echo = true): float
    {
        $key = "tiktok_timer_{$name}";

        if (!isset($GLOBALS[$key])) {
            if ($echo) {
                dump("⚠️ Timer '{$name}' شروع نشده! اول tik() را فراخوانی کنید.");
            }
            return 0.0;
        }

        $start = $GLOBALS[$key];
        $durationMs = (hrtime(true) - $start) / 1_000_000;

        if ($echo) {
            $message = sprintf("⏱️ [TikTok] [%s] → %.3f ms", $name, $durationMs);
            
            if (function_exists('dump')) {
                echo "<div style='background:#222; color:#0f0; padding:8px 12px; margin:5px 0; border-radius:4px; font-family:monospace;'>";
                echo $message;
                echo "</div>";
            } else {
                echo $message . PHP_EOL;
            }
        }

        unset($GLOBALS[$key]);

        return $durationMs;
    }
}