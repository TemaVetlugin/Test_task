@extends('layouts.main')

@section('content')

<h1 class="mb-4">Stories list</h1>

<a href="{{ route('create') }}" class="btn btn-primary mb-3" style="width: 150px;">Add</a>

@foreach ($stories as $story)
<h1 class="mb-2">Story  {{ $story->id }}</h1>
<h5 class="mb-1">
    {{ $story->story }}
</h5>
<p class="text-secondary">created at {{ $story->created_at }}</p>
<hr>
    
@endforeach

@endsection