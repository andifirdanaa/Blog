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
                        <h4 class="card-title">Materi</h4>
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
                            @if(Auth::user()->rolesDetail->name === 'guru')
                        <div class="right">
                            <a href="{{ route('materi.create')}}" class="btn btn-sm btn-primary">Add Materi</a>
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        File
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
                                    @foreach($materi as $mat)
                                    <tr>
                                        <td>
                                            {{$mat->name}}
                                        </td>
                                        <td>
                                            {{$mat->file}}
                                        </td>
                                        <td>
                                            {{$mat->created_at->format('d-M-Y')}}
                                        </td>
                                        <td>
                                            {{$mat->update_at}}
                                        </td>
                                        <td class="text-right">
                                            <form action="{{route('materi.destroy', $role)}}" method="post">
                                             @csrf
                                             @method('delete')
                                             
                                                <a href="{{route('materi.edit', $role)}}" class="btn btn-sm btn-warning">Edit</a>
                                                        <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this role?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                                                </form>
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