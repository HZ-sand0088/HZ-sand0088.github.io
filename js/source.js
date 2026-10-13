window.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector("nav");
    if (!nav) return;

    const page = window.location.pathname.split("/").pop() || "index.php";
    const blogPages = ["why-it.php", "mission.php", "future-me.php"];
    const activePage = blogPages.includes(page) ? "blog.php" : page;

    for (const link of nav.querySelectorAll("a")) {
        if (link.getAttribute("href") === activePage) {
            link.classList.add("active");
            link.setAttribute("aria-current", blogPages.includes(page) ? "true" : "page");
        }
    }
});
