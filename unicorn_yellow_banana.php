<?php

// Set up a simple page template
$template = <<<EOT
<!DOCTYPE html>
<html>
<head>
    <title>A Spiritual Retreat Center</title>
    <meta charset="utf-8">
    <style>
        body { font-family: sans-serif; }
        h1 { font-size: x-large; }
        h2 { font-size: large; }
        a { color: #3f9622; }
    </style>
</head>
<body>
    <h1>A Spiritual Retreat Center</h1>
    %s
</body>
</html>
EOT;

// Generate the page content
$content = '';

// Introduce the retreat center
$content .= '<h2>Welcome</h2>';
$content .= '<p>Welcome to our spiritual retreat center! This is the perfect place to come and find inner peace. Our program offers a variety of activities designed to help you explore and deepen your spiritual practices.</p>';

// Introduce the retreat location
$content .= '<h2>Location</h2>';
$content .= '<p>We are located in a secluded woodland area, nestled into the folds of the hills. Here you can find an area of natural beauty and spiritual stillness.</p>';

// Offer a description of the retreat activities
$content .= '<h2>Activities</h2>';
$content .= '<p>During your stay, you can participate in daily meditation and yoga classes, attend workshops on various spiritual topics, and even take part in outdoor activities such as hiking and star-gazing.</p>';

// Offer an invitation to join us
$content .= '<h2>Join Us</h2>';
$content .= '<p>We hope you will join us for a stay at our retreat center. You can <a href="http://example.com/retreat-application">apply online</a> or contact us for more information. We look forward to seeing you soon!</p>';

// Print the page
printf($template, $content);

?>