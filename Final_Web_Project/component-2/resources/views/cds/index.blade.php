@extends('cds.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">cds</div>
                    <div class="card-body">
                    @can('administrator')
                        <a href="{{ url('/cd/create') }}" class="btn btn-success btn-sm" title="Add New">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a class="btn btn-success btn-sm" href="{{ route('dashboard') }}"> Back</a>
                        <form method="POST" action="{{route('searchCD')}}">
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
                                        <th>Artist</th>
                                        <th>Title</th>
                                        <th>Duration</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cds as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->artist }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->durations }}</td>
                                        <td>{{ $item->price }}</td>
                                        @can('administrator')
                                        <td width = "310">
                                            <a href="{{ url('/cd/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/cd/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/cd' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
        {{$cds->links()}}
    </div>
@endsection