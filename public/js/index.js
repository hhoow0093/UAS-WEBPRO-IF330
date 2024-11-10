const hamburger = document.querySelector('#toggle-btn');

hamburger.addEventListener("click", function () {
    const sidebar = document.querySelector("#sidebar");
    const tes = document.querySelector("#tes");

    sidebar.classList.toggle("expand");

    if (sidebar.classList.contains("expand")) {
        tes.setAttribute("data-bs-toggle", "collapse");
    } else {
        tes.removeAttribute("data-bs-toggle");
    }
});