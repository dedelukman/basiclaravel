@extends('admin.admin_master')

@section('admin')


<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Edit About</h2>
										</div>
										<div class="card-body">
                                        <form action="{{ url('contact/update/'.$contacts->id) }}" method="POST" >                                        
                                        @csrf

												<div class="form-group">
													<label for="exampleFormControlTextarea1">Address</label>
													<textarea class="form-control" name="address" rows="3">{{ $contacts->address }}
													</textarea>
												</div>
												<div class="form-group">
													<label for="exampleFormControlInput1">Email</label>
													<input type="email" class="form-control" name="email" placeholder="Enter Email"
													value="{{ $contacts->email }}"
													>													
												</div>		
												<div class="form-group">
													<label for="exampleFormControlInput1">Phone</label>
													<input type="text" class="form-control" name="phone" placeholder="Enter Phone"
													value="{{ $contacts->phone }}"
													>													
												</div>		
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Update</button>
												
												</div>

										
											</form>
										</div>
									</div>

      
@endsection