@extends('layouts.app')

@section('content')
<!-- Home -->

<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">{{ $visitor->name }}</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">
                            @if($visitor->default_picture == null)
                                <img src="{{ asset('images/user.jpg') }}" class="img img-responsive" height="150">
                            @else
                                <img src="{{ asset($visitor->default_picture) }}" class="img img-responsive" height="150">
                            @endif
                        </div>
						<form action="{{ url('visitor/'.$visitor->id) }}" method="POST" id="contact_form" class="contact_form text-center" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">Name</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input type="text" name="name" class="form-control" value="{{ $visitor->name }}">
                                        <label class="error">{{ $errors->first('name') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">Telepon</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <input type="text" name="phone" class="form-control" value="{{ $visitor->phone }}">
                                        <label class="error">{{ $errors->first('phone') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                        <select name="gender" class="form-control">
                                            <option value="M" @if($visitor->gender == "M") selected @endif>Male</option>
                                            <option value="F" @if($visitor->gender == "F") selected @endif>Female</option> 
                                            <option value="O" @if($visitor->gender == "O") selected @endif>Other</option> 
                                        </select>
                                        <label class="error">{{ $errors->first('gender') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">Hobi</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('hobby') ? ' has-error' : '' }}">
                                        <input type="text" name="hobby" class="form-control" value="{{ $visitor->hobby }}">
                                        <label class="error">{{ $errors->first('hobby') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">KTP</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('civilization_id') ? ' has-error' : '' }}">
                                        <input type="text" name="civilization_id" class="form-control" value="{{ $visitor->civilization_id }}">
                                        <label class="error">{{ $errors->first('civilization_id') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">Passport</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('passport_id') ? ' has-error' : '' }}">
                                        <input type="text" name="passport_id" class="form-control" value="{{ $visitor->passport_id }}">
                                        <label class="error">{{ $errors->first('passport_id') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">Alamat</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <input type="text" name="address" class="form-control" value="{{ $visitor->address }}">
                                        <label class="error">{{ $errors->first('address') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">Gambar</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('default_picture') ? ' has-error' : '' }}">
                                        <input type="file" name="default_picture" class="form-control">
                                        <label class="error">{{ $errors->first('default_picture') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 contact_title text-left" style="font-size: 25px !important;font-weight: 500 !important;">Ganti Password</label>
                                <div class="col-sm-9">
                                    <div class="form-group bmd-form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input type="password" name="password" class="form-control" >
                                        <span class="contact_title" style="font-size: 12px !important;font-weight: 200 !important;">Kosongkan jika tidak ingin mengganti password</span>
                                        <label class="error">{{ $errors->first('password') }}</label>
                                    </div>
                                </div>
                            </div>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Update<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
