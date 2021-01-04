@extends ('master')
@section('navbar')
<a class="navbar-brand" href="javascript:void(0)">Lesson</a>
@endsection
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">Mata Kuliah</h4>
                            <p class="card-category"> Jadwal Mata Kuliah "Anda"</p>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                <thead class="">
                                    <th>Id</th>
                                    <th>Matkul</th>
                                    <th>Tugas</th>
                                    <th>Upload</th>
                                </thead>
                                <tbody>
                                @foreach($mapel as $u)
                                    <tr>
                                    <td>{{$u->id}}</td>
                                    <td>{{$u->nama_mapel}}</td>
                                    <td> 
                                    <form action="/matkul/upload/{{$u->id}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    
                                    <input type="file" name="file_materi" value="{{$u->file_materi}}">
                                    <button type="download">download</button>
                                    
                                    </td>
                                    <td>
                                    <form action="/matkul/upload/{{$u->id}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="file" name="file_tugas" value="{{$u->file_tugas}}"></td>
                                    </tr>
                                    </form>
                                @endforeach
                                </tbody>
                                </table>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            <div class="clearfix"></div>
                            </form>   
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            </div>
@endsection