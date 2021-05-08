@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Profile Update</h2>
										</div>
										<div class="card-body">
                                        <form action="{{route('user.password.update')}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
												<div class="form-group">
													<label for="exampleFormControlInput1">User Name</label>
													<input type="text" class="form-control" name="name" value="{{$user->name}}">													
												
												</div>	
                                                <div class="form-group">
													<label for="exampleFormControlInput1">User Email</label>
													<input type="email" class="form-control" name="email" value="{{$user->email}}" >													
												
												</div>	

                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Profile Image</label>
                                                    <input type="file" class="form-control" id="image" name="profile_photo_path">
                                                </div>

                                                <!-- <div class="form-group">
                                                <img id="showImage" src="{{ $user->profile_photo_url }}" 
                                                    alt="Card image cap" style="width:100px; height:100px;">
                                                </div> -->

                                                <div class="form-group">
                                                <img id="showImage" src="{{ (!empty($user->profile_photo_path))? 
                                                url('upload/user/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" 
                                                    alt="Card image cap" style="width:100px; height:100px;">
                                                </div>
																	
												
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
												
												</div>
											</form>
										</div>
									</div>

                                    <script>
                                        $(document).ready(function(){
                                            $('#image').change(function(e){
                                                var reader = new FileReader();
                                                reader.onload = function(e){
                                                    $('#showImage').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(e.target.files['0']);
                                            });
                                        });
                                    </script>

@endsection