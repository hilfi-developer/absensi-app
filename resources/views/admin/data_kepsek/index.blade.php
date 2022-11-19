@extends('layouts.app')

@push('css_vendors')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/izitoast/css/iziToast.min.css') }}">
<link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Kepala Sekolah</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>                                 
                            <tr>
                            <th class="text-center">
                                #
                            </th>
                            <th>NUPTK</th>
                            <th>Nama</th>
                            <th>Unit Kerja</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Foto</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="dataKepsek" tabindex="-1" role="dialog" aria-labelledby="dataKepsek" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dataKepsek">Data Kepala Sekola <span class="badge badge-success">Edit</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">NUPTK</label>
              <input type="text" class="form-control" id="nuptk">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Unit Kerja</label>
              <input type="text" class="form-control" id="unit_kerja">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">No Telp</label>
              <input type="text" class="form-control" id="no_telp">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Alamat</label>
              <textarea name="" id="alamat" class="form-control"></textarea>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir">
            </div>
          </div>
          <div class="col-sm-6">
                
                <div class="form-group">
                  <label for="">Foto</label>
                  <input type="file" oninput="prev.src=window.URL.createObjectURL(this.files[0])" class="form-control" id="filee">
                </div>
                <!-- File preview --> 
                <div id="filepreview" class="displaynone" > 
                  <img src="" class="rounded d-block" id="prev" with="120px" height="120px"><br>
                </div>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="saveDataKepsek">Edit</button>
      </div>        
    </div>
  </div>
</div>
@endsection

@push('script_vendors')
<!-- JS Libraies -->
<script src="{{ asset('stisla/dist/assets/modules/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script>


let dataId = [];
  $('#filepreview img').hide();

  $("#table-1").dataTable({
      "pageLength": 10,
      "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, 'semua']],
      "bLengthChange": true,
      "bFilter": true,
      "bInfo": true,
      "processing":true,
      "bServerSide": true,
      "order": [[ 1, "desc" ]],
      "autoWidth": false,
      "ajax":{
        url: "{{ url('') }}/admin/data-kepsek/data",
        type: "GET",
      },
      columnDefs: [
        {
          "data": "id",
          "targets": 0,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
              return meta.row + meta.settings._iDisplayStart + 1;
          }
        },
        {
          "targets": 1,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
            dataId[row.id] = row;
            return row.nuptk;
          }
        },
        {
          "targets": 2,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
            return row.nama;
          }
        },
        {
          "targets": 3,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
            return row.unit_kerja;
          }
        },
        {
          "targets": 4,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
            return row.no_hp;
          }
        },
        {
          "targets": 5,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
            return row.alamat;
          }
        },
        {
          "targets": 6,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
            return row.tempat_lahir;
          }
        },
        {
          "targets": 7,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
            return row.tanggal_lahir;
          }
        },
        {
          "targets": 8,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
            if(row.foto == null) {
              return `<img style="max-width:35px;max-height:35px;" src="{{url('')}}/stisla/dist/assets/img/avatar/avatar-1.png"/>`
            }else{
              return `<img style="max-width:85px;max-height:85px;" src="{{ Storage::url('public/img/${row.foto}')}}"/>`
            }
          }
        },
        {
          "targets": 9,
          "class":"text-nowrap",
          "render": function(data, type, row, meta){
              return `
              <button type="button" class="btn btn-warning" onclick="showData('${row.id}')">
                Edit
              </button>
              `;
          }
        }
      ]
  });

  $.ajaxSetup({
      headers:{
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  })
  

function showData(id) {
  const data = dataId[id];
  $('#dataKepsek').modal('show');
  $('#nuptk').val(data.nuptk)
  $('#nama').val(data.nama)
  $('#unit_kerja').val(data.unit_kerja)
  $('#no_telp').val(data.no_hp)
  $('#alamat').val(data.alamat)
  $('#tempat_lahir').val(data.tempat_lahir)
  $('#tanggal_lahir').val(data.tanggal_lahir)
  $('#filepreview img').attr('src','/storage/img/'+data.foto);
  $('#filepreview img').show();


  $('#saveDataKepsek').on('click', function(e) {
    e.preventDefault();

    // Get the selected file
    var files = $('#filee')[0].files;
    var data = new FormData();

    // Append data 
    data.append('foto',files[0]);
    data.append('nuptk', $('#nuptk').val());
    data.append('nama', $('#nama').val());
    data.append('unit_kerja', $('#unit_kerja').val());
    data.append('no_hp', $('#no_telp').val());
    data.append('alamat', $('#alamat').val());
    data.append('tempat_lahir', $('#tempat_lahir').val());
    data.append('tanggal_lahir', $('#tanggal_lahir').val());
    $.ajax({
      url:'data-kepsek/'+id,
      method: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      data:data,
      success:function(response){
        console.log(response.data);
        iziToast.success({
          title: 'Success',
          message: 'Data Kepala Sekolah berhasil di edit',
          position: 'topRight'
        });
        window.location.reload(true);

        // $('#table-1').DataTable().clear().draw();
        $('#dataKepsek').modal('hide');
      }
    });
  });
}
  

  
</script>
@endpush
