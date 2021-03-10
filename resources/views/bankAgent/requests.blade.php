@extends('bankAgent.layouts.main')
@push('head')
<style>
.sidebar.sidebar-pills .nav-dropdown.open .nav-link{
    color: #495057!important;
}
</style>

@endpush
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Requets</li>
</ol>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> Simple Table</div>
                <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Date registered</th>
                        <th>Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Samppa Nori</td>
                        <td>2012/01/01</td>
                        <td><span class="badge badge-success">Accepted</span></td>
                        <td>
                            <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" id="dropdownMenu2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accepted</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="">
                                <button class="dropdown-item" type="button">Pending</button>
                                <button class="dropdown-item" type="button">Refused</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Estavan Lykos</td>
                        <td>2012/02/01</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td>
                            <button class="btn btn-secondary dropdown-toggle" id="dropdownMenu2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pending</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="">
                            <button class="dropdown-item" type="button">Accepted</button>
                            <button class="dropdown-item" type="button">Refused</button>
                            </div>
                        </td>
                    </div>
                    </tr>

                    </tbody>
                </table>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
