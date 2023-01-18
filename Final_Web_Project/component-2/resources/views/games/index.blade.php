@extends('games.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">games</div>
                    <div class="card-body">
                    @can('administrator')
                        <a href="{{ url('/game/create') }}" class="btn btn-success btn-sm" title="Add New">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a class="btn btn-success btn-sm" href="{{ route('dashboard') }}"> Back</a>
                        <form method="POST" action="{{route('searchGame')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="search" id="" class="form-control" placeholder="" arial-describedby="helpId" placeholder="Search by author or title">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form> 
                        @endcan
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Console</th>
                                        <th>Title</th>
                                        <th>Pegi</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($games as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->console }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->pegi }}</td>
                                        <td>{{ $item->price }}</td>
                                        @can('administrator')
                                        <td width= "310">
                                            <a href="{{ url('/game/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/game/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/game' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                        @endcan
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
        {{$games->links()}}
    </div>
@endsection