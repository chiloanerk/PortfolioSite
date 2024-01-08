<?php foreach ($getFeed as $feed) : ?>
    <section
            class="flex flex-row border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-2">
        <div class=" lg:w-1/12 md:w-1/6">
            <a href="/">
                <img src="images/profile.png" alt="" class="w-10 h-10 rounded-full border border-gray-200">
            </a>
        </div>
        <div class="w-11/12">
            <article>
                <div class="mb-2 flex justify-between">
                    <p class="font-bold"><?= $userInfo['name'] ?></p>
                    <p class="text-xs font-light"><?= $feed['timestamp'] ?></p>
                </div>
                <p>
                    <?= $feed['post'] ?>
                </p>
            </article>
            <div class="py-2">
                <?php include base_path('app/views/partials/reaction-buttons.php') ?>
            </div>
        </div>
    </section>
<?php endforeach; ?>