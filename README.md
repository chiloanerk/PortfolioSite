## Portfolio Website for Relebogile Chiloane

1. Getting this site up and running is fairly simple. Create a database named portfolioSite the import the db.sql file.
2. Modify the details in the config.php file to your preferred database access credentials.
2. Run this in the project root directory

    `php -S localhost:[port] -t public`

2. You will need to open up your mysql server and prefill your user details in the user table.
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

5. Tailwind needs to build the css for when changes are made, so you will need to run in a seperate tab 
   `npx tailwindcss -i app/tailwind/input.css -o ./public/css/styles.css --watch
      `  
   and keep it running, otherwise you will get inconsistent styling.  
   

6. Additional Notes:

- If you encounter any issues, feel free to refer to the official documentation for the technologies used in this
  project.
