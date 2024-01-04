<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
<!--    <link rel="stylesheet" href="css/styles.css">-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="scripts/nav.js" defer></script>
</head>
<body class="flex flex-col min-h-screen dark:bg-gray-900 dark:text-gray-50 text-gray-900 text-sm">
<div id="container" class="md:w-2/5 md:mx-auto bg-transparent flex-grow">
    <main class="border border-gray-100 dark:border-gray-700 flex flex-col min-h-screen">
        <header class="h-96">
            <?php include base_path('app/views/partials/header.view.php')?>
        </header>
        <nav id="navbar" class="h-12 border-b border-gray-100 dark:border-gray-700 transition-all duration-300">
            <?php include base_path('app/views/partials/nav.view.php')?>
        </nav>
        <article id="article">
            <?php include base_path('app/views/partials/main.view.php')?>
        </article>
    </main>
    <footer class="flex justify-center place-items-center h-8 py-2">
        <?php include base_path('app/views/partials/footer.view.php')?>
    </footer>
</div>
</body>
</html>