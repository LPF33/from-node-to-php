self.addEventListener("install", function (event) {
    event.waitUntil(
        caches.open("lpf-games1").then(function (cache) {
            return cache.addAll([
                "/",
                "/index.html",
                "/style.css",
                "/elephant.js",
                "/games.json",
                "/images/Braintrainer.PNG",
                "/images/Memory.PNG",
                "/images/RabbitTracker.PNG",
                "/images/SpaceInvaders.PNG",
                "/images/sudoku.PNG",
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

this.addEventListener("activate", function (event) {
    var cacheWhitelist = ["lpf-games1"];

    event.waitUntil(
        caches.keys().then(function (keyList) {
            return Promise.all(
                keyList.map(function (key) {
                    if (cacheWhitelist.indexOf(key) === -1) {
                        return caches.delete(key);
                    }
                })
            );
        })
    );
});
