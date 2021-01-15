(function () {
    const emojis = document.querySelectorAll(".emoji");
    const button = document.querySelector("button");
    const headerP = document.querySelector("#counter");
    let flashingEmojis = 3;
    let randomEmoji = 0;
    let memory = [];
    let playerMove = false;
    const touchDevice =
        "ontouchstart" in window ||
        navigator.maxTouchPoints > 0 ||
        navigator.msMaxTouchPoints > 0;

    function gamePlay(counter) {
        playerMove = false;
        randomEmoji = Math.floor(Math.random() * 9);
        emojis[randomEmoji].classList.add("flash");
        if (counter) {
            memory.push(randomEmoji);
            setTimeout(() => {
                emojis[randomEmoji].classList.remove("flash");
            }, 700);
            setTimeout(() => gamePlay(--counter), 800);
        } else {
            playerMove = true;
            emojis[randomEmoji].classList.remove("flash");
        }
    }

    const handlePlayerMove = (index) => {
        if (playerMove) {
            if (memory[0] === index) {
                memory.shift();
                if (memory.length === 0) {
                    playerMove = false;
                    clearFields();
                    greenFields();
                    ++flashingEmojis;
                    headerP.textContent = flashingEmojis;
                    setTimeout(() => gamePlay(flashingEmojis), 2000);
                }
            } else {
                playerMove = false;
                memory = [];
                clearFields();
                redFields();
                flashingEmojis = 3;
                headerP.style.display = "none";
                headerP.textContent = flashingEmojis;
                button.style.display = "inline-block";
            }
        }
    };

    button.addEventListener("click", () => {
        gamePlay(flashingEmojis);
        button.style.display = "none";
        headerP.style.display = "flex";
    });

    emojis.forEach((item, index) => {
        item.addEventListener(touchDevice ? "touchstart" : "click", () => {
            handlePlayerMove(index);
        });
    });

    if (!touchDevice) {
        emojis.forEach((item) => {
            item.addEventListener("mouseover", () => {
                if (playerMove) {
                    item.classList.add("flash");
                }
            });
        });

        emojis.forEach((item) => {
            item.addEventListener("mouseleave", () => {
                if (playerMove) {
                    item.classList.remove("flash");
                }
            });
        });
    }

    function clearFields() {
        emojis.forEach((item) => {
            item.classList.remove("flash");
        });
    }

    function removeAllClasses() {
        emojis.forEach((item) => {
            item.classList.remove("flash");
            item.classList.remove("red");
            item.classList.remove("green");
        });
    }

    function redFields() {
        emojis.forEach((item) => {
            item.classList.add("red");
        });
        setTimeout(removeAllClasses, 1000);
    }

    function greenFields() {
        emojis.forEach((item) => {
            item.classList.add("green");
        });
        setTimeout(removeAllClasses, 1000);
    }
})();
