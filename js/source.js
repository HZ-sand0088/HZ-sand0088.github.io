window.addEventListener("DOMContentLoaded", () => {
    setNavBarActive();
    updateYear();
    dashboardCheck();
});

// Global Functions

function setNavBarActive() {
    const nav = document.querySelector("nav");
    if (!nav) return;

    const page = window.location.pathname.split("/").pop() || "index.php";
    const blogPages = ["why-it.php", "mission.php", "future-me.php"];
    const activePage = blogPages.includes(page) ? "blog.php" : page;

    for (const link of nav.querySelectorAll("a")) {
        if (link.getAttribute("href") === activePage) {
            link.classList.add("active");
        }
    }
    return;
}

function updateYear() {
    const yearfield = document.getElementById("copyright-year");
    const currentYear = new Date().getFullYear();
    yearfield.textContent = currentYear;
}

// Dashboard Controller

function dashboardCheck() {
    const progressBar = document.getElementById("study-progress");
    if (progressBar) {
        fetchData(progressBar);
    }
}

async function fetchData(progressBar) {
    const fetchedData = await fetch("data/grades.json");
    const grades = await fetchedData.json();
    const courses = Object.keys(grades);
    let passedCourses = 0;

    for (let i = 0; i < courses.length; i++) {
        const cell = document.getElementById(courses[i]);
        const grade = grades[courses[i]];

        if (!cell || grade == null) {
            continue;
        }

        if (typeof grade === "number" && grade >= 0 && grade <= 10) {
            cell.innerText = grade;

            if (grade >= 5.5) {
                passedCourses++;
                cell.classList.add("passed");
            } else {
                cell.classList.add("failed");
            }
        }
    }
    const earnedEC = passedCourses * 5;
    const totalEC = document.getElementById("totalEC");
    totalEC.innerText = earnedEC;
    progressBar.max = courses.length;
    progressBar.value = passedCourses;
}