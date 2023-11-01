@extends('layouts.adminpanel.master')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">About</h1>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                @php
                    Alert::toast($error,'error')
                @endphp
            @endforeach
        @endif
        <div class="row">
            <form action="{{ route('about.update') }}" method="post" enctype="multipart/form-data">
                {{--  {{ route('contact.update') }}  --}}
            @csrf
            <input type="hidden" name="abouts_id" value="{{$abouts->id }}">
            <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Heading</label>
                            <input name="heading" value="{{$abouts->heading }}" type="text" class="form-control" required  placeholder="Enter Heading">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Content</label>
                            <input name="content" value="{{ $abouts->content }}" type="text" class="form-control" required  placeholder="Enter Content">
                        </div>
                    </div>


                </div>

                <!-- Text input -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
            </form>
        </div>
    </div>
</main>
{{--  <script>
    photo.onchange = evt => {
        const [file] = photo.files
        if (file) {
            blah.style = 'display:block',
                blah.src = URL.createObjectURL(file)
        }
    }
</script>  --}}

@endsection
