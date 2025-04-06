<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $strToTitle($name) . ", Level Coding $data->level" ?></title>
    <meta name="description" content="<?= $data->description ?>">
    <meta property="og:image" content="<?= $gif ?>" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white flex items-center justify-center w-screen h-screen">

    <div class="bg-gray-800 rounded-2xl shadow-lg p-6 max-w-sm w-full text-center">
        <h3 class="text-3xl font-bold mb-2 line-clamp-3"><?= "Hallo " . $strToTitle($name) ?></h3>
        <img src="<?= $gif ?>" alt="Card Image" class="w-full h-48 object-cover rounded-xl mb-4">

        <h2 class="text-xl font-bold mb-2"><?= $data->title ?></h2>
        <p class="text-sm text-gray-400 mb-2">Level Coding: <?= $data->level ?></p>
        <p class="text-base"><?= $data->description ?></p>
    </div>

</body>

</html>