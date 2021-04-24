@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Edit Slider</h2>
										</div>
										<div class="card-body">
                                        <form action="{{ url('slider/update/'.$sliders->id) }}" method="POST" enctype="multipart/form-data">                                        
                                        @csrf
                                        <input type="hidden" name="old_image" 
                            value="{{ $sliders->image }}">
												<div class="form-group">
													<label for="exampleFormControlInput1">Slider Title</label>
													<input type="text" class="form-control" name="title" placeholder="Enter Title Slider"
                                                    value="{{ $sliders->title }}"
                                                    >													
												</div>												
												<div class="form-group">
													<label for="exampleFormControlTextarea1">Slider Description</label>
													<textarea class="form-control" name="description" rows="3"                                                    
                                                    >{{ $sliders->description }}
                                                    </textarea>
												</div>
												<div class="form-group">
													<label for="exampleFormControlFile1">Image</label>
													<input type="file" class="form-control-file" name="image" id="image">
												</div>

                                                <div class="mb-3">
                            <img id="showImageSlider" src="{{ asset($sliders->image) }}" style="height: auto; width: 400px;">
                                                      
                        </div>
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
												
												</div>
											</form>
										</div>
									</div>

                                    <script type="text/javascript">
        $(document).ready(function(){
            $("#image").change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#showImageSlider").attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection