@extends('layouts.master')

@section('title')
    Dimarz Admin
@endsection

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            {{-- user form here --}}
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4 text-dark">Add New Leads File</h6>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Exel File</label>
                        <input class="form-control" type="file" id="formFile" accept=".xlsx">
                    </div>

                </div>
            </div>



            {{-- user tabel start here --}}
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4 text-dark">View All Users</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Company Address</th>
                                    <th scope="col">Company Email</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Company Size</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Industry</th>
                                    <th scope="col">Lead Code</th>
                                    <th scope="col">Niche</th>
                                    <th scope="col">Personal Email</th>
                                    <th scope="col">Revinue</th>
                                    <th scope="col">State</th>
                                    <th scope="col">Title</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="tbody" >

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .table-striped {
                padding: 10px;
                background: #fff;
                border-radius: 5px;

            }

            .table-striped tr {
                text-transform: capitalize;
                color: black;
            }

            .table-striped tr td {
                color: black;
            }
        </style>

    </div>
@endsection

@section('scripts')
@endsection
