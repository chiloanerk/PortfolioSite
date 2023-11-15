<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="scripts/nav.js" defer></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-900 text-gray-50 font-light">
<div id="container" class="md:w-2/5 bg-gray-100 md:mx-auto bg-transparent flex-grow">
    <main class="border border-gray-500 flex flex-col min-h-screen">
        <header class="h-96">
            <?php include base_path('app/views/partials/header.view.php')?>
        </header>
        <nav class="h-12 border-b border-gray-500">
            <?php include base_path('app/views/partials/nav.view.php')?>
        </nav>
        <article class="flex-1">
            <?php include base_path('app/views/partials/main.view.php')?>
        </article>
    </main>
    <footer class="flex justify-center place-items-center border-b border-l border-r border-gray-500 h-8">
        <?php include base_path('app/views/partials/footer.view.php')?>
    </footer>
</div>

</body>
</html>