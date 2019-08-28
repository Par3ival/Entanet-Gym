@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Item
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('members.store') }}">
          <div class="form-group">
              @csrf
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" name="fname"/>
          </div>
          <div class="form-group">
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" name="lname"/>
          </div>
          <div class="form-group">
              <label for="email">Email Address:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address"/>
          </div>
          <div class="form-group">
          <label for="dob">Date of Birth:</label>
              <div class="input-group-prepend">
                <span class="input-group-text">yyyy/mm/dd</span>
              </div>
              <input type="text" class="form-control" name="dob"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="number" class="form-control" name="tp"/>
          </div>
          <div class="form-group">
              <input type="radio" name="membership" value="annual"/>
              <label for="memb">Annual Membership</label>

              <input type="radio" name="membership" value="monthly"/>
              <label for="memb">Monthly Membership</label>
              
          </div>
          <button type="submit" class="btn btn-primary">Register New Member</button>
      </form>
  </div>
</div>
@endsection