self.addEventListener("install", function (event) {
    event.waitUntil(
        caches.open("lpf-games").then(function (cache) {
            return cached.addAll([
                "/",
                "/index.html",
                "/style.css",
                "/elephant.js",
                "/games.json",
                "/Braintrainer.PNG",
                "/Memory.PNG",
                "/RabbitTracker.PNG",
                "/SpaceInvaders.PNG",
                "/sudoku.PNG",
            ]);
        })
    );
});

self.addEventListener("fetch", function (event) {
    event.respondWith(
        caches.match(event.request).catch(function () {
            return fetch(event.request);
        })
    );
});
