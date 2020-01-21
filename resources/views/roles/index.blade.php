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
                        <h4 class="card-title">Roles</h4>
                         @if (session('status'))
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                  </div>
                                </div>
                              </div>
                            @endif
                        <div class="right">
                            <a href="{{ route('role.create')}}" class="btn btn-sm btn-primary">Add Roles</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Creation Date
                                    </th>
                                    <th>
                                        Update Date
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                    <tr>
                                        <td>
                                            {{$role->name}}
                                        </td>
                                        <td>
                                            {{$role->created_at->format('d-M-Y')}}
                                        </td>
                                        <td>
                                            {{$role->update_at}}
                                        </td>
                                        <td class="text-right">
                                            <a href="{{route('role.edit', $role)}}" class="btn btn-sm btn-warning">Edit</a>
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