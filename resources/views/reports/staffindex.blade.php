@extends('layouts.staffapp')

@section('main')

<div class="flex-center position-ref content">
  <img height="280px" class="img-round" width="1200px" src="/img/uniten3.jpg" alt="unitenlogo">
</div>

<br><br><br>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3 center">New Report</h1>  
    <br><br>

  <table class="table table-striped">
    <thead>
        <tr>
            <td>REPORT ID</td>
            <td>REPORTED ON</td>
            <td>TYPE</td>
            <td>APARTMENT NO.</td>
            <td>STUDENT NAME</td>
            <td>PHONE NO.</td>
            <td>SUBJECT</td>
            <td>DESCRIPTION</td>
            <td>STATUS</td>
            <td colspan = 2>ACKNOWLEDGE</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report['report_id']}}</td>
            <td>{{$report['created_at']}}</td>
            <td>{{$report['report_type']}}</td>
            <td>{{$report['apart_num']}}</td>
            <td>{{$report['student_name']}}</td>
            <td>{{$report['phone_no']}}</td>
            <td>{{$report['sub_of_rep']}}</td>
            <td>{{$report['des_of_rep']}}</td>
            <td>{{$report['status']}}</td>
            <td>
                <a class="btn btn-primary" href={{"edit/" .$report['report_id']}} >View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif

    </div>

  </table>
<div>
</div>
@endsection
