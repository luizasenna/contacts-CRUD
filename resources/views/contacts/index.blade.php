@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-info text-white">{{ __('Contacts Dashboard') }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div class="m-3">

                        <table class="table">


                        <tbody>

                            <tr>
                              <th>ID</th><td scope="row">{{$contact->id}}</td>
                            </tr>
                            <tr>
                              <th>Name</th><td>{{$contact->name}}</td>
                            </tr>
                              <th>Contact</th><td>{{$contact->contact}}</td>
                            <tr>
                              <th>Email</th><td>{{$contact->email}}</td>
                            </tr>
                            <tr>
                              <th>Actions</th>
                              <td>
                                  <div>
                                        <a href="/home" class="btn btn-outline-info" role="button" aria-pressed="true">Back</a>
                                        <a href="/contact/edit/{{$contact->id}}" class="btn btn-outline-secondary" role="button" aria-pressed="true">Edit</a>
                                        <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                  </div>

                              </td>
                            </tr>



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
