<!DOCTYPE html>
<html lang="en">
<link href="/dist/app.css" rel="stylesheet">
<head>
</head>
<body class="flex flex-col min-h-screen">

@include('_header')
<section class="my-8 container mx-auto p-6 bg-white rounded shadow-md flex-1">
    <h2 class="text-3xl mb-4 font-bold">Project Details</h2>

    <div class="border p-4 rounded flex flex-col items-center">
        <a href="{{ url()->previous() }}" class="mb-4 px-4 py-2 bg-gray-800 text-white rounded hover:bg-blue-600">Terug</a>
        <img src="https://www.bmv.nl/wp-content/uploads/2017/04/BMV-Impressie-1024x640.jpg" alt="Project Image" class="mb-2 rounded-md w-500 h-300 object-cover">
        <h3 class="text-xl font-semibold mb-2">{{$project->titel}}</h3>
        <p>{{$project->description}}</p>
        <h2>{{$project->text}}</h2> 
    </div>
</section>

@include('_footer')

</body>
</html>