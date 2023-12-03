<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yoo</title>
    <link href="/dist/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">

    <div class="container" style="width: 80%; margin: 0 auto;">

        <header style="background-color: #333; color: #fff; padding: 10px; display: flex; justify-content: space-between; align-items: center;">

            <div class="logo">
                <h5>Logo</h5>
            </div>

            <nav>
                <ul style="list-style: none; display: flex;">
                    <li style="margin-right: 20px;"><a href="#" style="text-decoration: none; color: #fff; font-weight: bold;">Menu-item 1</a></li>
                    <li style="margin-right: 20px;"><a href="#" style="text-decoration: none; color: #fff; font-weight: bold;">Menu-item 2</a></li>
                    <li><a href="#" style="text-decoration: none; color: #fff; font-weight: bold;">Menu-item 3</a></li>
                </ul>
            </nav>
        </header>

        <main style="padding: 20px 0;">

            <div class="content" style="background-color: #f0f0f0; padding: 20px;">

                <h1 style="color: #333; font-size: 2em; margin-bottom: 10px;">Welkom bij Mijn Website</h1>

                <p style="color: #555; margin-bottom: 10px;">Dit is een voorbeeldtekst in het contentgedeelte van de website. Je kunt deze ruimte gebruiken om je eigen inhoud toe te voegen.</p>

                <p style="color: #555;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod augue vel ipsum laoreet, a varius dolor interdum. Fusce vel arcu sed velit vestibulum consectetur ut eget metus. Nulla facilisi. Praesent vel elit nec nisl pharetra blandit ut id turpis. Sed vel nisi sit amet quam tincidunt vestibulum. Nunc efficitur volutpat justo, ac convallis purus ultrices a. Sed non tortor a nisl feugiat cursus.</p>
            </div>
        </main>

        <footer style="background-color: #333; color: #fff; text-align: center; padding: 10px; position: absolute; bottom: 0; width: 100rem;">
            <p>&copy; {{ date('Y') }} Jouw Bedrijfsnaam. Alle rechten voorbehouden.</p>
        </footer>
    </div>

</body>
</html>
