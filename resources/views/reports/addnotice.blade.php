@extends('layouts.staffapp')


@section('main')

<div class="flex-center position-ref content">
  <img height="280px" class="img-round" width="1800px" src="/img/uniten3.jpg" alt="unitenlogo">
</div>

<br><br><br>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3 center">Notices</h1>  
    <br><br>  
  <div>

  <div>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link " href={{"notice"}} role="tab">All Notices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href={{"addnotice"}} role="tab">Add Notice</a>
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
      <form method="post" action="addnotice">
          @csrf
          <div>
          <label for=""> </label>
          </div>
          <div class="form-group">    
          <label for="notice_type">Notice Type*:</label>
            <select id="notice_type" name="notice_type" class="form-control">
              <option value="" selected>------ Please select notice type ------</option>
              <option value="Murni">Murni</option>
              <option value="Cendekiawan">Cendekiawan</option>
              <option value="Ilmu">Ilmu</option>
              <option value="Amanah">Amanah</option>
            </select>
          </div>

          <div class="form-group">
              <label for="description">Description*:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Add Notice</button>
      </form>
  </div>
</div>
</div>
@endsection
