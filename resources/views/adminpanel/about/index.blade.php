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

            {{--  <div class="text-end">
                <a href="{{ route('contact.create') }} " class="btn btn-success">

                   + Add New
                </a>
            </div>  --}}
                {{--  <div class="card mb-4">  --}}
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Page Setting table
                    </div>

                    <div class="box-content">

                    <table class="table" >
                        <thead>
                          <tr>
                            <th >S/N</th>
                            <th >Heading</th>
                            <th >Content </th>
                            <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i= 1;
                            @endphp
                            @foreach($abouts as $about)
                          <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $about->heading }}</td>
                            <td>{{ $about->content }}</td>
                            <td>
                                <a href="{{ route('about.edit',$about->id) }}" class="btn-secondary btn">Edit</a>
                                {{--  {{ route('contact.edit',$contact->id) }}  --}}
                                {{--  <a href="{{route('contact.delete',$contact->id) }}" onclick="return confirm('Are You Sure Delete')"class="btn btn-warning" style="margin-top:10px;">Delete</a>  --}}

                            </td>
                          </tr>
                          @endforeach


                        </tbody>
                      </table>
                </div>


                {{--  </div>  --}}

        </div>
    </main>
    {{--  <script>
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                blah.style = 'display:block',
                    blah.src = URL.createObjectURL(file)
            }
        }
    </script>  --}}

@endsection
