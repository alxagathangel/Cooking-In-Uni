document.addEventListener("DOMContentLoaded", () => {
    const carouselElement = document.querySelector('#carouselExampleIndicators');
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 3000, // Change slides every 3 seconds
        wrap: true      // Loop back to the first slide
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const menuHTML = `
        <nav>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="recipes.html">Recipes</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="form.html">Form</a></li>
            </ul>
        </nav>
    `;
    document.getElementById('menu-container').innerHTML = menuHTML;
});