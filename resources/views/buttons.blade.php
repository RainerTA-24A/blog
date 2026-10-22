<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EastBlockN</title>
    @vite('resources/css/app.css')
</head>
<body>
    <a href="/">Home</a>
    <div class="container mx-auto flex gap-3 p-6">
        <button
            type="button"
            class="cursor-pointer rounded-md bg-blue-600 px-3 py-1.5  text-white transition hover:bg-blue-700"
        >
            Primary
        </button>
        <button
            type="button"
            disabled
            class="cursor-not-allowed rounded-md bg-blue-600 px-3 py-1.5  text-white opacity-65"
        >
            Disabled
        </button>
    </div>
</body>
</html>
