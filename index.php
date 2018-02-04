<html>
<head><title>F.bw - Flip a Coin!</title>
    <meta name="viewport" content="initial-scale=1">
</head>
<body>
<?php
/**
 * User: aviginsberg
 * IDE: PhpStorm.
 * Date: 2/4/18
 * Coin Flipping Site
 */

$fliptimes = $_GET['ft'];

if(!isset($fliptimes))
    $fliptimes = 1;

while ($fliptimes > 0) {
    echo rand(0, 1) < 1 ? '<h1>Heads</h1>' : '<h1>Tails</h1>';
    $fliptimes--;
}

?>

</body>
</html>
