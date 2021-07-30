const filesToCache = [
    "/",
    "/index.html",
    "/styles/style.css",
    "/scripts/elephant.js",
    "/games.json",
    "/images/Braintrainer.PNG",
    "/images/Memory.PNG",
    "/images/RabbitTracker.PNG",
    "/images/SpaceInvaders.PNG",
    "/images/sudoku.PNG",
    "/no-connection.html",
];

const cacheName = "sw-lpf-games-v16";

self.addEventListener("install", function (event) {
    event.waitUntil(
        caches.open(cacheName).then(function (cache) {
            return cache.addAll(filesToCache);
        })
    );
});

self.addEventListener("fetch", function (event) {
    event.respondWith(
        caches
            .match(event.request)
            .then((response) => {
                if (response) {
                    return response;
                }
                return fetch(event.request).then(function (response) {
                    var clone = response.clone();
                    caches.open(cacheName).then(function (cache) {
                        cache.put(event.request, clone);
                    });
                    return response;
                });
            })
            .catch(function () {
                return caches.match("/no-connection.html");
            })
    );
});

self.addEventListener("activate", function (event) {
    var cacheWhitelist = [cacheName];

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
