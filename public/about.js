const header = document.querySelector("header");
const nav = document.querySelector("nav");

header.addEventListener("click", () => {
    header.classList.toggle("show");
    nav.style.display = header.classList.contains("show") ? "flex" : "none";
});
