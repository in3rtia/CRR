@extends('layouts.hod_template')
@section('title', 'Contract_Info')
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
                        <div class="panel-heading"> Contract details</div>
                            <form class="form-horizontal" role="form" style="margin-left: 20px;margin-top: 20px">
                                <div class="form-group">
                                  <label class="col-sm-4 col-md-2 col-xs-6" for="status">Contract Status:</label>
                                  <div class="col-sm-8 col-md-10 col-xs-6">
                                    <label class="text-danger" for="status">@if($contract->contract_status=="Valid")<p style="color:green">{{$contract->contract_status}}@elseif($contract->contract_status=="Expired")
                                            <p style="color:red">{{$contract->contract_status}}</p> @else<p
                                                    style="color:orange">{{$contract->contract_status}}</p>@endif</label>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-4 col-md-2 col-xs-6" for="status">Expiration date:</label>
                                  <div class="col-sm-8 col-md-10 col-xs-6">
                                    <label class="text-primary" for="status">{{\Carbon\Carbon::parse($contract->expires_on)->toFormattedDateString()}}</label>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-4 col-md-4 col-xs-6" for="check">Click here if application has been submitted:</label>
                                  <div class="col-sm-8 col-md-8 col-xs-6">
                                    <label id="demo">
                                        <input type="checkbox" value="" onchange="contractUpdate(this)"
                                        <?php
                                               $position = Auth()->user()->position;
                                                $tracking = $contract->contract_tracking;
                                                $status = $contract->contract_status;
                                                switch($position){

                                                    case "Contracts Officer":
                                                        echo 'checked';
                                                        break;
                                                    case "Head of Department":
                                                        if($tracking == "Contracts Office" OR $tracking == "Dean's Office" OR $tracking == "Waiting for Dean's acknowledgement")
                                                            echo 'checked';
                                                            break;
                                                    case "Dean of School":
                                                        if($tracking == "Contracts Office"OR $tracking == "Waiting for Contracts Officer's acknowledgement")
                                                            echo 'checked';
                                                        break;
                                                    default :
                                                        if($tracking != "Not available" OR $status != "Expired" OR $status != "Expires soon"){
                                                         echo 'checked';
                                                            }else{}
                                                        break;

                                                } ?> >
                                    </label>

                                    <script>
                                          function contractUpdate(cb) {
                                              //var x;
                                              var xhttp;
                                              if (window.XMLHttpRequest) {
                                                  xhttp = new XMLHttpRequest();
                                              } else {
                                                  // code for IE6, IE5
                                                  xhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                              }

                                              if(confirm("Are you sure you want to continue?")) {

                                                  if(cb.checked) {
                                                      xhttp.open("GET", "{{url('contract_submitted/'.$contract->man_number)}}", true);
                                                      xhttp.send();
                                                      document.getElementById('contract_tracking').innerHTML = "Pending";
                                                  }else {
                                                  }

                                              } else {
                                                  //Some other code
                                              }
                                              //confirm("Are you sure?");
                                          }

                                      </script>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-4 col-md-3 col-xs-6" for="tracking">Application Progress/Tracking:</label>
                                  <div class="col-sm-8 col-md-9 col-xs-6">
                                    <label id="contract_tracking" class="text-primary" for="progress">{{$contract->contract_tracking}}</label>
                                  </div>
                                </div>
                            
                            </form>
                        <div class="panel-body">
                            
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

@endsection