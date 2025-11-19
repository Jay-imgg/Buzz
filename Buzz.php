<?php
$title = "Buzz";
$artist = "NIKI";
$mood = "Reminiscing";

$adjectives = [
    "accidental", "thickest", "unexpected", "risky", "dizzy", "tipsy",
    "nervous", "stellar", "hot", "first", "big", "long"
];

$nouns = [
    "anticipation", "amps", "cables", "crackle", "sign", "words", "apple",
    "hand", "handle", "door", "eyes", "dance floor", "car", "lot", "drug store",
    "bumblebee", "blossom", "coffee shop", "autumn", "feeling", "propeller",
    "line", "bestseller", "song", "flower", "touch", "tension", "freeze frame",
    "news", "mention", "shows", "tickets", "artists", "bow", "phone", "friend",
    "goosebumps", "drums", "start", "jump"
];

$verbs = [
    "start", "turn", "flicker", "stuck", "make", "run", "fall", "feel", "open", "see",
    "hear", "touch", "mean", "freeze", "get", "hit", "wonder", "tell"
];

// Verse 1
$verse1 = [
    "It's the $nouns[0] when the $nouns[1] $verbs[1] on",
    "Just $nouns[2] and $nouns[3]",
    "It's the $adjectives[9] $verbs[2] of the neon $nouns[4]",
    "It's the $nouns[5] $verbs[3] in your Adam's $nouns[6]"
];

// Pre-Chorus 1
$preChorus1 = [
    "It's a $nouns[7] on the $nouns[8] of the $nouns[9]",
    "It's $verbs[4] $nouns[10] in the middle of the $nouns[11]",
    "I $verbs[7] like $adjectives[8] shit",
    "Wanna $verbs[4] out in your $nouns[12] in the $nouns[13] of a $nouns[14]",
    "It's a $nouns[15] on a $nouns[16]",
    "The $adjectives[9] $nouns[17] run in $nouns[18]",
    "It's that $nouns[19], a $nouns[20]",
    "The $adjectives[9] $nouns[21] of a fucking $nouns[22]"
];

// Chorus
$chorus = [
    "The $nouns[23]'s about to $verbs[1] (Can you $verbs[9] it?)",
    "The $nouns[9]'s about to $verbs[8] (Can you $verbs[7] it?)",
    "The $nouns[24]'s about to $verbs[4] (Can you $verbs[9] it?)",
    "I'm about to $verbs[6] for you"
];

// Post-Chorus
$postChorus = [
    "I'm about to $verbs[6] for you",
    "I'm about to $verbs[6] for you"
];

// Verse 2
$verse2 = [
    "It's the $adjectives[0] $nouns[25] when you don't $verbs[12] to",
    "The $adjectives[1] $nouns[26]",
    "It's the millisecond $nouns[27] after good $nouns[28]",
    "Or an $adjectives[2] $nouns[29]",
    "See upcoming pop $nouns[30]",
    "Get $nouns[31] for your favorite $nouns[32]"
];

// Pre-Chorus 2
$preChorus2 = [
    "It's the $adjectives[10] $adjectives[11] $nouns[33] before the show ends",
    "The $nouns[34] toss when it's $adjectives[3] and you $verbs[15] send",
    "It's $verbs[7] $adjectives[4] when you're $adjectives[5]",
    "Wondering why you're so $adjectives[6] 'round a so-called \"$nouns[35]\"",
    "It's $nouns[36] when you $verbs[10] the $nouns[37]",
    "The $verbs[5] $nouns[38] before the big $nouns[39]",
    "It's that $nouns[20], so $adjectives[7]",
    "Bro, if you like her, just go and really $verbs[17] her"
];

// Numeric variables and operators
$verseCount = count($verse1) + count($verse2); 
$chorusRepeat = 2 * count($chorus);

// Type juggling examples
$totalLines = $verseCount + $chorusRepeat; 
$summary = "Total lines: " . $totalLines; 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?> by <?= $artist ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding: 20px;
            background-image: url('bee.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            text-align: center;
        }

        .container {
            background-color: rgba(114, 114, 114, 0.4);
            padding: 30px;
            border-radius: 15px;
            max-width: 900px;
            margin: auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        .container img {
            max-width: 30%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="NIKI.jpg" alt="Buzz Artwork">
    <h1><?= $title ?></h1>
    <h2>by <?= $artist ?></h2>
    <p><strong>Mood:</strong> <?= $mood ?></p>
    <p><strong><?= $summary ?></strong></p>

    <h5>[Verse 1]</h5>
    <p><?= $verse1[0] ?></p>
    <p><?= $verse1[1] ?></p>
    <p><?= $verse1[2] ?></p>
    <p><?= $verse1[3] ?></p>

    <h5>[Pre-Chorus 1]</h5>
    <p><?= $preChorus1[0] ?></p>
    <p><?= $preChorus1[1] ?></p>
    <p><?= $preChorus1[2] ?></p>
    <p><?= $preChorus1[3] ?></p>
    <p><?= $preChorus1[4] ?></p>
    <p><?= $preChorus1[5] ?></p>
    <p><?= $preChorus1[6] ?></p>
    <p><?= $preChorus1[7] ?></p>

    <h5>[Chorus]</h5>
    <p><?= $chorus[0] ?></p>
    <p><?= $chorus[1] ?></p>
    <p><?= $chorus[2] ?></p>
    <p><?= $chorus[3] ?></p>

    <h5>[Post-Chorus]</h5>
    <p><?= $postChorus[0] ?></p>
    <p><?= $postChorus[1] ?></p>

    <h5>[Verse 2]</h5>
    <p><?= $verse2[0] ?></p>
    <p><?= $verse2[1] ?></p>
    <p><?= $verse2[2] ?></p>
    <p><?= $verse2[3] ?></p>
    <p><?= $verse2[4] ?></p>
    <p><?= $verse2[5] ?></p>

<h5>[Pre-Chorus 2]</h5>
<p><?= $preChorus2[0] ?></p>
<p><?= $preChorus2[1] ?></p>
<p><?= $preChorus2[2] ?></p>
<p><?= $preChorus2[3] ?></p>
<p><?= $preChorus2[4] ?></p>
<p><?= $preChorus2[5] ?></p>
<p><?= $preChorus2[6] ?></p>
<p><?= $preChorus2[7] ?></p>

<h5>[Chorus]</h5>
<p><?= $chorus[0] ?></p>
<p><?= $chorus[1] ?></p>
<p><?= $chorus[2] ?></p>
<p><?= $chorus[3] ?></p>

<h5>[Post-Chorus]</h5>
<p><?= $postChorus[0] ?></p>
<p><?= $postChorus[1] ?></p>

</div>
</body>
</html>