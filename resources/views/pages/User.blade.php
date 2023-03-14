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
                    <h6 class="mb-4 text-dark">Add New Users</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Please Enter Your Username.">
                        <label for="floatingPassword"><i class="fa fa-user" aria-hidden="true"></i> Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Please Enter You E-Mail.">
                        <label for="floatingInput"><i class="fa fa-envelope" aria-hidden="true"></i> Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="phone" class="form-control" id="floatingPassword" placeholder="Please Enter Your Phone.">
                        <label for="floatingPassword"><i class="fa fa-phone-square" aria-hidden="true"></i> Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Please Enter Your Password.">
                        <label for="floatingPassword"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
                    </div>
                    {{-- <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                    </div> --}}
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                        <label for="floatingTextarea"><i class="fa fa-info" aria-hidden="true"></i> Please Enter Your BioData..</label>
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
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">CreateAt</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>0171432413213</td>
                                    <td>12-22-2023</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>0171432413213</td>
                                    <td>12-22-2023</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>0171432413213</td>
                                    <td>12-22-2023</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>0171432413213</td>
                                    <td>12-22-2023</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>0171432413213</td>
                                    <td>12-22-2023</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>0171432413213</td>
                                    <td>12-22-2023</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>0171432413213</td>
                                    <td>12-22-2023</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jacob</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>0171432413213</td>
                                    <td>12-22-2023</td>
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
