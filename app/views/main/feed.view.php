<?php foreach ($getFeed as $feed) : ?>
<section class="flex flex-row">
    <div class="border border-pink-700 w-1/12">
        <a href="/">
            <img src="images/profile.png" alt="" class="w-10 h-10 rounded-full border border-black">
        </a>
    </div>
    <div class="border border-green-400 w-11/12">
        <article>
            <p class="mb-2"><span class="font-bold">Relebogile</span> <span class="text-xs font-light"><?= $feed['timestamp'] ?></span></p>
            <p>
                <?= $feed['post'] ?>
            </p>
        </article>
        <div class="py-2">
            <ul class="flex justify-around">
                <li><a href="" class="hover:font-bold">comment</a></li>
                <li><a href="" class="hover:font-bold">share</a></li>
                <li><a href="" class="hover:font-bold">like</a></li>
            </ul>
        </div>
    </div>
</section>
<?php endforeach; ?>