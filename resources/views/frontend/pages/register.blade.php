@extends('frontend.layouts.master')
@section('title', 'Register')
@section('content')
    <div class="react-wrapper-inner">
        <!--================= Breadcrumbs Section Start Here =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="{{ asset('frontend/images/breadcrumbs/1.jpg') }} " alt="Breadcrumbs">
                <img class="mobile" src="{{ asset('frontend/images/breadcrumbs/1.jpg') }} " alt="Breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">Register </h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->


        <!--================= Branches Section Start Here =================-->
        <div id="react-contact" class="react-contact-page pt---50">

            <div class="container">
                <div class="container h-100">
                    <form class="form_container" method="POST" action="{{ route('students.store') }}">
                        @csrf
                        <div class="col-md-12">
                            <h2 class="text-center">Student Registeration Form</h2>
                            <hr class="mb-5">

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="fromNo" class="form-label">Form No</label>
                                            <input type="number" name="fromNo" class="form-control" placeholder="232785"
                                                required disabled>
                                            @if ($errors->has('fromNo'))
                                                <span class="text-warning">{{ $errors->first('fromNo') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="date" class="form-label">Date of Admission</label>
                                            <input type="date" name="date" id="date" class="form-control"
                                                value="{{ date('Y-m-d') }}" required>
                                            @if ($errors->has('date'))
                                                <span class="text-warning">{{ $errors->first('date') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="fname" class="form-label">First Name</label>
                                            <input type="text" name="fname" class="form-control"
                                                placeholder="Enter first name" value="{{ old('fname') }}">
                                            @if ($errors->has('fname'))
                                                <span class="text-warning">{{ $errors->first('fname') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="lname" class="form-label">Last Name</label>
                                            <input type="text" name="lname" class="form-control"
                                                placeholder="Enter last name" value="{{ old('lname') }}">
                                            @if ($errors->has('lname'))
                                                <span class="text-warning">{{ $errors->first('lname') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Enter phone number" value="{{ old('phone') }}">
                                            @if ($errors->has('phone'))
                                                <span class="text-warning">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="text-warning">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-2 col-md-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Enter password">
                                            @if ($errors->has('password'))
                                                <span class="text-warning">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="name_bn" class="form-label">Name (Bangla)</label>
                                            <input type="text" name="name_bn" id="name_bn" class="form-control"
                                                placeholder="Enter name bangla" value="{{ old('name_bn') }}">
                                            @if ($errors->has('name_bn'))
                                                <span class="text-warning">{{ $errors->first('name_bn') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="father_name" class="form-label">Father's Name</label>
                                            <input type="text" name="father_name" id="father_name"
                                                class="form-control" placeholder="Enter father's name"
                                                value="{{ old('father_name') }}">
                                            @if ($errors->has('father_name'))
                                                <span class="text-warning">{{ $errors->first('father_name') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="mother_name" class="form-label">Mother's Name</label>
                                            <input type="text" name="mother_name" id="mother_name"
                                                class="form-control" placeholder="Enter mother's name"
                                                value="{{ old('mother_name') }}">
                                            @if ($errors->has('mother_name'))
                                                <span class="text-warning">{{ $errors->first('mother_name') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="father_occupation" class="form-label">Father's Occupation</label>
                                            <input type="text" name="father_occupation" id="father_occupation"
                                                class="form-control" placeholder="Enter father's occupation"
                                                value="{{ old('father_occupation') }}" required>
                                            @if ($errors->has('father_occupation'))
                                                <span
                                                    class="text-warning">{{ $errors->first('father_occupation') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="mother_occupation" class="form-label">Mother's Occupation</label>
                                            <input type="text" name="mother_occupation" id="mother_occupation"
                                                class="form-control" placeholder="Enter mother's occupation"
                                                value="{{ old('mother_occupation') }}" required>
                                            @if ($errors->has('mother_occupation'))
                                                <span
                                                    class="text-warning">{{ $errors->first('mother_occupation') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                                            <input type="date" name="date_of_birth" id="date_of_birth"
                                                class="form-control" placeholder="Enter date of birth"
                                                value="{{ old('date_of_birth') }}" required>
                                            @if ($errors->has('date_of_birth'))
                                                <span class="text-warning">{{ $errors->first('date_of_birth') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="guardian_phone" class="form-label">Guardian Phone</label>
                                            <input type="text" name="guardian_phone" class="form-control"
                                                placeholder="Enter guardian's phone number">
                                            @if ($errors->has('guardian_phone'))
                                                <span class="text-warning">{{ $errors->first('guardian_phone') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-1 col-md-12">
                                            <label for="permanent_address" class="form-label">Present Address</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="house" id="house"
                                                        class="form-control" placeholder="House" required>
                                                    @if ($errors->has('house'))
                                                        <span class="text-warning">{{ $errors->first('house') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="road" id="road"
                                                        class="form-control" placeholder="Road" required>
                                                    @if ($errors->has('road'))
                                                        <span class="text-warning">{{ $errors->first('road') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="mt-2 row">
                                                <div class="col-md-6">
                                                    <input type="text" name="present_upazila" id="present_upazila"
                                                        class="form-control" placeholder="Upazila" required>
                                                    @if ($errors->has('present_upazila'))
                                                        <span
                                                            class="text-warning">{{ $errors->first('present_upazila') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="city_town" id="city_town"
                                                        class="form-control" placeholder="City/Town" required>
                                                    @if ($errors->has('city_town'))
                                                        <span
                                                            class="text-warning">{{ $errors->first('city_town') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-1 col-md-12">
                                            <label for="permanent_address" class="form-label">Permanent Address</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="village" id="village"
                                                        class="form-control" placeholder="Village" required>
                                                    @if ($errors->has('village'))
                                                        <span class="text-warning">{{ $errors->first('village') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="po" id="po"
                                                        class="form-control" placeholder="P.O" required>
                                                    @if ($errors->has('po'))
                                                        <span class="text-warning">{{ $errors->first('po') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="mt-2 row">
                                                <div class="col-md-6">
                                                    <input type="text" name="permanent_upazila" id="permanent_upazila"
                                                        class="form-control" placeholder="Upazila" required>
                                                    @if ($errors->has('permanent_upazila'))
                                                        <span
                                                            class="text-warning">{{ $errors->first('permanent_upazila') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="dist" id="dist"
                                                        class="form-control" placeholder="Dist" required>
                                                    @if ($errors->has('dist'))
                                                        <span class="text-warning">{{ $errors->first('dist') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- course and batch section --}}
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="text-center card-title">Course and Batch</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3 form-group">
                                                <label for="branch_id">Select Branch<span
                                                        class="text-danger">*</span></label>
                                                <select id="branch_id" name="branch_id" class="form-select select2"
                                                    required>
                                                    <option value="">Select Branch</option>
                                                    @foreach (\App\Models\Branch::all() as $branch)
                                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('branch_id'))
                                                    <span class="text-warning">{{ $errors->first('branch_id') }}</span>
                                                @endif
                                            </div>

                                            <div class="mb-3 form-group">
                                                <label for="course_id">Select Course<span
                                                        class="text-danger">*</span></label>
                                                <select id="course_id" name="course_id" class="form-select select2"
                                                    required>
                                                    <option value="">Select Course</option>
                                                    @foreach (\App\Models\Course::all() as $course)
                                                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('course_id'))
                                                    <span class="text-warning">{{ $errors->first('course_id') }}</span>
                                                @endif
                                            </div>

                                            <div class="mb-3 form-group">
                                                <label for="batch_id">Select Batch<span
                                                        class="text-danger">*</span></label>
                                                <select id="batch_id" name="batch_id" class="form-select">
                                                    <option value="1">Select Batch</option>
                                                    @foreach (\App\Models\Batch::all() as $batch)
                                                        <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('batch_id'))
                                                    <span class="text-warning">{{ $errors->first('batch_id') }}</span>
                                                @endif
                                            </div>
                                            <div id="batch_schedule" class="mt-3"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="gap-2 py-4 w-75 mx-right">
                                <button type="submit" class="text-center btn btn-primary">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
