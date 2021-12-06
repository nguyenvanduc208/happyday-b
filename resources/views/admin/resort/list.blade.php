@extends('admin.layout.main')
@section('title')
    Danh sách
@endsection
@section('content')
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Thead Primary</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">date</th>
                                        <th scope="col">price</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>$120</td>
                                        <td><i class="ti-trash"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>jone</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>$150</td>
                                        <td><i class="ti-trash"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>$120</td>
                                        <td><i class="ti-trash"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>jone</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>$150</td>
                                        <td><i class="ti-trash"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection