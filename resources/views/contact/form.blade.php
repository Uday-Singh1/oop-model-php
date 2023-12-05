<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/app.css" rel="stylesheet">
  <title>Document</title>
</head>
<body class="flex flex-col min-h-screen">

@include('_header')

<section class="my-8 container mx-auto p-6 bg-white rounded shadow-md flex-1">
  <h2 class="text-3xl mb-4 font-bold">Contactinformatie</h2>

  <div class="mb-6">
    <h3 class="text-xl mb-2 font-semibold">Bezoekadres</h3>
    <p>Weesperstraat 432<br>
      1018 DN Amsterdam<br>
      E: info.pmb@amsterdam.nl</p>
  </div>

  <div class="mb-6">
    <h3 class="text-xl mb-2 font-semibold">Postadres</h3>
    <p>Postbus 1269<br>
      1000 BG Amsterdam</p>
  </div>

  <div class="mb-6">
    <h3 class="text-xl mb-2 font-semibold">Informatie over inhuur</h3>
    <p>Neem contact op met Dilia Schouten van de afdeling Markt en Capaciteit:<br>
      E: d.schouten@amsterdam.nl</p>
  </div>

  <div>
    <h3 class="text-xl mb-2 font-semibold">Zie ook</h3>
    <ul class="list-disc pl-6">
      <li>Klachten</li>
      <li>Routebeschrijving</li>
    </ul>
  </div>
</section>

@include('_footer')

</body>
</html>



