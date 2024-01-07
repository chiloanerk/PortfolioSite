<ul class="flex justify-between mt-5 bg-gray-100 dark:bg-gray-800 rounded">
    <li class="w-8 h-8 rounded hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-blue-700 dark:hover:text-blue-500 flex justify-center items-center">
        <a
                href="https://www.linkedin.com/in/<?= $userSocials['linkedin'] ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin"
                 width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                 stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"/>
                <path d="M8 11l0 5"/>
                <path d="M8 8l0 .01"/>
                <path d="M12 16l0 -5"/>
                <path d="M16 16v-3a2 2 0 0 0 -4 0"/>
            </svg>
        </a></li>
    <li class="w-8 h-8 rounded hover:bg-gray-200 dark:hover:bg-gray-700 flex justify-center items-center"><a
                href="https://twitter.com/intent/follow?screen_name=<?= $userSocials['twitter'] ?>"
                target="_blank" class="hover:font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-x" width="24"
                 height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                 stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 4l11.733 16h4.267l-11.733 -16z"/>
                <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"/>
            </svg>
        </a></li>
    <li class="w-8 h-8 rounded hover:bg-gray-200 dark:hover:bg-gray-700 flex justify-center items-center"><a
                href="https://github.com/<?= $userSocials['github'] ?>" target="_blank" class="hover:font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="24"
                 height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                 stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"/>
            </svg>
        </a></li>
</ul>