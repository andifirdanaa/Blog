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
                        <h4 class="card-title">Post</h4>
                        <div class="right">
                            <a href="{{route('posts.create')}} " class="btn btn-sm btn-primary">Add Posts</a>
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