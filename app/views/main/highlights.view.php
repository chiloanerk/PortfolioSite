<section class="flex flex-row border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-2">
    <div class=" w-1/12">
        <a href="/">
            <img src="images/profile.png" alt="" class="w-10 h-10 rounded-full border border-gray-200">
        </a>
    </div>
    <div class="w-11/12">
        <article class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-0.5 mb-4">
            <div class="mb-2 flex justify-between">
                <p class="font-bold">Weather App</p>
                <p class="text-xs font-light">03/08/2023</p>
            </div>
            <div>
                <p>
                    This is a weather app written entirely using PHP OOP. The weather data is pulled from
                    openweathermap's public api.
                    The features allow for the user to allow the browser to automatically detect the geolocation and
                    show the exact weather for the current city.
                </p>
                <div class="dark:block hidden my-2 bg-sky-600 border border border-gray-700 rounded">
                    <img src="images/highlights/weather-dark.png" alt="A weather app mobile version"
                         class="object-cover overflow-scroll col-span-1">
                </div>
                <div class="dark:hidden block my-2 bg-sky-600 border border border-gray-100 rounded">
                    <img src="images/highlights/weather-light.png" alt="A weather app mobile version"
                         class="object-cover overflow-scroll col-span-1">
                </div>
                <p class="my-2">
                    Users are also allowed to enter their nearest city manually into the text box of which will
                    return
                    the weather information.
                </p>
                <p>
                    The user is provided weather data for the day in 3 hour intervals. This is supplemented with visual
                    icons showing the weather state.
                    The 5 day weekly data is shown together with its own weather icons, a short description and maximum
                    and minimum temperatures.
                </p>
            </div>
        </article>

        <div class="py-2">
            <?php include base_path('app/views/partials/social-buttons.php') ?>
        </div>
    </div>
</section>

<section class="flex flex-row border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-2">
    <div class=" w-1/12">
        <a href="/">
            <img src="images/profile.png" alt="" class="w-10 h-10 rounded-full border border-gray-200">
        </a>
    </div>
    <div class="w-11/12">
        <article class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-0.5">
            <div class="mb-2 flex justify-between">
                <p class="font-bold">Anonymous Messages Link</p>
                <p class="text-xs font-light">25/05/2023</p>
            </div>
            <div>
                <p class="my-2">
                    The app is written using PHP and MySQL. Hosting is done through an Oracle cloud vm running Ubuntu.
                    I used Object-Oriented Programming for the app, some parts are still procedural though. I had lots of
                    fun writing this web app and the engagements have been fascinating.
                </p>
                <div class="dark:block hidden my-2 bg-sky-600 border border border-gray-700 rounded">
                    <img src="images/highlights/lekunutu-dark.png" alt="A weather app mobile version"
                         class="object-cover overflow-scroll col-span-1">
                </div>
                <div class="dark:hidden block my-2 bg-sky-600 border border border-gray-100 rounded">
                    <img src="images/highlights/lekunutu-light.png" alt="A weather app mobile version"
                         class="object-cover overflow-scroll col-span-1">
                </div>
                <p>
                    An anonymous user can send a secret message to a registered user without the need for any personal
                    information or registration. The recipient will find the message in their inbox, ensuring complete
                    confidentiality.
                </p>
                <div class="dark:block hidden my-2 bg-sky-600 border border border-gray-700 rounded">
                    <img src="images/highlights/lekunutu-secrets-dark.png" alt="A weather app mobile version"
                         class="object-cover overflow-scroll col-span-1">
                </div>
                <div class="dark:hidden block my-2 bg-sky-600 border border border-gray-100 rounded">
                    <img src="images/highlights/lekunutu-secrets-light.png" alt="A weather app mobile version"
                         class="object-cover overflow-scroll col-span-1">
                </div>
                <p>
                    The registered user is provided with a unique link that they can share with their followers on
                    social media platforms. Clicking on this link will take their followers directly to the message
                    form, allowing them to compose their own secret message to be sent anonymously.
                </p>
            </div>
        </article>
    </div>
</section>