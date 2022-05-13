@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container p-3">
                            @if(session('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                            @endif
                        </div>

                        <div class="container p-3">
                            @if(session('flash_message'))
                                <div class="alert alert-success">{{session('flash_message')}}</div>
                            @endif
                        </div>

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
                                        <td>{{ $item->id }}</td>
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
