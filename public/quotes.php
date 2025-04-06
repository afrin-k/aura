<?php
session_start();

if (!isset($_SESSION['quotes']) || time() - $_SESSION['last_fetch'] > 3600) {
    // Fetch only if not cached or cache expired
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://zenquotes.io/api/quotes");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    $quotes = json_decode($output, true);
    if ($quotes) {
        $_SESSION['quotes'] = $quotes;
        $_SESSION['last_fetch'] = time();
    } else {
        // Fallback message if API fails
        $_SESSION['quotes'] = [[
            "q" => "Keep going. Everything you need will come to you at the perfect time.",
            "a" => "Unknown"
        ]];
    }
}

// Serve one random quote
$quote = $_SESSION['quotes'][array_rand($_SESSION['quotes'])];
echo json_encode($quote);
?>
