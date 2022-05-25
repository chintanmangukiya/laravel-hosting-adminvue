@extends('layouts.main')


<style>
    .btn-bgcol {
        background-color: #03a9f3;
        border: #03a9f3;
    }

    .btn-col {
        color: aliceblue;
    }

</style>

@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profile - {{ Auth::user()->name }}</h4>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    {{-- <ul class="nav customtab nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item"><a href="#settings" class="nav-link"
                                aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span
                                    class="visible-xs"><i class="fa fa-cog"></i></span> <span
                                    class="hidden-xs">Setting</span></a>
                        </li>
                    </ul> --}}
                    <div class="tab-content">
                        <form class="form-horizontal form-material">
                            <div class="form-group">
                                <label class="col-md-12">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line"
                                        value="{{ $users->name ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" class="form-control form-control-line" name="example-email"
                                        id="example-email" value="{{ $users->email ?? '' }}">
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="password" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Message</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Country</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-line">
                                        <option>London</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <div class="col-sm-12">
                                    {{-- <button class="btn btn-success">Update Profile</button> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
