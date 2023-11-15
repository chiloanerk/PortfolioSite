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
// Bind click event to each link
links.forEach(link => {
    link.addEventListener('click', function(event) {
        // Prevent page refresh
        event.preventDefault();
        const url = this.querySelector('a').getAttribute('href');
        // Loads the content dynamically into the #main div
        loadContent(url);
    });
});
