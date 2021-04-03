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
    <div class="container-fluid reminder">
        <div class="container-fluid page-content py-2">
            <div class="row my-2 pl-4">
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
                    <div class="form-group mb-0">
                        <select name="period" id="period" class="cus-select reminder-select-1 col" placeholder="Period">
                            <option value="tiger">Done</option>
                            <option value="lion">Undone</option>
                            <option value="elephant">XYZ</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-default mr-3 btn-12">Apply</button>
                    <div class="form-group mb-0 mt-2 mt-sm-0 ml-3 ml-sm-0">
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text form-preicon-sm"><i class="fa fa-search"></i></span>
                            </div>
                            <input class="form-control form-control-sm" placeholder="Keyword" type="text">
                        </div>
                    </div>
                    <button type="button" class="btn btn-12 ml-3 mt-2 mt-sm-0" id="add-reminder"><i class="fa fa-plus"></i> ADD REMINDER</button>
                </div>
            </div>

            <div class="table-responsive" data-toggle="checklist" data-list-values='["name", "address", "phone"]'>
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="table-check-all" type="checkbox"  onclick="toggle(this)"> 
                                    <label class="custom-control-label" for="table-check-all"></label>
                                </div>
                            </th>
                            <th scope="col" class="sort" data-sort="name">Reminder Name</th>
                            <th scope="col" class="sort" data-sort="type">Reminder Type</th>
                            <th scope="col" class="sort" data-sort="customer">Customer</th>
                            <th scope="col">Reminder Date&Time</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input checklist-entry" id="customCheck1" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                                <!-- <input type="checkbox"> -->
                            </td>
                            <td class="name">
                                Reminder name
                            </td>
                            <td class="type">
                                Reminder Type
                            </td>
                            <td class="customer">
                                Customer                               
                            </td>
                            <td class="time">
                                MM-DD-YYYY hh:mm
                            </td>
                            <td>
                                Pending
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection


@section('script')
<script src="{{ asset('template/vendor/list.js/dist/list.min.js') }}"></script>
<script>
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
        checkboxes[i].checked = source.checked;
    }
}
$("#add-reminder").on("click", function() {
    window.location.href = "/add-reminder";
})
</script>
@endsection