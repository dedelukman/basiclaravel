@extends('admin.admin_master')

@section('admin')

<div class="py-12">
        <div class="container">
        
            <div class="d-flex justify-content-between">
                <h4>Home Portfolio</h4>
                
            </div>

            <br/>
            <div class="row">
          
          <div class="col-md-8">
              <div class="card-group">
              @foreach($images as $multi)
                  <div class="col-md-4 m-2">
                      <div class="card">
                          <img src="{{ asset($multi->image)}}" alt="">
                      </div>
                  </div>
              @endforeach
             
              </div>
          </div>

          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">Multi Image</div>
                  <div class="card-body">
                 
                  <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                      
                      <div class="mb-3">
                          <label for="MultiImage" class="form-label">Multi Image</label>
                          <input type="file" class="form-control" name="image[]" id="image"
                           aria-describedby="imageHelp" multiple="">
                          @error('image')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                          
                      </div>
                    
                      <button type="submit" class="btn btn-primary">Add Image</button>
                  </form>
                  </div>
                 
                
              </div>
          </div>

        
          </div>
        </div>

      
    </div>



 

@endsection
