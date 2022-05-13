@extends('records.layout')
@section('content')

    <div class="container p-3">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
    </div>
    <div class="d-grid">
        <a href="{{ url('/login') }}" class="btn btn-outline-success" type="button" title="Add New record">
            <i class="fa fa-plus" aria-hidden="true"></i> Add new record
        </a>
    </div>


    <div class="container p-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Records overview</h3>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>E-mail</th>
                                    <th>City</th>
                                    <th>Animal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->firstname }}</td>
                                        <td>{{ $item->lastname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->animal }}</td>
                                        <td>

                                            <a href="{{ url('/records/' . $item->id . '/edit') }}" title="Edit records">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i>
                                                    Wijzigen
                                                </button>
                                            </a>
                                            <form method="POST" action="{{ url('/records' . '/' . $item->id) }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete records"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Verwijderen
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
        </div>
    </div>
@endsection
