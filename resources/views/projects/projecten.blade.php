<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/app.css" rel="stylesheet">
  <title>Projecten</title>
</head>
<body class="flex flex-col min-h-screen">


@include('_header')

  <section class="my-8 container mx-auto p-6 bg-white rounded shadow-md flex-1">
    <h2 class="text-3xl mb-4 font-bold">Onze Projecten</h2>

    <div class="flex flex-wrap gap-4">

      <div class="border p-4 rounded flex flex-col items-center">
        <img src="https://www.bmv.nl/wp-content/uploads/2017/04/BMV-Impressie-1024x640.jpg" alt="Project 1" class="mb-2 rounded-md w-full h-32 object-cover">
        <h3 class="text-xl font-semibold mb-2">Project 1</h3>
        <p>Beschrijving van project 1.</p>
      </div>

      <div class="border p-4 rounded flex flex-col items-center">
        <img src="https://www.bmv.nl/wp-content/uploads/2021/10/Blerick-AI02.jpg" alt="Project 2" class="mb-2 rounded-md w-full h-32 object-cover">
        <h3 class="text-xl font-semibold mb-2">Project 2</h3>
        <p>Beschrijving van project 2.</p>
      </div>

      <div class="border p-4 rounded flex flex-col items-center">
        <img src="https://www.bmv.nl/wp-content/uploads/2020/01/2-600x400.jpg" alt="Project 3" class="mb-2 rounded-md w-full h-32 object-cover">
        <h3 class="text-xl font-semibold mb-2">Project 3</h3>
        <p>Beschrijving van project 3.</p>
      </div>

      <div class="border p-4 rounded flex flex-col items-center">
        <img src="https://www.bmv.nl/wp-content/uploads/2018/10/BMV-2018-02-1024x576.jpg" alt="Project 4" class="mb-2 rounded-md w-full h-32 object-cover">
        <h3 class="text-xl font-semibold mb-2">Project 4</h3>
        <p>Beschrijving van project 4.</p>
      </div>


      <div class="border p-4 rounded flex flex-col items-center">
        <img src="https://www.amsterdam.nl/publish/pages/1022060/amsterdam_museum_220x220.jpg" alt="Project 4" class="mb-2 rounded-md w-full h-32 object-cover">
        <h3 class="text-xl font-semibold mb-2">Project 5</h3>
        <p>Beschrijving van project 5.</p>
      </div>


      <div class="border p-4 rounded flex flex-col items-center">
        <img src="https://www.amsterdam.nl/publish/pages/1022060/sportpark_goed_genoeg_clubgebouw_afc_220x220.jpg" alt="Project 4" class="mb-2 rounded-md w-full h-32 object-cover">
        <h3 class="text-xl font-semibold mb-2">Project 6</h3>
        <p>Beschrijving van project 6.</p>
      </div>

    </div>
  </section>

  @include('_footer')


</body>
</html>
