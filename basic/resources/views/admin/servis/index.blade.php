@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container">
        
            <div class="d-flex justify-content-between">
                <h4>Home Service</h4>
                <a href="{{ route('add.servis') }}">
                <button class="btn btn-info">Add Service</button>
                </a>
            </div>

            <br/>
            <div class="row">
          
            <div class="col-md-12">
                <div class="card">
                @if(session('success'))
                <div class="alert alert-dismissible fade show alert-success" role="alert">
                    <strong>{{ session('success')}}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
                </div>
                @endif
               
                    <div class="card-header">All Service</div>
                    <table class="table ">
        
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col" width="15%">Title</th>
                                    <th scope="col" width="15%">Service Title</th>
                                    <th scope="col" width="15%">Service Contain</th> 
                                    <th scope="col" width="15%">Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($servis as $serv)
                                <tr>
                                <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $serv->title}}</td>
                                    <td>{{ $serv->servis1_title}}</td>
                                    <td>{{ $serv->servis1_contain}}</td>
                                  
                                   
                                    <td>
                                    <a href="{{ url('servis/edit/'.$serv->id )}}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('servis/delete/'.$serv->id )}}" onclick="return confirm('Are you sure to Delete')"
                                    class="btn btn-danger">Delete</a>
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
