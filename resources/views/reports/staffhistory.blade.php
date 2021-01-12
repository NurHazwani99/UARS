@extends('layouts.staffapp')

@section('main')

<div class="flex-center position-ref content">
  <img height="280px" class="img-round" width="1800px" src="/img/uniten3.jpg" alt="unitenlogo">
</div>

<br><br><br>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3 center" >Reports History</h1>    
    <br>
    
  <table class="table table-striped">

  <div class="col-md-5">
    <form action="search" method="get">
      <div class="input-group">
        <input type="search" name="search" class="form-control" placeholder="Please enter apartment number. Eg: M2-09-06">
        <span class="input-group-prepend">
          <button type="submit"class="btn-primary" >Search</button>
        </span>
      </div>
    </form>
    <br><br>
  </div>
    <thead>
        <tr>
          <td>Apartment No.</td>
          <td>Subject of Report</td>
          <td>Description</td>
          <td>Reported on</td>
          <td>Status</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->apart_num}}</td>
            <td>{{$report->sub_of_rep}}</td>
            <td>{{$report->des_of_rep}}</td>
            <td>{{$report->created_at}}</td>
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
