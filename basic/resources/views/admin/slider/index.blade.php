@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container">
        
            <div class="d-flex justify-content-between">
                <h4>Home Slider</h4>
                <a href="{{ route('add.slider') }}">
                <button class="btn btn-info">Add Slider</button>
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
               
                    <div class="card-header">All Slider</div>
                    <table class="table ">
        
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col" width="15%">Title</th>
                                    <th scope="col" width="15%">Description</th>
                                    <th scope="col" width="15%">Image</th> 
                                    <th scope="col" width="15%">Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($sliders as $slider)
                                <tr>
                                <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $slider->title}}</td>
                                    <td>{{ $slider->description}}</td>
                                    <td>
                                        <img src="{{ asset($slider->image)}}" style="height: auto; width: 70px;">
                                    </td>
                                   
                                    <td>
                                    <a href="{{ url('slider/edit/'.$slider->id )}}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('slider/delete/'.$slider->id )}}" onclick="return confirm('Are you sure to Delete')"
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
