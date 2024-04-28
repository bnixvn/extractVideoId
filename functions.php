<?php
function extractVideoId($url) {
    $videoId = null;
    $regExp = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:shorts\/|watch\?v=))([a-zA-Z0-9_-]{11})/';
    preg_match($regExp, $url, $matches);
    if (!empty($matches[1])) {
        $videoId = $matches[1];
    }
    return $videoId;
}

// Sử dụng hàm extractVideoId để lấy video ID từ một URL YouTube
$url = "https://www.youtube.com/watch?v=JEyW8b3mO7M";
$videoId = extractVideoId($url);
echo "Video ID: " . $videoId;
