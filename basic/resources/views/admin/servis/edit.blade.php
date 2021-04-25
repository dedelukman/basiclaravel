@extends('admin.admin_master')

@section('admin')


<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Edit Service</h2>
										</div>
										<div class="card-body">
                                        <form action="{{ url('servis/update/'.$servis->id) }}" method="POST" >                                        
                                        @csrf
                                    
												<div class="form-group">
													<label for="exampleFormControlInput1">Service Title</label>
													<input type="text" class="form-control" name="title" placeholder="Enter Title Service"
                                                    value="{{ $servis->title }}"
                                                    >													
												</div>												
												<div class="form-group">
													<label for="exampleFormControlInput1">Service 1 Title</label>
													<input type="text" class="form-control" name="servis1_title" placeholder="Enter Title Service 1"
                                                    value="{{ $servis->servis1_title }}"
                                                    >													
												</div>		
                                                <div class="form-group">
													<label for="exampleFormControlTextarea1">Service 1 Description</label>
													<textarea class="form-control" name="servis1_contain" rows="3"                                                    
                                                    >{{ $servis->servis1_contain }}
                                                    </textarea>
												</div>

												<div class="form-group">
													<label for="exampleFormControlInput1">Service 2 Title</label>
													<input type="text" class="form-control" name="servis2_title" placeholder="Enter Title Service 2"
                                                    value="{{ $servis->servis2_title }}"
                                                    >													
												</div>		
                                                <div class="form-group">
													<label for="exampleFormControlTextarea1">Service 2 Description</label>
													<textarea class="form-control" name="servis2_contain" rows="3"                                                    
                                                    >{{ $servis->servis2_contain }}
                                                    </textarea>
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput1">Service 3 Title</label>
													<input type="text" class="form-control" name="servis3_title" placeholder="Enter Title Service 3"
                                                    value="{{ $servis->servis3_title }}"
                                                    >													
												</div>		
                                                <div class="form-group">
													<label for="exampleFormControlTextarea1">Service 3 Description</label>
													<textarea class="form-control" name="servis3_contain" rows="3"                                                    
                                                    >{{ $servis->servis3_contain }}
                                                    </textarea>
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput1">Service 4 Title</label>
													<input type="text" class="form-control" name="servis4_title" placeholder="Enter Title Service 4"
                                                    value="{{ $servis->servis4_title }}"
                                                    >													
												</div>		
                                                <div class="form-group">
													<label for="exampleFormControlTextarea1">Service 4 Description</label>
													<textarea class="form-control" name="servis4_contain" rows="3"                                                    
                                                    >{{ $servis->servis4_contain }}
                                                    </textarea>
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput1">Service 5 Title</label>
													<input type="text" class="form-control" name="servis5_title" placeholder="Enter Title Service 5"
                                                    value="{{ $servis->servis5_title }}"
                                                    >													
												</div>		
                                                <div class="form-group">
													<label for="exampleFormControlTextarea1">Service 5 Description</label>
													<textarea class="form-control" name="servis5_contain" rows="3"                                                    
                                                    >{{ $servis->servis5_contain }}
                                                    </textarea>
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput1">Service 6 Title</label>
													<input type="text" class="form-control" name="servis6_title" placeholder="Enter Title Service 6"
                                                    value="{{ $servis->servis6_title }}"
                                                    >													
												</div>		
                                                <div class="form-group">
													<label for="exampleFormControlTextarea1">Service 6 Description</label>
													<textarea class="form-control" name="servis6_contain" rows="3"                                                    
                                                    >{{ $servis->servis6_contain }}
                                                    </textarea>
												</div>

                                               
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Update</button>
												
												</div>
											</form>
										</div>
									</div>

      
@endsection