@extends ('master')
@section('navbar')
<a class="navbar-brand" href="javascript:void(0)">User Profile</a>
@endsection
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="/user/update/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIM</label>
                          <input type="text" class="form-control" name="NID" disabled value="{{ Auth::user()->NID }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jurusan Teknologi Informasi</label>
                          <input type="text" class="form-control" disabled value="{{ Auth::user()->jurusan }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Prodi</label>
                          <input type="text" class="form-control" name="Prodi" value="{{ Auth::user()->Prodi }}" disabled >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kelas</label>
                          <input type="text" class="form-control" name="kelas"  value="{{ Auth::user()->kelas }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Sentences</label>
                            <input type="text" class="form-control" name="bio" rows="5" value="{{ Auth::user()->bio }}">
                          </div>
                        </div>
                      </div>
                    </div>
                    @can('admin-display')
                    <a href="/user/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                    @endcan
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category">CEO / Co-Founder</h6>
                  <h4 class="card-title">Deo Fahmawan</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection