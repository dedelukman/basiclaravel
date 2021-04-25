@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Create About</h2>
										</div>
										<div class="card-body">
                                        <form action="{{ route('store.about') }}" method="POST" >
                                        @csrf
												<div class="form-group">
													<label for="exampleFormControlInput1">About Title</label>
													<input type="text" class="form-control" name="title" placeholder="Enter Title Slider">													
												</div>												
												<div class="form-group">
													<label for="exampleFormControlTextarea1">Short Description</label>
													<textarea class="form-control" name="short_dis" rows="3"></textarea>
												</div>
												<div class="form-group">
													<label for="exampleFormControlTextarea1">Long Description</label>
													<textarea class="form-control" name="long_dis" rows="3"></textarea>
												</div>
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
												
												</div>
											</form>
										</div>
									</div>

@endsection