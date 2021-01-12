@extends('layouts.app')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3 center" >Reports</h1>    
    
    <div>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href={{"index"}} role="tab">Current Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href={{"create"}} role="tab">New Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href={{"history"}} role="tab">Report History</a>
        </li>
      </ul>
    </div>

    <div>
         
    </div> 

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Current report of your apartment</td>
          <td>Reported By</td>
          <td>Current Status</td>
        </tr>
    </thead>  
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->sub_of_rep}}</td>
            <td>{{$report->student_name}}</td>
            <td>{{$report->status}}</td>
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
