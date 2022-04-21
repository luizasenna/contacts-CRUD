@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-info text-white">{{ __('Contacts Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello there,  <b></b>

                    <div class="m-3">

                        <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($contacts as $c)
                            <tr>
                              <th scope="row">{{$c->id}}</th>
                              <td>{{$c->name}}</td>
                              <td>{{$c->contact}}</td>
                              <td>{{$c->email}}</td>
                              <td>

                                  <div>
                                        <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">Edit</a>
                                        <a href="#" class="btn btn-danger " role="button" aria-pressed="true">Delete</a>
                                  </div>

                              </td>
                            </tr>
                          @endforeach


                        </tbody>
                      </table>
                </div>

                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
