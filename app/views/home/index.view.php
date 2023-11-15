<?php include base_path('app/views/partials/head.view.php')?>
<div id="container" class="md:grid md:grid-cols-5 md:w-4/5 bg-gray-100 h-full md:mx-auto bg-transparent">
    <aside class="col-span-1">left</aside>
    <main class="col-span-3 border border-gray-500">
        <header class="h-96">
            <?php include base_path('app/views/partials/header.view.php')?>
        </header>
        <nav class="h-12 border-b border-gray-500">
            <?php include base_path('app/views/partials/nav.view.php')?>
        </nav>
        <article>
            <?php include base_path('app/views/partials/main.view.php')?>
        </article>
    </main>
    <aside class="col-span-1">right</aside>
</div>
<?php include base_path('app/views/partials/footer.view.php')?>