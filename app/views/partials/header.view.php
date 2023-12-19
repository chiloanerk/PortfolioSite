<div class="h-1/2 flex justify-center items-center">
    <img src="images/header.webp" alt="" class="object-cover h-full w-full">
</div>
<div class="h-10 flex justify-between place-items-center p-1">
    <img src="images/profile.png" alt="" class="h-24 w-24 rounded-full -translate-y-5 border border-gray-700">
    

        <a href="https://twitter.com/intent/follow?screen_name=reezyDev">
            <button class="px-4 py-2 rounded-3xl border border-gray-500 mt-2 text-sm hover:bg-gray-800">
                Follow
            </button>
        </a>
</div>
<div class="h-2/5 p-1">
    <h1 class="text-xl font-bold"><?= $userInfo['name'] . ' ' . $userInfo['surname'] ?></h1>
    <p class="mt-2"><?= $userInfo['state'] . ' - ' . $userInfo['country'] ?></p>
    <p class="mt-2"><?= $userInfo['summary'] ?></p>
    <ul class="flex justify-around mt-5">
        <li><a href="https://www.linkedin.com/in/chiloanerk/" class="hover:font-bold">linkedIn</a></li>
        <li><a href="https://twitter.com/reezyDev" class="hover:font-bold">Twitter/X</a></li>
        <li><a href="https://github.com/chiloanerk" class="hover:font-bold">Github</a></li>
    </ul>
</div>
