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
    @foreach($projects as $project)
      <div class="border p-4 rounded flex flex-col items-center">
        <img src="https://www.bmv.nl/wp-content/uploads/2017/04/BMV-Impressie-1024x640.jpg" alt="Project 1" class="mb-2 rounded-md w-full h-32 object-cover">
        <h3 class="text-xl font-semibold mb-2">{{$project->titel}}</h3>
        <p>{{$project->description}}</p>
      </div>
      
      @endforeach
    </div>
  </section>

  @include('_footer')


</body>
</html>
