<section
        class="flex flex-row border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 hover:dark:bg-gray-800 p-2">
    <div class=" w-1/12">
        <a href="/">
            <img src="images/profile.png" alt="" class="w-10 h-10 rounded-full border border-gray-200">
        </a>
    </div>
    <div class="w-11/12">
        <article>
            <div class="mb-2 flex justify-between">
                <p class="font-bold">Weather App</p>
                <p class="text-xs font-light">time</p>
            </div>
            <div class="grid grid-cols-3">
                <img src="images/highlights/weather_mobile.jpeg" alt="A weather app mobile version"
                     class="object-cover h-40 w-40 overflow-scroll col-span-1">
                <div class="col-span-2">
                    <p >
                        This is a weather app written entirely using PHP OOP. The weather data is pulled from
                        openweathermap's public api.
                        The features allow for the user to allow the browser to automatically detect the geolocation and
                        show the exact weather for the current city.
                    </p>
                    <p class="my-2">
                        Users are also allowed to enter their nearest city manually into the text box of which will
                        return
                        the weather information.
                    </p>
                    <p>
                        The user is provided weather data for the day in 3 hour intervals. This is supplemented with visual icons showing the weather state.
                        The 5 day weekly data is shown together with its own weather icons, a short description and maximum and minimum temperatures.
                    </p>
                </div>
            </div>

        </article>
        <div class="py-2">
            <?php include base_path('app/views/partials/social-buttons.php')?>
        </div>
    </div>
</section>