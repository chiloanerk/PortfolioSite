<?php foreach ($posts as $post) : ?>
    <section class="my-8  border-b border-amber-100">
        <header class="py-2">
            <h2 class="text-xl font-semibold underline"><?= $post['title'] ?></h2>
            <p class="text-sm text-gray-600">Posted on <?= $post['timestamp'] ?></p>
        </header>
        <article class="mt-4">
            <?= $post['content'] ?>
        </article>
        <div class="py-2">
            <ul class="flex justify-around">
                <li><a href="" class="hover:font-bold">Comment</a></li>
                <li><a href="" class="hover:font-bold">Share</a></li>
                <li><a href="" class="hover:font-bold">Like</a></li>
            </ul>
        </div>
    </section>
<?php endforeach; ?>