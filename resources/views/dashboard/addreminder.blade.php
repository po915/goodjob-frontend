@extends('layout.dash')

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h1 class="d-inline-block mb-0 txt-dark">Reminders</h1>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <button type="button" class="btn btn-twitter btn-icon-only rounded-circle">
                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light bg-white shadow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid">
        <div class="container-fluid page-content py-2">
            <div class="row my-2">
                <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i>
                    <span class="status">Active</span>
                </span>
                <span class="badge badge-dot mr-4">
                    <i class="bg-success"></i>
                    <span class="status">Completed</span>
                </span>
                <p>All</p>
            </div>
            <div class="container-fluid box-10 mb-2">
                <div class="row py-3">
                    <select name="period" id="period" class="cus-select reminder-select-1 col" placeholder="Period">
                        <option value="tiger">Done</option>
                        <option value="lion">Undone</option>
                        <option value="elephant">XYZ</option>
                    </select>
                    <button type="button" class="btn btn-default mr-3 btn-12">Apply</button>
                    <div class="form-group mb-0">
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text form-preicon-sm"><i class="fa fa-search"></i></span>
                            </div>
                            <input class="form-control form-control-sm" placeholder="Keyword" type="text">
                        </div>
                    </div>
                    <button type="button" class="btn btn-12 ml-3" id="add-reminder"><i class="fa fa-plus"></i> ADD REMINDER</button>
                </div>
            </div>
        </div>
    </div>
    


@endsection


@section('script')
<script>
$("#add-reminder").on("click", function() {
    window.location.href = "/add-reminder";
})
</script>
@endsection