 @extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tables'
])

@section('content')
  <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Post') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">{{ __('Add Post') }}</a>
                                </div>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Tittle
                                    </th>
                                    <th>
                                        User
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            {{$post->id}}
                                        </td>
                                        <td>
                                            {{$post->tittle}}
                                        </td>
                                        <td>
                                            {{$post->user->name}}
                                        </td>
                                        <td class="text-right">
                                            <a target ="_blank" href="/singlepost/{{$post->id}}" class="btn btn-info btn-sm">View</a>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endsection