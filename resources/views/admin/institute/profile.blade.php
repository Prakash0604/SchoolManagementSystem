@extends('admin.layout.main')

@section('content')
    <div class="container-fuid">
        <div class="page-wrapper">

            <!-- Page-body start -->
            <div class="page-body">
                <!-- Row start -->
                @if (session()->has('success'))
                    <div
                        class="alert alert-success text-dark alert-dismissible fade show"
                        role="alert"
                    >
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close"
                        ></button>

                        <strong>{{ session()->get('success') }}</strong>
                    </div>
                    @endif

                    @if (session()->has('error'))
                    <div
                        class="alert alert-danger text-dark alert-dismissible fade show"
                        role="alert"
                    >
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close"
                        ></button>

                        <strong>{{ session()->get('error') }}</strong>
                    </div>
                    @endif
                <div class="row">

                    <div class="col-12 p-10 f-16" style="border-radius:10px;background:#fff;"><strong
                            style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">General
                            Settings</strong>
                        <i class="ti-home"></i> - Institute Profile
                    </div>


                </div>
                <div class="row">
                    <!-- Multiple Open Accordion start -->
                    <div class="col-lg-8">
                        <h3 class="text-center m-t-20 w-100 p-b-10" style="line-height:20px;border-bottom:2px solid #fff;">
                            {{ $title }}
                            <br>
                            <div class="bg-gradient-blue"
                                style="width:20px;height:7px;border-radius:10px;display:inline-block;"></div> <span
                                class="f-12 m-dblue" style="display:inline-block;font-weight:100;">Required*</span>
                            <div class="bg-gradient-gray m-l-10"
                                style="width:20px;height:7px;border-radius:10px;display:inline-block;"></div> <span
                                class="f-12 gradient-gray" style="display:inline-block;font-weight:100;">Optional</span>
                        </h3>
                        <form action="{{ route('admin.storeorUpdateInstitute') }}" method="post"
                            enctype="multipart/form-data">
                            <div class="row m-round">
                                @csrf
                                <div class="col-lg-6">
                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Institute Logo*</label>
                                        @if ($institute && $institute->logo != null)
                                            <img id="existingImage" src="{{ asset('storage/' . $institute->logo) }}"
                                                class="img-circle m-10" style="width:120px; height:120px;">
                                        @else
                                            <img id="existingImage" src="{{ asset('default/defaultlogo.png') }}"
                                                class="img-circle m-10" style="width:120px; height:120px;">
                                        @endif
                                        <input type="file" class="form-control m-field hide_field" value="{{ $institute->logo ?? '' }}" name="logo"
                                            id="logo">
                                        <span id="changeLogoBtn" class="btn btn-sm bg-gradient-blue m-white"
                                            style="display:inline-block;border-radius:20px;"> <i class="ti-image"></i>
                                            Change Logo</span>
                                    </div>
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Name of Institute<sup
                                                class="text-danger">*</sup></label>
                                        <input type="text" class="form-control m-field" placeholder="Institute Name"
                                            id="schoolname" name="schoolname" value="{{ $institute->schoolname ?? '' }}">
                                    </div>
                                    @error('schoolname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                     <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Email<sup
                                                class="text-danger">*</sup></label>
                                        <input type="text" class="form-control m-field" placeholder="Email"
                                            id="email" name="email" value="{{ $institute->email ?? '' }}">
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-lg-6">
                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Phone Number<sup
                                                class="text-danger">*</sup></label>
                                        <input type="tel" class="form-control m-field" placeholder="Phone No"
                                            name="contact" id="contact" value="{{ $institute->contact ?? '' }}">
                                    </div>
                                    @error('contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="m-div">
                                        <label class="m-label bg-gradient-gray m-white">Website</label>
                                        <input type="text" class="form-control m-field" placeholder="Website URL"
                                            name="website" id="website" value="{{ $institute->website ?? '' }}">
                                    </div>
                                    @error('website')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Address<sup
                                                class="text-danger">*</sup></label>
                                        <input type="text" class="form-control m-field" placeholder="Address"
                                            name="address" id="address" value="{{ $institute->address ?? '' }}">
                                    </div>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Slogan<sup
                                                class="text-danger">*</sup></label>
                                        <input type="text" class="form-control m-field" Placeholder="Target Line"
                                            name="slogan" id="slogan" value="{{ $institute->slogan ?? '' }}">
                                    </div>
                                    @error('slogan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <h6 class="text-center m-t-20">
                                <button class="btn bg-c-yellow m-t-20" style="border-radius:25px;" id="submitBtn"
                                    type="submit"><i class="fas fa-sync-alt"></i> Update Profile</button>
                            </h6>
                        </form>

                    </div>
                    <!-- Multiple Open Accordion ends -->
                    <!-- Single Open Accordion start -->
                    <div class="col-lg-4">
                        <div class="m-round p-20 m-t-20"
                            style="background:#fff;line-height:16px;box-shadow:0px 0px 1px 0px gray;">

                            <div>
                                <button class="btn btn-sm bg-gradient-success m-white m-round p-l-10 p-r-10"
                                    style="padding-top:5px;padding-bottom:5px;">Profile View</button>
                                <div class="text-center">
                                    @if ($institute && $institute->logo)
                                    <img src="{{ asset('storage/'.$institute->logo)  }}" style="width:120px; height:auto;">
                                    @else
                                    <img src="{{ asset('default/defaultlogo.png') }}" style="width:120px; height:auto;">
                                    @endif
                                    <h4 class="text-dark m-t-10 m-b-0" style="line-height:20px;">{{ $institute->schoolname ?? 'EduTrack - School Management System' }}
                                    </h4>
                                    <h6 class="text-gray" style="font-weight:100;">{{ $institute->slogan ?? '' }}</h6>
                                    <hr class="bg-m-blue1" />
                                </div>
                                <div class="p-l-40">
                                    <div style="position:relative;">
                                        <img src="{{ asset('assets/arrow-down.png') }}"
                                            style="position:absolute;left:0px;top:16px;height:15px;">
                                        <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;"><i
                                                class="ti-mobile"></i> Phone No</span><br>
                                        <strong class="f-12 m-l-20 text-blue">{{ $institute->contact ?? '' }}</strong>
                                    </div>
                                    <div style="position:relative;">
                                        <img src="{{ asset('assets/arrow-down.png') }}"
                                            style="position:absolute;left:0px;top:16px;height:15px;">
                                        <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;"><i
                                                class="ti-email"></i> Email</span><br>
                                        <strong class="f-12 m-l-20 text-blue">{{ $institute->email ?? '' }}</strong>
                                    </div>
                                    <div style="position:relative;">
                                        <img src="{{ asset('assets/arrow-down.png') }}"
                                            style="position:absolute;left:0px;top:16px;height:15px;">
                                        <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;"><i
                                                class="ti-world"></i> Website</span><br>
                                        <strong class="f-12 m-l-20 text-blue">{{ $institute->website ?? '' }}</strong>
                                    </div>
                                    <div style="position:relative;">
                                        <img src="{{ asset('assets/arrow-down.png') }}"
                                            style="position:absolute;left:0px;top:16px;height:15px;">
                                        <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;"><i
                                                class="ti-pin"></i> Address</span><br>
                                        <strong class="f-12 m-l-20 text-blue">{{ $institute->address ?? '' }}</strong>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Open Accordion ends -->
                </div>
                <!-- Row end -->
                <!-- Row start -->

                <!-- Row end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
@endsection
