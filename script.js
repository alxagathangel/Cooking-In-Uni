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
