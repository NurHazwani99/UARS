@extends('layouts.app')


@section('main')

<div class="flex-center position-ref content">
  <img height="280px" class="img-round" width="1800px" src="/img/uniten2.jpg" alt="unitenlogo">
</div>

        <br><br><br>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Reports</h1>
  <div>

  <div>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link " href={{"index"}} role="tab">Current Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href={{"create"}} role="tab">New Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href={{"history"}} role="tab">Report History</a>
        </li>
      </ul>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    @if(session()->get('error'))
      <div class="alert alert-danger">
        <ul>
            {{ session()->get('error') }}
        </ul>
      </div><br />
    @endif
      <form method="post" action="create" enctype="multipart/form-data">
          @csrf
          <div>
          <label for=""> </label>
          </div>
          <div class="form-group">    
          <label for="report_type">Report Type*:</label>
            <select id="report_type" name="report_type" class="form-control">
              <option value="" selected>------ Please select report type ------</option>
              <option value="In Apartment">In Apartment</option>
              <option value="Surrounding of Apartment">Surrounding of Apartment</option>
            </select>
          </div>

          <div class="form-group">
              <label for="apart_num">Apartment Number*:</label>
              <input type="text" class="form-control" name="apart_num" placeholder="Eg: M2-02-01"/>
          </div>

          <div class="form-group">
              <label for="student_name">Student Name*:</label>
              <input type="text" class="form-control" name="student_name"/>
          </div>

          <div class="form-group">
              <label for="phone_no">Phone number:</label>
              <input type="text" class="form-control" name="phone_no"/>
          </div>

          <div class="form-group">
            <label for="sub_of_rep">Subject of Report*:</label>
              <select id="sub_of_rep" name="sub_of_rep" class="form-control">
                <option value="" selected>------ Please select subject of report ------</option>
                <option value="Electrical Problem">Electrical Problem</option>
                <option value="Water Problem">Water Problem</option>
                <option value="Others">Others</option>
              </select>
          </div>

          <div class="form-group">
              <label for="des_of_rep">Description*:</label>
              <input type="text" class="form-control" name="des_of_rep"/>
          </div>
         
          <div class="form-group">
              <label for="attachment">Attachment:</label>
              <input type="file" class="form-control" name="attachment" id="attachment">
              <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
          </div>
          
          <button type="submit" class="btn btn-primary">Place Report</button>
      </form>
  </div>
</div>
</div>
@endsection
