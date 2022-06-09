@extends('admin.layouts.app')

@section('content')
<div class="row"> 
    <div class="col-md-3 col-sm-3">
      <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">airport_shuttle</i>
            </div>
            <p class="card-category">Booking Today</p>
            
          </div>
          <div class="card-footer">
              <div class="stats">
                  <i class="material-icons">date_range</i> Today
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">directions_car</i>
            </div>
            <p class="card-category">Upcoming Booking</p>
        
          </div>
          <div class="card-footer">
              <div class="stats">
                  <i class="material-icons">date_range</i> All time
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="material-icons">store</i>
            </div>
            <p class="card-category">Today's Income</p>

          </div>
          <div class="card-footer">
              <div class="stats">
                  <i class="material-icons">date_range</i> Today
              </div>
          </div>
      </div>
  </div>
  <div class="col-md-3 col-sm-3">
      <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">monetization_on</i>
            </div>
            <p class="card-category">Revenue</p>
          </div>
          <div class="card-footer">
              <div class="stats">
                  <i class="material-icons">date_range</i> All Time
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

