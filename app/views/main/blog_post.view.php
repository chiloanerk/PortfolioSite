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
<div id="container" class="lg:w-2/5 lg:mx-auto md:w-3/4 md:mx-auto bg-transparent flex-grow">
    <main class="border border-gray-100 dark:border-gray-700 flex flex-col min-h-screen">
        <?php $parser = new Parsedown(); ?>
        <section class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-2">
            <header class="py-2 flex justify-between">
                <h2 class="text-2xl font-semibold text-green-600"><?= $title ?></h2>
                <p class="text-xs font-light">Posted on <?= date('d/m/Y H:i', strtotime($timestamp)); ?></p>
            </header>
            <article class="prose-sm prose-slate">
                <?= $parser->text($content); ?>
            </article>
            <div class="py-2">
                <?php include base_path('app/views/partials/reaction-buttons.php')?>
            </div>
        </section>
    </main>
    <footer class="flex justify-center place-items-center h-8 py-2">
        <?php include base_path('app/views/partials/footer.view.php')?>
    </footer>
</div>
</body>
</html>