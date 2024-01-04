<?php foreach ($posts as $post) : ?>
    <section class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-2">
        <header class="py-2 flex justify-between">
            <h2 class="text-2xl font-semibold text-green-600"><?= $post['title'] ?></h2>
            <p class="text-xs font-light">Posted on <?= date('d/m/Y H:i', strtotime($post['timestamp'])); ?></p>
        </header>
        <article class="mt-4">
            <?= $post['content'] ?>
        </article>
        <div class="py-2">
            <?php include base_path('app/views/partials/social-buttons.php')?>
        </div>
    </section>
<?php endforeach; ?>