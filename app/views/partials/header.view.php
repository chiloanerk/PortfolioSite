<div class="h-1/2 flex justify-center items-center">
    <img src="images/header.webp" alt="" class="object-cover h-full w-full">
</div>
<div class="h-10 flex justify-between place-items-center p-1">
    <img src="images/profile.png" alt=""
         class="h-24 w-24 rounded-full bg-gray-100 -translate-y-5 border-2 border-gray-100">


    <a href="mailto:<?= $userInfo['email'] ?>">
        <button class="px-4 py-2 text-gray-50 rounded-3xl mt-2 text-sm border border-gray-100 bg-gray-950 hover:bg-gray-500 dark:bg-gray-100 dark:hover:bg-gray-300 dark:text-gray-950">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="20"
                 height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round"
                 stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                      stroke-width="0" fill="currentColor"/>
                <path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                      stroke-width="0" fill="currentColor"/>
            </svg>
        </button>
    </a>
</div>
<div class="h-2/5 p-1">
    <h1 class="text-xl font-bold"><?= $userInfo['name'] . ' ' . $userInfo['surname'] ?></h1>
    <div class="mt-2 flex align-middle font-light">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="16" height="16"
             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
             stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/>
            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"/>
        </svg>
        <span class="ml-1"><?= $userInfo['state'] . ' - ' . $userInfo['country'] ?></span>
    </div>
    <p class="mt-2 text-center"><?= $userInfo['summary'] ?></p>
    <div class="w-3/4 mx-auto">
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
    </div>

</div>
