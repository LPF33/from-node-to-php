const filesToCache = [
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
];

const cacheName = "lpf-games2";

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
                return caches.open(cacheName).then((cache) => {
                    cache.put(event.request.url, response.clone());
                    return response;
                });
            })
            .catch(function () {
                return fetch(event.request);
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
