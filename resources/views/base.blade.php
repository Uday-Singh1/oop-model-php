<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="/dist/app.css" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen">

    <div class="bg-gray-800 text-white py-2">
        <div class="container mx-auto lg:w-3/4 xl:w-2/3 flex-grow">
            @include('_header')
        </div>
    </div>

    <div class="container mx-auto lg:w-3/4 xl:w-2/3 flex-grow">
        <main class="p-4 md:p-8 lg:p-12 flex-grow">
            <div class="content bg-gray-200 p-4 md:p-8 lg:p-12">

                <h1 class="text-gray-700 text-3xl lg:text-4xl xl:text-5xl mb-6 lg:mb-8 font-bold">Welkom bij het Amsterdam-BMV</h1>

                <h4 class="text-gray-700 text-1xl lg:text-2xl xl:text-3xl mb-6 lg:mb-8 font-bold ">Bijdragen aan een toekomstbestendige stad</h4>

                <h5 class="text-gray-700 text-2xl lg:text-1xl xl:text-2xl mb-6 lg:mb-8 font-bold ">Een sociaal-duurzaam Amsterdam</h5>

                <p class="text-gray-600 mb-6 lg:mb-8">Voor veel mensen is en blijft Amsterdam een zeer aantrekkelijke plek om te wonen en dus blijven we bouwen aan de groei van de stad.</p>

                <p class="text-gray-600">Maar Amsterdam bestaat natuurlijk uit méér dan alleen woningen. Daarom bouwen we aan een sociaal-duurzaam Amsterdam: een stad die het welzijn van haar bewoners belangrijk vindt en verbetert,
                     door niet alleen woningen te bouwen maar ook te zorgen voor maatschappelijke voorzieningen, voor huidige bewoners en toekomstige generaties.

                </p>
            </div>
        </main>
    </div>

    @include('_footer')


</body>

</html>
