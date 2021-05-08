@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container">
        
            <div class="d-flex justify-content-between">
                <h4>Message</h4>
                
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
               
                    <div class="card-header">All Message</div>
                    <table class="table ">
        
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col" width="15%">Name</th>
                                    <th scope="col" width="15%">Email</th>
                                    <th scope="col" width="15%">Subject</th> 
                                    <th scope="col" width="15%">Message</th> 
                                    <th scope="col" width="15%">Action </th> 
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($messages as $message)
                                <tr>
                                <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $message->name}}</td>
                                    <td>{{ $message->email}}</td>
                                    <td>{{ $message->subject}}</td>
                                    <td>{{ $message->message}}</td>
                                  
                                    <td>                                    
                                    <a href="{{ url('message/delete/'.$message->id )}}" onclick="return confirm('Are you sure to Delete')"
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
