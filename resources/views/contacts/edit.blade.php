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
                      <h4>Update contact:</h4>

                      <section class="content">

                    	<div class="row">
                    		<div class="col-md-12">


                    					<form class="form-horizontal" method="POST" action="{{ route('update') }}">

                    						{{ csrf_field() }}
                                <input type="hidden" name="id" class="form-control"
                                aria-describedby="Name" required value="{{$contact->id}}">
                                <div class="row m-3 align-items-center">
                                    <div class="col-sm-1">
                                     <label for="name" class="col-form-label">Name</label>
                                    </div>
                                    <div class="col-sm-11">
                                     <input type="text" name="name" class="form-control"
                                     aria-describedby="Name" required value="{{$contact->name}}">
                                    </div>
                                </div>
                                <div class="row m-3 align-items-center">
                                    <div class="col-sm-1">
                                     <label for="contact" class="col-form-label">Contact</label>
                                    </div>
                                    <div class="col-sm-11">
                                     <input type="text" name="contact" class="form-control"
                                     aria-describedby="Contact" required value="{{$contact->contact}}">
                                    </div>
                                </div>
                                <div class="row m-3 align-items-center">
                                    <div class="col-sm-1">
                                     <label for="email" class="col-form-label">Email</label>
                                    </div>
                                    <div class="col-sm-11">
                                     <input type="text" name="email" class="form-control"
                                     aria-describedby="Email" required value="{{$contact->email}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                  <button class="btn btn-info" type="submit">Update</button>
                                </div>



                    					</form>


                    		</div>
                    	</div>

                    </section>


                    </div>

                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
