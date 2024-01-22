<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projecten') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-3">Welkom op de projectenpagina.</p>

                    @auth
                        <a href="{{ route('project.create') }}" class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded float-right underline">
                            {{ __('Nieuw project') }}
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Display all projects -->
                    <table class="w-full table-auto p-2 my-3">
                        @foreach($projecten as $project)
                            <tr class="border border-russet">
                                <td class="py-1 px-2">
                                    <a href="{{ route('project.edit', ['project' => $project->id]) }}">
                                        {{ $project->id }} {{ $project->titel }} {{ $project->description }} {{ $project->image }}
                                    </a>
                                    <br>
                                </td>
                                <td class="text-right py-1 px-2 underline px-3">
                                    <a href="{{ route('project.edit', ['project' => $project->id]) }}">bewerk</a></td>
                                <td class="text-right py-1 px-2 underline px-3">
                                <a href="{{ route('project.edit', ['project' => $project->id]) }} ">verwijder</a></td>
                                
                            </tr>
                        @endforeach
                    </table>

                    {{$projecten->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
