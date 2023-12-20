function loadContent(url) {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response failed');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('main').innerHTML = data;
        })
        .catch(error => {
            console.error('There has been a problem with the fetch operation: ', error);
        });
}

// Gets all links in the nav element
const  links = document.getElementById('navigation').querySelectorAll('li');
const feedsTab = document.getElementById('feed');
// Bind click event to each link
links.forEach(link => {
    link.addEventListener('click', function(event) {
        // Prevent page refresh
        event.preventDefault();
        links.forEach(link => {
            link.classList.remove('border-b-2', 'border-green-500', 'font-bold');
        });
        this.classList.add('border-b-2', 'border-green-500', 'font-bold')
        const url = this.querySelector('a').getAttribute('href');
        // Loads the content dynamically into the #main div
        loadContent(url);
    });
});

feedsTab.click(); // Highlights feed on page load
document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    const article = document.getElementById('article');
    const distanceFromTop = navbar.offsetTop;

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > distanceFromTop) {
            navbar.classList.add('bg-gray-50', 'bg-opacity-90', 'fixed', 'top-0', 'w-full', 'md:w-2/5', 'mx-auto');
            article.classList.add('mt-12');
        } else {
            navbar.classList.remove('bg-gray-50', 'bg-opacity-90', 'fixed', 'top-0', 'w-full', 'md:w-2/5', 'mx-auto');
            article.classList.remove('mt-12')
        }
    });
});