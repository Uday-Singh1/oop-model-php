<label class="block">
    <span class="text-gray-700 dark:text-white">titel</span>
    <input type="text" value="{{old('titel', $project->titel) }}" name="titel" class="mt-1 block w-full dark:text-black" placeholder="Enter project title">
    @error('titel')
    <p class="text-red">{{$message}}</p>
    @enderror
</label>
<label class="block">
    <span class="text-gray-700 dark:text-white">Description</span>
    <textarea name="description" class="mt-1 block w-full dark:text-black" rows="3" placeholder="Enter project description">{{ old('description', $project->description) }}</textarea>

    @error('description')
    <p class="text-red">{{$message}}</p>
    @enderror
</label>
<div class="block">
    <div class="mt-2">
        <div>
            <label class="inline-flex items-center">
                <input type="checkbox" value="1" name="published" @if(old('published', $project->published)) checked @endif>
                <span class="ml-2 dark:text-black">Publish</span>
            </label>
        </div>
    </div>
</div>