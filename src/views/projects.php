<?php
$projects = [
    [
        "name" => "CSV Read&Write",
        "description" => "Tabular representation of the data from CSV file. Edit and add data to CSV file. Visualize data with a Pie-Chart. Import/Export CSV file",
        "stack" => [
            "PHP",
            "Laravel",
            "Vue3",
            "Composition API",
            "TypeScript"
        ],
        "link" => "https://github.com/LPF33/laravel-vue-csv-app"
    ],
    [
        "name" => "Chrome Extension",
        "description" => "4 features: Tracker, Break, Snippet-Safer, Color-Picker",
        "stack" => ["React", "Context API", "Chrome", "SVG"],
        "link" => "https://github.com/LPF33/first-chrome-extension"
    ],
    [
        "name" => "Shoppy",
        "description" => "Private app. PWA. Shopping list, cook calendar, monthly expenses.",
        "stack" => [
            "Vue",
            "TypeScript",
            "Composition API",
            "Firebase",
            "Testing",
            "Highcharts"
        ],
        "link" => "https://github.com/LPF33/shoppy"
    ],
    [
        "name" => "Guess flag",
        "description" => "Project to demonstrate how Socket.io works. One of my favourite encounters! Multiplayer game for guessing flags. Socket.io rooms, Redis for caching game data for each room.",
        "stack" => ["Express", "Redis", "Socket.io"],
        "link" => "https://github.com/LPF33/guess-flag"
    ],
    [
        "name" => "Vue Puzzle Testing",
        "description" => "Simple Puzzle App with Testing. After building a Testing-Tool with Spiced, I got more and more interested in Testing.",
        "stack" => ["Vue", "Jest", "@vue/test-utils"],
        "link" => "https://github.com/LPF33/puzzle-testing"
    ],
    [
        "name" => "Photo eCommerce-Shop",
        "description" => "Interested in building a responsive Webshop with backend & frontend. Manage stock, handle orders, update shopping cart & implement checkout process.",
        "stack" => [
            "TypeScript",
            "React",
            "Redux",
            "MySQL",
            "Node",
            "JWT",
            "Styled-Components"
        ],
        "link" => "https://github.com/LPF33/OnlinePhotoShop"
    ],
    [
        "name" => "Draw & Guess",
        "description" => "Demonstration for teaching how Socket.io works. One player draws, the others have to guess what it is.",
        "stack" => ["Express", "Socket.io"],
        "link" => "https://github.com/LPF33/draw-guess"
    ],
    [
        "name" => "TypeScript side projects",
        "description" => "Some TypeScript projects like csv-Analyzer, Multiplayer-Racing-Game, eCommerce, Space Invaders, Webscraper and some more.",
        "stack" => [
            "TypeScript",
            "Node",
            "React",
            "PostgreSQL",
            "Socket.io",
            "Cheerio"
        ],
        "link" => "https://github.com/LPF33/TypeScript"
    ],
    [
        "name" => "Travel Stories Network",
        "description" => "Network to share travel stories by pinning it to a map. Upload pictures, connect with other users, send emails. Really nice to work with Mapbox.",
        "stack" => [
            "React",
            "Context API",
            "Node",
            "MongoDB",
            "JWT",
            "Mapbox API",
            "Node-Geocoder",
            "SASS",
            "AWS"
        ],
        "link" => "https://github.com/LPF33/travelstories"
    ],
    [
        "name" => "My old personal website",
        "description" => "This website I build after the bootcamp. I liked the design, the features like the the vinyl with moving arm for different routes, but this website was after a while not maintainable. You live and learn.",
        "stack" => [
            "React",
            "Redux",
            "Express",
            "PostgreSQL",
            "Codemirror",
            "Canvas",
            "Socket.io",
            "AWS"
        ],
        "link" => "https://github.com/LPF33/my-old-website"
    ],
    [
        "name" => "Loom",
        "description" => "Final bootcamp project: Loom Videochat App. Quite a hard task as a newbie to work with WebRTC. Invite people to a private loom chat. Chat includes a whiteboard, build with Canvas API.",
        "stack" => [
            "WebRTC",
            "React",
            "Redux",
            "Node",
            "Socket.io",
            "PostgreSQL",
            "Cookie-Session",
            "HTML Canvas"
        ],
        "link" => "https://github.com/LPF33/loom"
    ],
    [
        "name" => "Browser Games",
        "description" => "Some of my browser games, especially during the bootcamp I loved to code games, I challenged myself to program some board games as browser games, due to copyright I did not upload. Uploaded: RabbitTracker, Snake, Sudoku, Memory, BreakOut, ConnectFour, ",
        "stack" => ["JS", "jQuery", "HTML", "CSS"],
        "link" => "https://github.com/LPF33/SampleGames"
    ],
    [
        "name" => "Social Gaming Network",
        "description" => "Bootcamp project: Social network build during bootcamp. Play games!",
        "stack" => [
            "React",
            "Redux",
            "Node",
            "Socket.io",
            "Express",
            "PostgreSQL",
            "Cookie-Session",
            "Csurf",
            "AWS"
        ],
        "link" => "https://github.com/LPF33/SocialNetworkGaming"
    ]
    ];

$title = "About me!";
require('partials/header.php');
?>
    <main id="projects">
        <?php foreach ($projects as $value): ?>
            <a href="<?= $value["link"]; ?>" target="_blank" rel="noopener noreferrer" class="project-card">
                <h4><?= $value["name"]; ?></h4>
                <p><?= $value["description"]; ?></p>  
                <div>
                    <?php foreach ($value["stack"] as $stack): ?>
                        <p><?= $stack; ?></p>
                    <?php endforeach; ?>
                </div>
            </a>
        <?php endforeach; ?>
    </main>
<?php require('partials/footer.php'); ?>