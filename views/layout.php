<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Index</a></li>
            <li><a href="/forms">Forms</a></li>
            <li><a href="/forms/view?=42">Form 42</a></li>
        </ul>
    </nav>
    <?= $content ?>
</body>
</html>
