@extends('layouts.app')

@section('main')

<div class="flex-center position-ref content">
  <img height="280px" class="img-round" width="1800px" src="/img/uniten2.jpg" alt="unitenlogo">
</div>

        <br><br><br>
        
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3 center" >Reports</h1>    
    
    <div>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link" href={{"index"}} role="tab">Current Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href={{"create"}} role="tab">New Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href={{"history"}} role="tab">Report History</a>
        </li>
      </ul>
    </div>

  <table class="table table-striped">

    <thead>
        <tr>
          <td>Subject of Report</td>
          <td>Description</td>
          <td>Current Status</td>
          <td>Staff Handling</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->sub_of_rep}}</td>
            <td>{{$report->des_of_rep}}</td>
            <td>{{$report->status}}</td>
            <td>{{$report->report_receive}}</td>
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
