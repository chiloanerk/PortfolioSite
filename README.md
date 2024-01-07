## Portfolio Website for Relebogile Chiloane

1. Getting this site up and running is fairly simple.

    `php -S localhost:[port] -t public`

2. You will need to open up your mysql server and set your user details in the user table.
3. My post content is written in markup and stored inside the database. You will need to
   install [Parsedown](https://github.com/erusev/parsedown?tab=readme-ov-file) using 

    `composer require erusev/parsedown`

4. Because Parsedown converts markup in plain html and no classes for tailwind, i found this official tailwindcss plugin
   [@tailwindcss/typography](https://tailwindcss.com/docs/typography-plugin). You install the plugin
   from nmp using 

    `npm install -D @tailwindcss/typography` 

    Then add the plugin into your `tailwind.config.js` file

    ```markdown
    plugins: [
    require('tailwindcss/typography'),
    // ...
    ],
    ```

5. Additional Notes:

- If you encounter any issues, feel free to refer to the official documentation for the technologies used in this
  project.
