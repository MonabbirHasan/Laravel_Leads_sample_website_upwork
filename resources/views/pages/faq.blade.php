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
                    <h6 class="mb-4 text-dark">Add New FAQ?</h6>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Question <i class="fa fa-question" aria-hidden="true"></i></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Answer <i class="fas fa-brain    "></i></label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
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
                                    <th scope="col">Question</th>
                                    <th scope="col">Answer</th>
                                    <th scope="col">CreateAt</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Do you have a discount for a big order?</td>
                                    <td>Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.</td>
                                    <td>12-12-2022/12:21.am</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Do you have a discount for a big order?</td>
                                    <td>Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.</td>
                                    <td>12-12-2022/12:21.am</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Do you have a discount for a big order?</td>
                                    <td>Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.</td>
                                    <td>12-12-2022/12:21.am</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Do you have a discount for a big order?</td>
                                    <td>Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.</td>
                                    <td>12-12-2022/12:21.am</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Do you have a discount for a big order?</td>
                                    <td>Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.</td>
                                    <td>12-12-2022/12:21.am</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Do you have a discount for a big order?</td>
                                    <td>Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.</td>
                                    <td>12-12-2022/12:21.am</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Do you have a discount for a big order?</td>
                                    <td>Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.</td>
                                    <td>12-12-2022/12:21.am</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Do you have a discount for a big order?</td>
                                    <td>Of course, If it's a big order in general, we can discuss that. If it is doable for me then I don't have any problem giving some discount.</td>
                                    <td>12-12-2022/12:21.am</td>
                                    <td>Active</td>
                                </tr>
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
