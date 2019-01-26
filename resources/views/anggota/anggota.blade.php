@extends('layouts.master')

@section('_title')

<div class="alert alert-info">
    Halaman Manajemen Anggota  <strong> Jamingup Studio.</strong>
</div>

@endsection

@section('_content')

<br>
<div class="input-group col-xs-3">
      
    <span class="input-group-addon" style="background-color: #66b3ff"><i class="glyphicon glyphicon-search"></i></span>
    <input id="myInput" type="text" class="form-control" name="myInput" onkeyup="myFunction()">
  </div


   

   
<br> <br>
  

<div class="panel panel-default">
  <div class="panel-body">
  <a href="{{url('add')}}" class="btn btn-info btn-md">
    <span class="glyphicon glyphicon-plus"></span>&nbsp;Data Anggota
  </a> 

<div style="overflow-x:auto;"> <br>

    <table id ="myTable" class="table table-bordered">
<thead>
    <tr>
        <th><center><b>No</b></center></th>
        <th><center><b>Nama</b></center></th>
        <th><center><b>Kontak</b></center></th>
        <th><center><b>Divisi</b></center></th>
        <th colspan="3"><center><b>Action</b></center></th>
    </tr>
</thead>
    <tbody>
      <?php $no = 1; ?>
        @foreach($anggota as $show)
            <tr>
                <td><center>{{ $no++ }}</center></td>
                <td>{{ $show->nama }}</td>
                <td>{{ $show->Kontak }}</td>
                <td>{{ $show->divisi }}</td>
                <td><center> <a href="{{ url('user/show')}}/{{$show->id}}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-eye-open"></span> Show </a> </center></td>
                <td> <center> <a href="{{ url('user/edit')}}/{{$show->id}}" class="btn btn-warning btn-xs">
                    <span class="glyphicon glyphicon-edit"></span> Edit </a> </center> </td>
                <td><center> <a href="{{ url('user/delete')}}/{{$show->id}}" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-trash"></span> Delete </a> </center></td>
            </center>
        </tr>
       @endforeach
    </tbody>
  </table>
        </div>
    </div>
    
</div>
<h5 style="text-align:right;"> Jumlah data : {{ $count }} </h5>



</head>
<body>




<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    // td = tr[i].getElementsByTagName("td")[2];
    // td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

@endsection

