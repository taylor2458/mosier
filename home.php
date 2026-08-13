<?php
$siteName = "Mosier";
$year = date("Y");
$greetingHour = (int) date("G");

if ($greetingHour < 12) {
    $greeting = "Good morning";
} elseif ($greetingHour < 18) {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}

$features = [
    "Fast" => "Built for speed from the ground up.",
    "Simple" => "No unnecessary complexity, just what you need.",
    "Reliable" => "Tested and dependable, every time.",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteName) ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #0f172a;
            color: #e2e8f0;
            line-height: 1.6;
        }
        header {
            padding: 4rem 2rem;
            text-align: center;
            background: linear-gradient(135deg, #1e293b, #0f172a);
        }
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        header p {
            color: #94a3b8;
            font-size: 1.1rem;
        }
        main {
            max-width: 900px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
        }
        .feature {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 12px;
            padding: 1.5rem;
        }
        .feature h2 {
            font-size: 1.15rem;
            margin-bottom: 0.5rem;
            color: #38bdf8;
        }
        .feature p {
            color: #94a3b8;
            font-size: 0.95rem;
        }
        footer {
            text-align: center;
            padding: 2rem;
            color: #64748b;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($siteName) ?></h1>
        <p><?= htmlspecialchars($greeting) ?>, welcome back.</p>
    </header>
    <main>
        <div class="features">
            <?php foreach ($features as $title => $description): ?>
                <div class="feature">
                    <h2><?= htmlspecialchars($title) ?></h2>
                    <p><?= htmlspecialchars($description) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        &copy; <?= $year ?> <?= htmlspecialchars($siteName) ?>. All rights reserved.
    </footer>
</body>
</html>
