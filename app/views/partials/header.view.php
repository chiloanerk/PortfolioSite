<!-- Top Half -->
<div class="h-1/2 flex justify-center items-center">
    <img src="images/header-image.jpeg" alt="male figure in wilderness working on a laptop"
         class="object-cover h-full w-full">
</div>
<!-- Bottom Half -->
<div class="h-10 flex justify-between place-items-center p-1">
    <img src="images/profile.png" alt="profile image"
         class="h-24 w-24 rounded-full bg-gray-100 -translate-y-5 border-2 border-gray-100">
    <a href="mailto:<?= $userInfo['email'] ?>">
        <button class="px-4 py-2 text-gray-50 rounded-3xl mt-2 mr-1 text-sm bg-gray-950 hover:bg-gray-500 dark:bg-gray-100 dark:hover:bg-gray-300 dark:text-gray-950">
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
    <div class="mt-2 flex align-middle font-light">
        <p><span class="font-bold ml-1 mr-1"><?= $count ?></span> Visitors</p>
    </div>
    <p class="mt-2 text-center"><?= $userInfo['summary'] ?></p>
    <div class="w-3/4 mx-auto">
        <?php include 'social-links.php'?>
    </div>
</div>
