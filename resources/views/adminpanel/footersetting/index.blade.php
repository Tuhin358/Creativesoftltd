@extends('layouts.adminpanel.master')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Footer Setting</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    @php
                        Alert::toast($error,'error')
                    @endphp
                @endforeach
            @endif

            {{--  <div class="text-end">
                <a href="{{ route('footer_setting_create') }}" class="btn btn-success">
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
                            <th >Company Brief</th>
                            <th >Facebook Url</th>
                            <th >Twitter Url </th>
                            <th >Instagram Url</th>
                            <th >Pinterest Url</th>
                            <th >Linkedin Url</th>
                            <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i= 1;
                            @endphp
                            @foreach($footersettings as $footersetting)
                          <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $footersetting->company_brief }}</td>
                            <td>{{ $footersetting->facebook_url }} </td>
                            <td>{{ $footersetting->twitter_url }}  </td>
                            <td>{{ $footersetting->instagram_url }}  </td>
                            <td>{{ $footersetting->pinterest_url }}  </td>
                            <td>{{ $footersetting->linkedin_url }}  </td>
                            <td>
                                <a href="{{ route('footer_setting_edit',$footersetting->id) }}" class="btn-secondary btn">Edit</a>
                                {{--  {{ route('footer_setting_edit',$footersetting->id) }}  --}}
                                {{--  <a href="{{ route('footer_setting_delete',$footersetting->id) }}" onclick="return confirm('Are You Sure Delete')"class="btn btn-warning" style="margin-top:10px;">Delete</a>  --}}

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
