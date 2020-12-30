@extends ('master')
@section('navbar')
<a class="navbar-brand" href="javascript:void(0)">Absensi</a>
@endsection
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tabel Absensi</h4>
                  <p class="card-category"> Silahkan cek kehadiran anda</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Prodi</th>
                        <th>Mapel</th>
                        <th>Absent</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{$absensi->NID}}</td>
                          <td>{{$absensi->first_name}} {{$absensi->last_name}}</td>
                          <td>{{$absensi->prodi}}</td>
                          <td>{{$absensi->mapel}}</td>
                          
                          <td class="text-primary"> $36,738</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection