@extends('admin.layout.main')
@section('content')
<div class="container-fluid">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <!-- Row start -->
            <div class="row mb-4">
                <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;">
                    <strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Salary</strong>
                    <i class="ti-home"></i> - All Employee Salary
                </div>
            </div>

            <button class="btn btn-primary " id="addEmployeeSalaryBtn"  style="width:120px;padding:10px;border-radius:20px" type="button" ><i class="fas fa-user-plus"></i> Add New</button>

            <div class="row" style="margin-top:20px;">

                @include('admin.employee.salary.modal')

                <div class="table-responsive">
                    <table class="table table-border" id="get-salary-data">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Name</th>
                                <th scope="col">Month</th>
                                <th scope="col">Salary Date</th>
                                <th scope="col">Net Salary</th>
                                <th scope="col">Bonus</th>
                                <th scope="col">Fine</th>
                                <th scope="col">Total Salary</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
            <!-- Row end -->
            <!-- Row start -->

            <!-- Row end -->
        </div>
        <!-- Page-body end -->
    </div>
</div>
@endsection
