@extends('partials.layout')
@section('content')
     {{ $posts->links() }}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($posts as $post)
            @include('partials.post-card')
        @endforeach
    </div>
@endsection
