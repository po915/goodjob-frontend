@extends('layout.dash')

@section('style')
<link rel="stylesheet" href="{{ asset('css/flags.css') }}">
<link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<style>

</style>
@endsection
@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-8 col-7">
                        <h1 class="d-inline-block mb-0 txt-dark my-auto txt-12">Settings</h1>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/work" class="h1 d-inline-block mb-0 txt-dark my-auto medium txt-11">Work</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/company-info" class="h1 d-inline-block mb-0 txt-dark my-auto medium txt-11">Company Information</a>
                    </div>
                    <div class="col-lg-4 col-5 text-right">
                        <button type="button" class="btn btn-twitter btn-icon-only rounded-circle" data-toggle="modal" data-target="#addCustomer">
                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light bg-white shadow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                                <a class="dropdown-item" href="#">Import</a>
                                <a class="dropdown-item" href="#">Export</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid vertical-tabs">
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills cus-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active pt-3" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="true">Company Information</a>
                    <a class="nav-link" id="v-pills-two-tab" data-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="false">Billing</a>
                    <a class="nav-link" id="v-pills-three-tab" data-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false">Business hours & rules</a>
                    <a class="nav-link" id="v-pills-four-tab" data-toggle="pill" href="#v-pills-four" role="tab" aria-controls="v-pills-four" aria-selected="false">Modules</a>
                    <a class="nav-link" id="v-pills-five-tab" data-toggle="pill" href="#v-pills-five" role="tab" aria-controls="v-pills-five" aria-selected="false">Teams</a>
                    <a class="nav-link" id="v-pills-six-tab" data-toggle="pill" href="#v-pills-six" role="tab" aria-controls="v-pills-six" aria-selected="false">Purchase Orders</a>
                    <a class="nav-link" id="v-pills-seven-tab" data-toggle="pill" href="#v-pills-seven" role="tab" aria-controls="v-pills-seven" aria-selected="false">Staff Skills</a>
                    <a class="nav-link" id="v-pills-eight-tab" data-toggle="pill" href="#v-pills-eight" role="tab" aria-controls="v-pills-eight" aria-selected="false">Job Sheets and reports</a>
                    <a class="nav-link" id="v-pills-nine-tab" data-toggle="pill" href="#v-pills-nine" role="tab" aria-controls="v-pills-nine" aria-selected="false">Tax Ratess</a>
                    <a class="nav-link" id="v-pills-ten-tab" data-toggle="pill" href="#v-pills-ten" role="tab" aria-controls="v-pills-ten" aria-selected="false">Staff members</a>
                    <a class="nav-link" id="v-pills-eleven-tab" data-toggle="pill" href="#v-pills-eleven" role="tab" aria-controls="v-pills-eleven" aria-selected="false">Messages & communication</a>
                    <a class="nav-link" id="v-pills-twelve-tab" data-toggle="pill" href="#v-pills-twelve" role="tab" aria-controls="v-pills-twelve" aria-selected="false">Roles & Permission</a>
                    <a class="nav-link" id="v-pills-thirteen-tab" data-toggle="pill" href="#v-pills-thirteen" role="tab" aria-controls="v-pills-thirteen" aria-selected="false">Reports</a>
                    <a class="nav-link" id="v-pills-fourteen-tab" data-toggle="pill" href="#v-pills-fourteen" role="tab" aria-controls="v-pills-fourteen" aria-selected="false">Subcription</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">

                    <!-- First tab -->

                    <div class="tab-pane fade show active container-fluid pt-5" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                        <h3>Company Address</h3>
                        
                        <div class="row mt-3">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="company-name">Company name</label>
                                    <input type="text" class="form-control" id="company-name" placeholder="Company name" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="city">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Address" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="City" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="country">Country</label>
                                    <input type="text" class="form-control" id="country" placeholder="Country" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="postcode">Post code/Zip code</label>
                                    <input type="text" class="form-control" id="postcode" placeholder="Post code/Zip code" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="phone">Phone number</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone number" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="website">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="Website" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="industry">Industry</label>
                                    <select id="industry" class="custom-select-1" placeholder="Industry">
                                        <option value="it">IT & Technology</option>
                                        <option value="sas">SaaS</option>
                                        <option value="web">Website</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="number1">Company number</label>
                                    <input type="text" class="form-control" id="numner1" placeholder="Company number" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="number2">Company number</label>
                                    <input type="text" class="form-control" id="number2" placeholder="Company number" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="taxnumber">Tax number</label>
                                    <input type="text" class="form-control" id="taxnumber" placeholder="Tax number" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <h4>Branding</h4>
                                <div class="branding dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                    <div class="fallback">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="projectCoverUploads">
                                            <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="dz-preview dz-preview-single">
                                        <div class="dz-preview-cover">
                                            <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-9">
                                <h4>Regional settings</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Country</label><br>
                                            <div id="country-select" data-input-name="country"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="timezone">Set timezone</label>
                                            <select id="timezone" class="custom-select-1" placeholder="Set timezone">
                                                <option value="-12.0">(GMT -12:00)</option>
                                                <option value="-11.0">(GMT -11:00)</option>
                                                <option value="-10.0">(GMT -10:00)</option>
                                                <option value="-9.0">(GMT -9:00)</option>
                                                <option value="-8.0">(GMT -8:00))</option>
                                                <option value="-7.0">(GMT -7:00))</option>
                                                <option value="-6.0">(GMT -6:00)</option>
                                                <option value="-5.0">(GMT -5:00)</option>
                                                <option value="-4.0">(GMT -4:00)</option>
                                                <option value="-3.0">(GMT -3:00)</option>
                                                <option value="-2.0">(GMT -2:00)</option>
                                                <option value="-1.0">(GMT -1:00)</option>
                                                <option value="0.0">(GMT)</option>
                                                <option value="1.0">(GMT +1:00)</option>
                                                <option value="2.0" selected="selected">(GMT +2:00)</option>
                                                <option value="3.0">(GMT +3:00)</option>
                                                <option value="4.0">(GMT +4:00)</option>
                                                <option value="5.0">(GMT +5:00)</option>
                                                <option value="6.0">(GMT +6:00)</option>
                                                <option value="7.0">(GMT +7:00)</option>
                                                <option value="8.0">(GMT +8:00)</option>
                                                <option value="9.0">(GMT +9:00)</option>
                                                <option value="9.5">(GMT +9:30)</option>
                                                <option value="10.0">(GMT +10:00)</option>
                                                <option value="11.0">(GMT +11:00)</option>
                                                <option value="12.0">(GMT +12:00)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="currency">Currency</label>
                                            <select id="currency" class="custom-select-1" placeholder="Currency">
                                                <option value="chf">CHF</option>
                                                <option value="euro">EURO</option>
                                                <option value="usd">USD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="company-date">Date</label>
                                            <input type="date" class="form-control" id="company-date" placeholder="DD/MM/YYYY" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- ??============ -->
                                            <label class="form-control-label" for="timezone">Timezone</label>
                                            <select id="timezone" class="custom-select-1" placeholder="Set timezone">
                                                <option value="-12.0">(GMT -12:00)</option>
                                                <option value="-11.0">(GMT -11:00)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="currency">Accent Color</label>
                                            <input class="form-control" type="color" value="#5e72e4" id="example-color-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second tab -->

                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                        <h3>BILLING</h3>
                        <div class="row mt-3">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="pay-terms">Payment terms</label>
                                    <select id="pay-terms" class="custom-select-1" placeholder="Payment terms">
                                        <option value="next_30">Next 30days</option>
                                        <option value="2" selected>Next 15days</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="bill-time">Bill time in</label>
                                    <select id="bill-time" class="custom-select-1" placeholder="Bill time in">
                                        <option value="1">15 minutes</option>
                                        <option value="2" selected>30 minutes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="quote-valid">Quote valid(default value)</label>
                                    <select id="quote-valid" class="custom-select-1" placeholder="Quote valid">
                                    <option value="1">15 minutes</option>
                                        <option value="2">30 minutes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="country-state">Country/State</label>
                                    <input type="text" class="form-control" id="country-state" placeholder="Country/State" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="labour" type="checkbox">
                                    <label class="custom-control-label" for="labour">Automatically create a labour item</label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="cost-item" type="checkbox">
                                    <label class="custom-control-label" for="cost-item">Change name and description of labour cost item</label>
                                </div>
                            </div>
                        </div>
                        <h4>RATES</h4>
                        <div class="row">
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="default-rate">Default rate</label>
                                    <input type="number" class="form-control" id="default-rate" placeholder="Default rate" min="1" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="chf-rate">CHF / hour</label>
                                    <input type="number" class="form-control" id="chf-rate" placeholder="CHF / hour" min="1" />
                                </div>
                            </div>
                        </div>
                        <h4>QUOTE AUTO FOLLOW UP EMAILS</h4>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" id="enable-quote" type="checkbox">
                            <label class="custom-control-label" for="enable-quote">Enable</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="email-after">Send follow up email after</label>
                                    <input type="number" class="form-control" id="email-after" placeholder="Send follow up email after" min="1" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="email-days">Days</label>
                                    <input type="number" class="form-control" id="email-days" placeholder="Days" min="1" />
                                </div>
                            </div>
                            <p class="my-auto">(Unless status changes)</p>
                        </div>
                        <h4>CUSTOMER JOB VISIT REMINDERS</h4>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="send">Send</label>
                                    <input type="number" class="form-control" id="send" placeholder="Send" min="1" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="days">Days</label>
                                    <input type="number" class="form-control" id="days" placeholder="Days" min="1" />
                                </div>
                            </div>
                            <p class="my-auto">Prior work</p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn-9">Save</button>
                            </div>
                        </div>
                    </div>

                    <!-- Third tab -->

                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                        <h3 class="mb-5">ENTER THE TIMES YOU ARE OPEN FOR BUSINESS</h3>

                        <div class="card card-5">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h3>Monday</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="09:00:00" id="mon-s-time">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="18:00:00" id="mon-e-time">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="mon-24" type="checkbox">
                                            <label class="custom-control-label" for="mon-24">24 Hours</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="mon-closed" type="checkbox">
                                            <label class="custom-control-label" for="mon-closed">Closed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-5">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h3>Tuesday</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="09:00:00" id="thu-s-time">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="18:00:00" id="thu-e-time">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="thu-24" type="checkbox">
                                            <label class="custom-control-label" for="thu-24">24 Hours</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="thu-closed" type="checkbox">
                                            <label class="custom-control-label" for="thu-closed">Closed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-5">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h3>Wednesday</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="09:00:00" id="wed-s-time">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="18:00:00" id="wed-e-time">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="wed-24" type="checkbox">
                                            <label class="custom-control-label" for="wed-24">24 Hours</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="wed-closed" type="checkbox">
                                            <label class="custom-control-label" for="wed-closed">Closed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-5">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h3>Thursday</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="09:00:00" id="thu-s-time">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="18:00:00" id="thu-e-time">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="thu-24" type="checkbox">
                                            <label class="custom-control-label" for="thu-24">24 Hours</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="thu-closed" type="checkbox">
                                            <label class="custom-control-label" for="thu-closed">Closed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-5">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h3>Friday</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="09:00:00" id="fri-s-time">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="18:00:00" id="fri-e-time">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="fri-24" type="checkbox">
                                            <label class="custom-control-label" for="fri-24">24 Hours</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="fri-closed" type="checkbox">
                                            <label class="custom-control-label" for="fri-closed">Closed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-5">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h3>Saturday</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="09:00:00" id="sat-s-time">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="18:00:00" id="sat-e-time">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="sat-24" type="checkbox">
                                            <label class="custom-control-label" for="sat-24">24 Hours</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="sat-closed" type="checkbox">
                                            <label class="custom-control-label" for="sat-closed">Closed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-5">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h3>Sunday</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="09:00:00" id="sun-s-time">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" value="18:00:00" id="sun-e-time">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="sun-24" type="checkbox">
                                            <label class="custom-control-label" for="sun-24">24 Hours</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="sun-closed" type="checkbox">
                                            <label class="custom-control-label" for="sun-closed">Closed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label class="custom-checkbox">
                            <div>Hide days your business is closed from the scheduler</div>
                            <input type="checkbox" id="hide-day">
                            <span class="checkmark"></span>
                        </label>
                        
                        <label class="custom-checkbox">
                            <div>Show a warning message when booking in jobs that run past opening hours</div>
                            <input type="checkbox" id="warn-message">
                            <span class="checkmark"></span>
                        </label>

                        <button class="btn-9">Save</button>
                    </div>

                    <!-- 4th tab -->

                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-four" role="four" aria-labelledby="v-pills-four-tab">
                        <p>Customize workforce so that you only see the moduels that you nad your team use. <br> This is a global setting that will effect all members of staff with access to the admin console.</p>
                        <h3 class="my-3">AVAILABLE MODULES</h3>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <div class="box-6"><p>Assets</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6 selected-module"><p>Business hours</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6"><p>Calendar Sync</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6"><p>Contracts</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6 selected-module"><p>Forms library</p></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <div class="box-6"><p>Custom staff roles</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6"><p>Custom portal</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6 selected-module"><p>Formers builder</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6"><p>Contracts</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6 selected-module"><p>Integrations</p></div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2">
                                <div class="box-6"><p>Invoices</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6"><p>Job Activity Feed</p></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="box-6"><p>Profit and Loss</p></div>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn-9 ml-3">Save</button>
                        </div>
                    </div>

                    <!-- 5th Tab -->

                    <div class="tab-pane fade container-fluid pt-5 px-0" id="v-pills-five" role="five" aria-labelledby="v-pills-five-tab">
                        <p class="mb-3 px-4">Group your fieldworkers on the scheduler into teams and sub teams. <br>
                            Your teams can include location based or service/skill based teams.</p>

                        <div class="box-7 flex">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text form-preicon-sm"><i class="fa fa-search"></i></span>
                                    </div>
                                    <input class="form-control form-control-sm" placeholder="Keyword" type="text">
                                </div>
                            </div>
                            <button class="btn-10 my-auto"><i class="fa fa-plus"></i> ADD TEAM</button>    
                        </div>
                    </div>

                    <!-- 6th Tab -->
                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-six" role="six" aria-labelledby="v-pills-six-tab">
                        <h3>Purchase Order Settings</h3>
                        <div class="form-group" style="width:200px">
                            <label class="form-control-label" for="last-purchase">Last purchase order number</label>
                            <input type="number" class="form-control" id="last-purchase" placeholder="Last purchase order number" />
                        </div>
                        <button class="btn-9">Save</button>
                    </div>

                    <!-- 7th Tab -->
                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-seven" role="seven" aria-labelledby="v-pills-seven-tab">
                        <h3>Staff skills</h3>
                        <p>Enter all of the different skills your fieldworkers have. <br>
                            You can then assign these to individual fieldworkers in the staff member section.</p>
                        <form method="get">
                            <select id="choices-multiple-remove-button" placeholder="Staff Skills" multiple>
                                <option value="Author" onclick="filterSelection('Author')">React</option>
                                <option value="MSelect">Vue</option>
                                <option value="Accordions">Angular</option>
                                <option value="Radio Buttons">Animate.js</option>
                                <option value="SearchBox">Next.js</option>
                                <option value="Tables">Three.js</option>
                                <option value="Profiles">Laravel</option>
                                <option value="Profiles">React Native</option>
                                <option value="Profiles">Ionic</option>
                                <option value="Profiles">Kotlin</option>
                                <option value="Profiles">Swift</option>
                            </select>
                        </form>
                        <button class="btn-9 mt-3">Save</button>
                    </div>

                    <!-- 8th Tab -->
                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-eight" role="eight" aria-labelledby="v-pills-eight-tab">
                        <div class="container-fluid" style="padding-left:0px !important; padding-right:0px !important;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h3>JOB SHEET</h3>
                                    <div class="form-group" style="width:200px">
                                        <label class="form-control-label" for="last-purchase">Job sheet name</label>
                                        <input type="number" class="form-control" id="last-purchase" placeholder="Job sheet" />
                                    </div>

                                    <h4>Show or Hide</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="custom-checkbox"><div>Duration</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Due Date</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Time</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Order Date</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Job ID</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Job Description</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="custom-checkbox"><div>Notes</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Fieldworker(s)</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Company phone number</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Tracked Time</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h3>JOB REPORT</h3>
                                    <div class="form-group" style="width:200px">
                                        <label class="form-control-label" for="last-purchase">Job report name</label>
                                        <input type="number" class="form-control" id="last-purchase" placeholder="Job sheet" />
                                    </div>

                                    <h4>Show or Hide</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="custom-checkbox"><div>Duration</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Due Date</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Time</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Order Date</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Job ID</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Job Description</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="custom-checkbox"><div>Notes</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Fieldworker(s)</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Company phone number</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                            <label class="custom-checkbox"><div>Tracked Time</div><input type="checkbox" id="warn-message"><span class="checkmark"></span></label>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn-9 mt-5 ml-3">Save</button>
                            </div>
                        </div>
                    </div>

                    <!-- 9th Tab -->
                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-nine" role="nine" aria-labelledby="v-pills-nine-tab">
                        <h3>SALES</h3>
                        <div class="card card-6">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">Sales with Tax</h4>
                                        <p class="text-sm text-muted mb-0">Sails with tax applied</p>
                                    </div>
                                    <div class="col-auto">
                                        <h4>20%</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-6">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4 class="mb-0">Sales with Tax</h4>
                                        <p class="text-sm text-muted mb-0">Sails with tax applied</p>
                                    </div>
                                    <div class="col-auto">
                                        <h4>20%</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 10th tab -->

                    <div class="tab-pane fade container-fluid pt-5 px-0" id="v-pills-ten" role="ten" aria-labelledby="v-pills-ten-tab">
                        <p class="mb-3 px-4">Group your fieldworkers on the scheduler into teams and sub teams. <br>
                            Your teams can include location based or service/skill based teams.</p>

                        <div class="box-7 flex">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text form-preicon-sm"><i class="fa fa-search"></i></span>
                                    </div>
                                    <input class="form-control form-control-sm" placeholder="Keyword" type="text">
                                </div>
                            </div>
                            <button class="btn-10 my-auto"><i class="fa fa-plus"></i> ADD STAFF MEMBER</button>    
                        </div>

                        <div class="table-responsive" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]'>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="budget">Role</th>
                                        <th scope="col" class="sort asc" data-sort="status">Contact</th>
                                        <th scope="col" class="sort" data-sort="completion">Teams</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Jane Snow</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            Office Manager
                                        </td>
                                        <td>
                                            www@www.com
                                        </td>
                                        <td class="text-right">                    
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Jane Snow</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            Office Manager
                                        </td>
                                        <td>
                                            www@www.com
                                        </td>
                                        <td class="text-right">                    
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 11th tab -->
                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-eleven" role="eleven" aria-labelledby="v-pills-eleven-tab">
                        <h3>EMAIL SEND/RECEIVE SETTINGS</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="send-name">Send name</label>
                                    <select id="send-name" class="custom-select-1" placeholder="Send name">
                                        <option value="1">Jane Snow</option>
                                        <option value="2">Jhone Winter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="reply-address">Auto reply address</label>
                                    <select id="reply-address" class="custom-select-1" placeholder="Auto message reply address">
                                        <option value="1">www@www.com</option>
                                        <option value="2">aaa@aaa.com</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="auto-message">Send auto messages to</label>
                                    <select id="auto-message" class="custom-select-1" placeholder="Auto messages to">
                                        <option value="1" selected>Customer</option>
                                        <option value="2">Seller</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col flex">
                                <label class="custom-toggle my-auto">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                                <p class="my-auto ml-3">Froce user to select option when creating jobs <br><small>(This can be overriden on each individial jobs)</small></p>
                            </div>
                        </div>

                        <h3 class="mt-4">EMAIL TEMPLATES</h3>

                        <h4>Showing 30 templates</h4>
                        <div class="box-8 bg-grey py-4 px-3 mb-4">
                            <div class="flex">
                                <label class="custom-toggle my-auto">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                                <p class="my-auto ml-3">Change of job status</p>
                            </div>
                            <p class="mt-3">(Send to Customer)</p>
                            <p class="mt-3">Send a message to your customer as soon as a job status has been updated.</p>
                            <div class="flex mt-3">
                                <label class="custom-toggle my-auto">
                                    <input type="checkbox">
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                                <p class="my-auto ml-3">Email</p>
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-control-label" for="email-subject">Subject</label>
                                <input type="email" class="form-control" id="email-subject" placeholder="Lorem Ipsum dolor...">
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-control-label" for="email-content">Message</label>
                                <textarea class="form-control" id="email-content"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm">Reset to default</button>
                        </div>
                        
                        <button class="btn-9">Save</button>
                    </div>

                    <!-- 12th tab -->
                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-twelve" role="twelve" aria-labelledby="v-pills-twelve-tab">
                        <h3>ROLES & PERMISSION</h3>
                        <p>Fine tune what various staff members can see and do</p>
                        <div class="flex mt-3">
                            <div>
                                <h4>ROLES</h4>
                                <p>Roles for permission assigning</p>
                            </div>
                            <button class="btn-11 my-auto ml-4"><i class="fa fa-plus"></i> ADD TEAM</button> 
                        </div>
                        <div class="card card-6 mt-5 mb-3">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4>Field manager</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h4>Field Worker</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-6 mb-3">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4>Field worker full</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h4>Field Worker</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-6 mb-3">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col ml--2">
                                        <h4>Field worker limited</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h4>Field Worker</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-2">Permission</h4>
                    </div>

                    <!-- 13th tab -->
                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-thirteen" role="thirteen" aria-labelledby="v-pills-thirteen-tab">
                        <h3>REPORTS</h3>
                        <div class="form-group" style="width:200px">
                            <label class="form-control-label" for="auto-message-to">Send customer auto messages to</label>
                            <select id="auto-message-to" class="custom-select-1" placeholder="message to">
                                <option value="chf">Customer</option>
                                <option value="euro">Client</option>
                            </select>
                        </div>
                    </div>

                    <!-- 14th tab -->
                    <div class="tab-pane fade container-fluid pt-5" id="v-pills-fourteen" role="fourteen" aria-labelledby="v-pills-fourteen-tab">
                        <h3>PACKAGE</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="package">Package</label>
                                    <select id="package" class="custom-select-1" placeholder="package">
                                        <option value="chf">Unlimited</option>
                                        <option value="euro">Limited</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6">
                                <div class="txt-17">$29,00 User</div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="package-currency">Currency</label>
                                    <select id="package-currency" class="custom-select-1" placeholder="currency">
                                        <option value="chf">CHF</option>
                                        <option value="euro">EURO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h3>USERS</h3>
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="staff-member">Staff members</label>
                                    <input type="number" class="form-control" id="staff-member" placeholder="Staff members" min="1">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6">
                                <div class="txt-17">$29,00 User</div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="staff-member">Total Sum:</label>
                                    <div class="txt-18"> $20.00 User</div>
                                </div>
                            </div>
                        </div>
                        <h3>ADD-ONS</h3>
                        <div class="form-group" style="width:200px">
                            <label class="form-control-label" for="package-sms">Package</label>
                            <select id="package-sms" class="custom-select-1" placeholder="package">
                                <option value="chf" selected>Up to 100 sms/month</option>
                                <option value="euro">Up to 200 sms/month</option>
                            </select>
                        </div>
                        <label class="custom-checkbox">
                            <div>SMS messaging</div>
                            <input type="checkbox" id="hide-day">
                            <span class="checkmark"></span>
                        </label>
                        <h3>TOTAL</h3>

                        <div class="box-9">
                            <p class="txt-19">Total:</p>
                            <p class="txt-20">$29.9</p>
                        </div>
                        <div class="box-9">
                            <p class="txt-19">Vat:</p>
                            <p class="txt-20">$129.9</p>
                        </div>
                        <div class="box-9">
                            <p class="txt-19">Total incl.Vat:</p>
                            <p class="txt-20">$179.9</p>
                        </div>
                        <button class="btn-9 mt-5">Save</button>
                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')
<script src="{{ asset('js/chosen.js') }}"></script>
<script src="{{ asset('js/jquery.flagstrap.min.js') }}"></script>
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>
<script>
    $(document).ready(function() {
        var multipleCancelButton = new Choices("#choices-multiple-remove-button", {
            removeItemButton: true,
            // maxItemCount: 3,
            searchResultLimit: 5,
            renderChoiceLimit: 5,
        });
        $(".chosen-select").chosen({width : "300px"});
        $(".branding .dz-message span").html("<p class='txt-15'>Add Logo</p><p>500px &#10005; 200px</p><p>PNG, JPG</p>");
        $('#country-select').flagStrap();
        $('.box-6').click(function () {
            if ($(this).hasClass('selected-module')) {
            $(this).removeClass('selected-module');
            }
            else
            { $(this).addClass('selected-module'); }
        });
    });
</script>
@endsection