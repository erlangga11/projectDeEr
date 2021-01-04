<!DOCTYPE html>
<html>
<head>
<title>Laporan PDF USER</title>
</head>
<body>
<style type="text/css">
table tr td{
font-size: 10pt;
color : #000;
background : #bbb;
border : 2pt;
padding : 2px 4px;
border : 2px;
outline: 1.3px solid #fff;
},
table tr th{
font-size: 10pt;
color : #fff;
background : #001;
padding : 2px 4px;
outline: 1.3px solid #fff;
}
.container{
    max-width: 1000px;
    margin-left: auto;
    margin-right: center;
    padding-left: 100px;
    padding-right: 10px;
}
body {
  font-family: 'lato', sans-serif;
}
</style>
<center>
<h5>Laporan Absensi</h4>
</center>
<div class='container'>
<table class='table table-bordered'>
<thead>
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Email</th>
<th>Address</th>
<th>Roles</th>
<th>Bio</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($user as $u)
<tr>
<td>{{ $u -> NID }}</td>
<td>{{$u->first_name}}</td>
<td>{{$u->email}}</td>
<td>{{$u->address}}</td>
<td>{{$u->roles}}</td>
<td>{{$u->bio}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</body>
</html>