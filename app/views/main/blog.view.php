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
            <ul class="flex justify-around">
                <li class="w-6 h-6 rounded-full hover:bg-blue-100 flex justify-center items-center"><a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-plus"
                             width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                             fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M8 9h8"/>
                            <path d="M8 13h6"/>
                            <path d="M12.01 18.594l-4.01 2.406v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5"/>
                            <path d="M16 19h6"/>
                            <path d="M19 16v6"/>
                        </svg>
                    </a></li>
                <li class="w-6 h-6 rounded-full hover:bg-green-100 flex justify-center items-center"><a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share-3"
                             width="16"
                             height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M13 4v4c-6.575 1.028 -9.02 6.788 -10 12c-.037 .206 5.384 -5.962 10 -6v4l8 -7l-8 -7z"/>
                        </svg>
                    </a></li>
                <li class="w-6 h-6 rounded-full hover:bg-red-100 flex justify-center items-center"><a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thumb-up"
                             width="16"
                             height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3"/>
                        </svg>
                    </a></li>
            </ul>
        </div>
    </section>
<?php endforeach; ?>