(function(){
    const canvas = document.querySelector("canvas");
    if (!canvas) {
        return;
    }

    const ctx = canvas.getContext("2d");
    const cells = 8;
    let cellWidth = 50;
    let offsetLeft = 0;
    let offsetTop = 0;
    const mouse = {
        x: null,
        y: null,
    };
    let animationId;

    const colors = {
        first: "#FFC947",
        second: "#185ADB",
        third: "#EFEFEF",
    };

    const draw = () => {
        //ctx.fillRect(4 * cellWidth, 0, 2 * cellWidth, 6 * cellWidth);
        // ctx.fillRect(
        //     6 * cellWidth,
        //     2 * cellWidth,
        //     2 * cellWidth,
        //     6 * cellWidth
        // );
        ctx.fillRect(
            1 * cellWidth,
            0 * cellWidth,
            3 * cellWidth,
            3 * cellWidth
        );
        //Back
        // ctx.fillStyle = colors.third;
        // ctx.fillRect(
        //     6 * cellWidth,
        //     2 * cellWidth,
        //     2 * cellWidth,
        //     1 * cellWidth
        // );
        // fillArc(colors.third, 6, 2, 1.5, 2, 2);
        // fillArc(colors.second, 6, 2, 1.5, 2);
        // fillArc(colors.first, 7, 2, 0.5, 1);
        // fillArc(colors.first, 7, 3, 0.5, 1);
        // fillArc(colors.first, 7, 3, 0, 0.5);

        //trunk
        ctx.fillStyle = colors.third;
        ctx.fillRect(2 * cellWidth, 0, 1 * cellWidth, 5 * cellWidth);
        fillArc(colors.first, 2, 5, 0, 1);
        fillArc(colors.second, 2, 5, 1.5, 2);

        //Head
        fillArc(colors.first, 1, 1, 1, 1.5, 1);
        fillArc(colors.third, 1, 0, 0, 0.5);
        fillArc(colors.second, 2, 0, 0, 0.5);
        fillArc(colors.second, 3, 0, 0, 0.5);
        fillArc(colors.first, 4, 1, 1.5, 2);
        ctx.fillRect(
            0 * cellWidth,
            1 * cellWidth,
            1 * cellWidth,
            1 * cellWidth
        );
        ctx.fillStyle = colors.second;
        ctx.fillRect(
            4 * cellWidth,
            1 * cellWidth,
            1 * cellWidth,
            1 * cellWidth
        );
        fillArc(colors.first, 1, 2, 0.5, 1);
        ctx.fillStyle = colors.second;
        ctx.fillRect(
            1 * cellWidth,
            2 * cellWidth,
            1 * cellWidth,
            1 * cellWidth
        );
        fillArc(colors.first, 4, 2, 0, 0.5);
        ctx.fillRect(
            3 * cellWidth,
            2 * cellWidth,
            1 * cellWidth,
            1 * cellWidth
        );

        //legs
        // fillArc(colors.first, 4.25, 6, 1, 2, 0.25);
        // fillArc(colors.first, 4.75, 6, 1, 2, 0.25);
        // fillArc(colors.first, 5.25, 6, 1, 2, 0.25);

        // fillArc(colors.first, 6.25, 6, 1, 2, 0.25);
        // fillArc(colors.first, 6.75, 6, 1, 2, 0.25);
        // fillArc(colors.first, 7.25, 6, 1, 2, 0.25);
    };

    const moveEyes = () => {
        fillArc("#ffffff", 1.5, 1.5, 0, 2, 0.5);
        fillArc("#ffffff", 3.5, 1.5, 0, 2, 0.5);
        const angleLeft = Math.atan2(
            mouse.y - (offsetTop + 1.5 * cellWidth),
            mouse.x - (offsetLeft + 1.5 * cellWidth)
        );
        const angleRight = Math.atan2(
            mouse.y - (offsetTop + 1.5 * cellWidth),
            mouse.x - (offsetLeft + 3.5 * cellWidth)
        );
        let irisLeftX = 1.5 * cellWidth + (Math.cos(angleLeft) * cellWidth) / 5;
        let irisLeftY = 1.5 * cellWidth + (Math.sin(angleLeft) * cellWidth) / 5;
        let irisRightX =
            3.5 * cellWidth + (Math.cos(angleRight) * cellWidth) / 5;
        let irisRightY =
            1.5 * cellWidth + (Math.sin(angleRight) * cellWidth) / 5;
        fillArc(
            "#000000",
            irisLeftX / cellWidth,
            irisLeftY / cellWidth,
            0,
            2,
            0.25
        );
        fillArc(
            "#000000",
            irisRightX / cellWidth,
            irisRightY / cellWidth,
            0,
            2,
            0.25
        );
        animationId = requestAnimationFrame(moveEyes);
    };

    const fillArc = (
        color,
        x,
        y,
        startAngle,
        endAngle,
        width = 1,
        anticlockwise = false
    ) => {
        ctx.beginPath();
        ctx.fillStyle = color;
        ctx.moveTo(x * cellWidth, y * cellWidth);
        ctx.arc(
            x * cellWidth,
            y * cellWidth,
            width * cellWidth,
            startAngle * Math.PI,
            endAngle * Math.PI,
            anticlockwise
        );
        ctx.fill();
    };

    const canvasSize = () => {
        cancelAnimationFrame(animationId);
        if (window.innerWidth >= 250) {
            cellWidth = 50;
            canvas.width = 250;
            canvas.height = 300;
        } else {
            cellWidth = Math.floor(window.innerWidth / cells);
            canvas.width = cellWidth * cells;
            canvas.height = cellWidth * cells * 0.75;
        }
        offsetLeft = canvas.getBoundingClientRect().left + window.scrollX;
        offsetTop = canvas.getBoundingClientRect().top + window.scrollY;
        draw();
        animationId = requestAnimationFrame(moveEyes);
    };

    canvasSize();

    document.addEventListener("mousemove", function (e) {
        mouse.x = e.x;
        mouse.y = e.y;
    });

    window.addEventListener("resize", function () {
        canvasSize();
    });
})();
