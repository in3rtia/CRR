@extends('layouts.hod_template')
@section('title', 'Add New')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Add New User</div>

                    <div class="panel-body">
                        <div class="col-md-6 col-lg-6">
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/store_new_user') }}">
                                {!! csrf_field() !!}

                                <div class="form-group{{ $errors->has('man_number') ? ' has-error' : '' }}">

                                    <label>Man Number</label>
                                    <input class="form-control" placeholder="man number" name="man_number" type="number"
                                           value="{{ old('man_number') }}">
                                    @if ($errors->has('man_number'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('man_number') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                                    <label>Position</label>
                                    <select class="form-control" name="position">
                                        <option value="">-- select position --</option>

                                        @if($user->position=='Contracts Officer')
                                            <option value="Contracts Officer"> Contracts Officer</option>
                                            <option value="Dean of School"> Dean of School</option>
                                            <option value="Head of Department"> Head of Department</option>
                                            <option value="Academic Staff"> Academic Staff</option>

                                        @else
                                            <option value="Academic Staff"> Academic Staff</option>
                                            <option value="Support Staff"> Support Staff</option>
                                        @endif
                                    </select>

                                    @if ($errors->has('position'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('position') }}</strong>
                                            </span>
                                    @endif

                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>E-mail Address</label>
                                    <input type="email" class="form-control" placeholder="e-mail" name="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                @if($user->position=='Contracts Officer')

                                    <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                                        <label>School</label>
                                        <select onchange="department(selected)" class="form-control" name="school">
                                            <option value="">-- select school --</option>
                                            <option value="Natural Sciences">Natural Sciences</option>
                                            <option value="Education">Education</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Mines">Mines</option>
                                            <option value="Veterinary Medicine">Veterinary Medicine</option>
                                            <option value="Humanities">Humanities</option>
                                            <option value="Agriculture">Agriculture</option>
                                        </select>

                                        @if ($errors->has('school'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('school') }}</strong>
                                            </span>
                                        @endif
                                        @else
                                            <input type="hidden" value="{{$user->school}}" name="school">

                                        @endif

                                    </div>
                                    @if($user->position=='Contracts Officer' OR $user->position=='Dean of School')
                                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">

                                            <label>Department</label>

                                            <select id="department" class="form-control" name="department">
                                                <option value="">-- select department --</option>
                                                <option value="Computer Science">Computer Science</option>
                                                <option value="Physics">Physics</option>
                                                <option value="Chemistry">Chemistry</option>

                                            </select>


                                            <span class="help-block">
                                                @if ($errors->has('department'))
                                                    <strong>{{ $errors->first('department') }}</strong>
                                            </span>
                                            @endif

                                        </div>

                                    @else
                                        <div class="form-group">
                                            <input type="hidden" value="{{$user->department}}" name="department">
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>

                            </form>
                        </div>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
    <script>
        function department(value) {
            alert("Power");
            //if (value.equals("Natural Sciences")){

            //document.getElementById("department").innerHTML = "Trial";


        }
    </script>


@endsection