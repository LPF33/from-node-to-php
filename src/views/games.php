<?php 
    $games = [
        [
           'name' => 'Sudoku',
            'description' => 'Sudoku is played on a grid of 9 x 9 spaces. Within the rows and columns are 9 squares. Each row, column and square needs to be filled out with the numbers 1-9, without repeating any numbers within the row, column or square. ',
            'image' => '/images/sudoku.PNG',
            'href' => '/sudoku'
        ],
        [
            'name' => 'Memory',
            'description' => 'Who does not know memory? Find all pairs! You can decide how many pairs (16-50). Either choose pictures or numbers or colors (impossible!).',
            'image' => '/images/Memory.PNG',
            'href' => '/memory'
        ],
        [
            'name' => 'BrainTrainer',
            'description' => 'Press play! Memorize the flashed emojis, afterwards click the flashed emojis. And so on! You start with three flasing emojis.',
            'image' => '/images/Braintrainer.PNG',
            'href' => '/braintrainer'
        ],
        [
            'name' => 'SpaceInvaders',
            'description' => 'The classical Shoot\'em up game. Don\'t let the invaders conquer the world! Control it with left and right arrow keys or with the mouse. Shoot => space-key or mouse left-click. Touch control also possible!',
            'image' => '/images/SpaceInvaders.PNG',
            'href' => '/space-invaders'
        ],
        [
            'name' => 'RabbitTracker',
            'description' => 'It is played like the classic game Minesweeper. Find the fields, where the rabbits are hiding and surround them.',
            'image' => '/images/RabbitTracker.PNG',
            'href' => '/rabbit-tracker'
        ]
    ];

    $title = "Old Games";
    $extra_css = <<<EOT
    <link rel="stylesheet" href="/styles/glide.core.min.css">
    <link rel="stylesheet" href="/styles/glide.theme.min.css">
    EOT;
    require('partials/header.php'); 
?>

    <main id="games">
        <div class="carousel">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php foreach ($games as $value): ?>
                            <li class="glide__slide">
                                <a href="<?= $value["href"] ?>">
                                    <div>
                                        <h1><?= $value["name"]; ?></h1>
                                        <p><?= $value["description"]; ?></p>
                                    </div>
                                    <picture>
                                        <img src="<?= $value["image"]; ?>" alt="<?= $value["name"]; ?>" />
                                    </picture>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <?php foreach (array_keys($games) as $key): ?>
                        <button class="glide__bullet" data-glide-dir="=<?= $key ?>"></button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <script src="/scripts/glide.min.js"></script>
    <script>
        new Glide('.glide', {
            type: 'carousel',
            animationDuration: 2000,
            perView: 1,
            startAt: 0
        }).mount();
    </script>

<?php require('partials/footer.php'); ?>