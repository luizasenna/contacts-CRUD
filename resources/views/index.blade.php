@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">{{ __('Contacts Dashboard') }}
                  @auth
                   <a href="/contact/add" class="btn btn-secondary" role="button" aria-pressed="true">Add new contact</a>
                   @endauth
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div class="m-3">

                        <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            @auth
                            <th scope="col">Actions</th>
                            @endauth
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($contacts as $c)
                            <tr>
                              <th scope="row">{{$c->id}}</th>
                              <td>{{$c->name}}</td>
                              @auth
                              <td>                            
                                  <div>
                                        <a href="/contact/show/{{$c->id}}" class="btn btn-outline-info" role="button" aria-pressed="true">Show</a>
                                        <a href="/contact/edit/{{$c->id}}" class="btn btn-outline-secondary" role="button" aria-pressed="true">Edit</a>
                                        <a href="/contact/delete/{{$c->id}}" class="btn btn-danger " role="button" aria-pressed="true">Delete</a>
                                  </div>
                              </td>
                              @endauth
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
