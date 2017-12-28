<?php

// Get image URL from page content…
if (!Plugin::exist('image')) {
    Hook::set('page.image', function($image, $lot = [], $that) {
        if ($image) {
            return $image; // `image` property already set, skip!
        }
        if ($s = $that->get('content')) {
            if (strpos($s, '<img ') !== false && preg_match('#<img(?:\s[^<>]*?)?\s+src=(["\'])(.+?)\1#', $s, $m)) {
                return $m[2]; // Return the image URL
            }
        }
        // Return the initial value
        return $image;
    }, 2.1);
}

// Add CSS file to the `<head>` section…
Asset::set('css/capture.min.css');

// Add JS file to the `<body>` section…
Asset::set('css/capture.min.js');