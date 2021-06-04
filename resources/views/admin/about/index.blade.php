@extends('admin.admin_master')

@section('admin')

<div class="py-12">
   <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="float-left">Home About </h4>
                <a href="{{ route('add.about') }}" class="float-right"> <button class="btn btn-sm btn-info">Add About</button>  </a>
            </div>
            <br><br>

            <div class="col-md-12">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card-header"> All Abouts </div>


                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" width="5%">SL </th>
                            <th scope="col" width="15%">About Title</th>
                            <th scope="col" width="15%">Short Description</th>
                            <th scope="col" width="25%">Details Description</th>
                            <th scope="col" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php($i = 1)
                                @foreach($abouts as $about)
                            <tr>
                            <th scope="row"> {{ $i++  }} </th>
                            <td> {{ $about->title }} </td>
                            <td> {{ $about->short_dis }} </td>
                            <td> {{ $about->log_dis }}</td>

                                <td>
                                    <a href="{{ route('edit.about',$about->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('delete.about',$about->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

@endsection
