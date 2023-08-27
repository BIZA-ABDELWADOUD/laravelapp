@extends('dashboard.master')

@section('title')
{{trans('dashboard/fixed_items.title_users_page')}}
@endsection

@section('content')

    <div class="main-content horizontal-content">

        <!-- container opened -->
        <div class="container">



            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto">Users</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Users Management</span>
                    </div>
                </div>

                <div class="d-flex my-xl-auto right-content">
                   
                    <button class="btn btn-secondary btn-block">Secondary</button>
                </div>

            </div>
            <!-- breadcrumb -->

         <!--  modal to add new user -->
            <!-- end  modal to add new user -->

    <div class="col-xl-12">

        <div class="card">
            <div class="card-header pb-0">

                <div class="d-flex justify-content-between">

                    <h4 class="card-title mg-b-0">USERS LIST</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example2">
                        <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">Full name</th>
                            <th class="wd-20p border-bottom-0">email</th>
                            <th class="wd-10p border-bottom-0">Username</th>
                            <th class="wd-15p border-bottom-0">Unity</th>

                            <th class="wd-25p border-bottom-0">Operations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->name}}</td>
                                <td>$654,765</td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div><!-- bd -->
        </div><!-- bd -->
    </div>
        </div>
    </div>
@endsection
