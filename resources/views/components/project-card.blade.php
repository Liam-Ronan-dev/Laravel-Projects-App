{{-- Passing the project data to this component --}}
@props(['project'])

{{-- Creating the project component --}}
<x-card>
    <div class="flex">
        {{-- Checks if an image is in the database -> Else it will use the default image --}}
        <img class="hidden w-48 mr-6 md:block" src="{{$project->image ? asset
        ('storage/' . $project->image) : asset('/images/andras-vas-Bd7gNnWJBkU-unsplash.jpg')}}" alt=""/>
        <div>
            <h3 class="text-2xl font-bold mb-3 mt-3">
                <a href="/projects/{{$project->id}}">{{$project->title}}</a>
            </h3>
            <div class="text-base font-normal mb-3 mt-3">
                <h4>This project was uploaded on {{$project->date_created}}</h4>
            </div>

            <x-project-tags :tagsCsv="$project->tags"/>
            <div class="text-base font-normal mb-3 mt-3">
                <a href="{{$project->website}}"><h4>Visit this projects website</h4></a>
            </div>
        </div>
    </div>
</x-card>