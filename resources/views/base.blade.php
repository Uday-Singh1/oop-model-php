<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yoo</title>
    <link href="/dist/app.css" rel="stylesheet">

</head>
<body class="font-sans antialiased leading-none m-0 p-0 h-full flex flex-col">

    <div class="flex flex-col min-h-screen">

        <div class="container mx-auto lg:w-3/4 xl:w-2/3 flex-grow">

            <header class="bg-gray-800 text-white py-2 flex justify-between items-center">

                <div class="logo">
                    <h5>Logo</h5>
                </div>

                <nav>
                    <ul class="flex list-none">
                        <li class="mr-4"><a href="#" class="no-underline text-white font-bold">Menu-item 1</a></li>
                        <li class="mr-4"><a href="#" class="no-underline text-white font-bold">Menu-item 2</a></li>
                        <li><a href="#" class="no-underline text-white font-bold">Menu-item 3</a></li>
                    </ul>
                </nav>
            </header>

            <main class="p-4 md:p-8 lg:p-12 flex-grow">

                <div class="content bg-gray-200 p-4 md:p-8 lg:p-12">

                    <h1 class="text-gray-700 text-2xl lg:text-3xl xl:text-4xl mb-6 lg:mb-8">Welkom bij Mijn Website</h1>

                    <p class="text-gray-600 mb-6 lg:mb-8">Dit is een voorbeeldtekst in het contentgedeelte van de website. Je kunt deze ruimte gebruiken om je eigen inhoud toe te voegen.</p>

                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod augue vel ipsum laoreet, a varius dolor interdum. Fusce vel arcu sed velit vestibulum consectetur ut eget metus. Nulla facilisi. Praesent vel elit nec nisl pharetra blandit ut id turpis. Sed vel nisi sit amet quam tincidunt vestibulum. Nunc efficitur volutpat justo, ac convallis purus ultrices a. Sed non tortor a nisl feugiat cursus.</p>
                </div>
            </main>

        </div>

        <footer class="bg-gray-800 text-white text-center py-2">
            <p>&copy; {{ date('Y') }} Jouw Bedrijfsnaam. Alle rechten voorbehouden.</p>
        </footer>

    </div>

</body>

</html>
