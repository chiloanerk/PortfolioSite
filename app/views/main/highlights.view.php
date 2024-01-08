<?php $parser = new Parsedown(); ?>
<?php foreach ($contents as $content) : ?>
    <section
            class="flex flex-row border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-2">
        <div class=" w-1/12">
            <a href="/">
                <img src="images/profile.png" alt="" class="w-10 h-10 rounded-full border border-gray-200">
            </a>
        </div>
        <div class="w-11/12">
            <article
                    class="prose-sm prose-slate border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-0.5 mb-4">
                <div class="mb-2 flex justify-between">
                    <p class="font-bold"><?= $content['title'] ?></p>
                </div>
                <div>
<!--                    fetch from database the markdown and convert to html-->
                    <p>
                        <?= $parser->text($content['content']) ?>
                    </p>
<!--                    fetch media filenames and place in src-->
                    <?php $filenames = $mediaFiles[$content['id']];?>
                    <?php foreach ($filenames as $filename) : ?>
                        <div class="my-2 bg-sky-600">
                            <img src="images/highlights/<?= $filename['filename'] ?>" alt="<?= $filename['description'] ?>"
                                 class="object-cover overflow-scroll col-span-1">
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>
            <div class="py-2">
                <?php include base_path('app/views/partials/reaction-buttons.php') ?>
            </div>
        </div>
    </section>
<?php endforeach; ?>