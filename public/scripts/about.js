(function () {
    const header = document.querySelector("header");
    const nav = document.querySelector("nav");
    const projectsSection = document.querySelector("#projects-section");

    header.addEventListener("click", () => {
        header.classList.toggle("show");
        nav.style.display = header.classList.contains("show") ? "flex" : "none";
    });

    (async function () {
        const response = await fetch("/projects.json");
        const projects = await response.json();
        let html = "";

        for (let project of projects) {
            const { name, description, stack, link } = project;
            const stackHTML = stack.reduce(
                (prev, val) => prev + `<p>${val}</p>`,
                ""
            );
            html += `<a href="${link}" target="_blank" rel="noopener noreferrer" class="project-card">
                        <h4>${name}</h4>
                        <p>${description}</p>  
                        <div>${stackHTML}</div>
                    </a>`;
        }

        projectsSection.innerHTML = html;
    })();
})();
