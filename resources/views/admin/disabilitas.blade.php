<x-layout>
    <main id="main" class="main">
        <div class="pagetitle mb-4">
            <h1>Data Disabilitas</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"></a></li>
              </ol>
            </nav>
            @if (Auth::user()->role === 'petugas')
                <div class="d-flex justify-content-between">
                    <div></div> 
                    <a href="#" class="btn btn-primary btn-sm" style="margin-right: 20px" onclick="createDisabilitas()"><i class="bi bi-plus"></i></a>
                </div>
            @endif
          </div><!-- End Page Title -->
    
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
            <div id="alert-div"></div>
              <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between" style="margin: 20px">
                        <div></div> 
                        @if (Auth::user()->role === 'admin')
                            <div>
                                <a href="{{ route('difabel.exportExcel') }}" class="btn btn-warning btn-sm ">Export Excel</a>
                                <a href="{{ route('difabel.exportExcel') }}" class="btn btn-primary btn-sm ">Export PDF</a>
                            </div>
                        @endif
                        </div>
                    <table class="table table-striped" id="disabilitas_table">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>Jenis Disabilitas</th>
                            <th>Pekerjaan</th>
                            <th>Kebutuhan Disabilitas</th>
                            <th width="140px" style="text-align: center;">Aksi</th>
                        </tr>
                        </thead>
                        <tbody id="disabilitas-table-body">
                        
                        </tbody>
                    </table>
                </div>
              </div>
    
            </div>
          </div>
        </section>

        <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-l">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="error-div"></div>
                    <form>
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                        </div>
                        <div class="form-group">
                            <label class=" col-form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                              <option value="" disabled selected>Pilih Jenis Kelamin</option>
                              <option value="L">Laki Laki</option>
                              <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class=" col-form-label">Jenis Disabilitas</label>
                            <select class="form-select" name="jenis_disabilitas_id" id="jenis_disabilitas_id">
                              <option value="" disabled selected>Pilih Jenis Disabilitas</option>
                              @foreach ($jenisDisabilitas as $jenis)
                                <option value="{{$jenis->jenis_disabilitas_id}}">{{$jenis->nama}}</option>
                              @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label for="inputDate" class="col-form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input class="form-control" id="pekerjaan" rows="3" name="pekerjaan"></input>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                  <button type="submit" id="save-disabilitas-btn" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <div class="modal fade" id="ExtralargeModal" tabindex="-1">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><b>Kelola Data Layanan/Kebutuhan</b></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-lg-3 col-md-4 label ">Nama lengkap</div>
                        <div class="col-lg-9 col-md-8" id="nama-info"></div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-3 col-md-4 label">Jenis Disabilitas</div>
                        <div class="col-lg-9 col-md-8" id="jenis-disabilitas-info"></div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                        <div class="col-lg-9 col-md-8" id="jenis-kelamin-info"></div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-3 col-md-4 label">Tempat, Tanggal Lahir</div>
                        <div class="col-lg-9 col-md-8" id="ttl-info"></div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                        <div class="col-lg-9 col-md-8" id="alamat-info"></div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                        <div class="col-lg-9 col-md-8" id="pekerjaan-info"></div>
                    </div>

                    <table class="table table-striped">
                        <h5 class="mt-5">Keperluan/Layanan Difabel</h5>
                        <div class="d-flex justify-content-between mb-4">
                            <div></div> 
                            <div id="btn-tambah-layanan"></div>
                        </div>
                        <div id="success-layanan-div"></div>
                        <thead>
                          <tr>
                            <th scope="col">Nama Keperluan/Layanan</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody id="tabel-keperluan-disabilitas">
                            
                        </tbody>
                      </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div><!-- End Extra Large Modal-->

          <div class="modal fade" id="tambah-edit-layanan" tabindex="-2">
            <div class="modal-dialog modal-dialog-centered modal-l">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="error-div"></div>
                    <form>
                        <input type="hidden" name="update_id" id="update_id">
                        <input type="hidden" name="disabilitas_id" id="disabilitas_id">
                        <div class="form-group">
                            <label class=" col-form-label">Keperluan/Layanan</label>
                            <select class="form-select" name="keperluan_layanan_id" id="keperluan_layanan_id">
                              <option value="" disabled selected>Pilih Keperluan/Layanan</option>
                                @foreach ($keperluanLayanan as $keperluan)
                                    <option value="{{$keperluan->keperluan_layanan_id}}">{{$keperluan->nama}}</option>
                                @endforeach 
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                  <button type="submit" id="save-layanan-difabel" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>
    
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript">
            $(function() {
                var baseUrl = $('meta[name=app-url]').attr("content");
                let url = baseUrl + '/disabilitas';
                // create a datatable
                $('#disabilitas_table').DataTable({
                    processing: true,
                    ajax: url,
                    "order": [[ 0, "nama_lengkap" ]],
                    columns: [
                        { data: 'nama_lengkap'},
                        { data: 'jenis_kelamin'},
                        { data: 'ttl'},
                        { data: 'alamat'},
                        { data: 'jenis_disabilitas.nama'},
                        { data: 'pekerjaan'},
                        { data: 'keperluan_disabilitas_list'},
                        { data: 'action'},
                    ],
                      
                });
            });
              
          
            function reloadTable()
            {
                /*
                    reload the data on the datatable
                */
                $('#disabilitas_table').DataTable().ajax.reload();
            }
          
            /*
                check if form submitted is for creating or updating
            */
            $("#save-disabilitas-btn").click(function(event ){
                event.preventDefault();
                if($("#update_id").val() == null || $("#update_id").val() == "")
                {
                    storeProject();
                } else {
                    updateProject();
                }
            })
          
            /*
                show modal for creating a record and 
                empty the values of form and remove existing alerts
            */
            function createDisabilitas()
            {
                $("#alert-div").html("");
                $("#error-div").html("");
                $("#update_id").val("");
                $("#nama_lengkap").val("");
                $("#jenis_kelamin").val("");
                $("#tanggal_lahir").val("");
                $("#tempat_lahir").val("");
                $("#alamat").val("");
                $("#jenis_disabilitas_id").val("");
                $("#pekerjaan").val("");
                $("#modalDialogScrollable").modal('show'); 
            }
          
            /*
                submit the form and will be stored to the database
            */
            function storeProject()
            {   
                $("#save-disabilitas-btn").prop('disabled', true);
                let url = $('meta[name=app-url]').attr("content") + "/disabilitas";
                let data = {
                    nama_lengkap: $("#nama_lengkap").val(),
                    jenis_kelamin: $("#jenis_kelamin").val(),
                    tanggal_lahir: $("#tanggal_lahir").val(),
                    tempat_lahir: $("#tempat_lahir").val(),
                    alamat: $("#alamat").val(),
                    jenis_disabilitas_id: $("#jenis_disabilitas_id").val(),
                    pekerjaan: $("#pekerjaan").val(),
                };
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: data,
                    success: function(response) {
                        $("#save-disabilitas-btn").prop('disabled', false);
                        let successHtml = '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert"><strong>Success!</strong> Data has been saved successfully.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#alert-div").html(successHtml);
                        $("#nama_lengkap").val("");
                        $("#jenis_kelamin").val("");
                        $("#tanggal_lahir").val("");
                        $("#tempat_lahir").val("");
                        $("#alamat").val("");
                        $("#jenis_disabilitas_id").val("");
                        $("#pekerjaan").val("");
                        reloadTable();
                        $("#modalDialogScrollable").modal('hide');
                    },
                    error: function(response) {
                        $("#save-disabilitas-btn").prop('disabled', false);
                        if (typeof response.responseJSON.errors !== 'undefined') {
                        let errors = response.responseJSON.errors;
                        let descriptionValidation = "";
                        if (typeof errors.description !== 'undefined') {
                            descriptionValidation = '<li>' + errors.description[0] + '</li>';
                        }
                        let nameValidation = "";
                        if (typeof errors.name !== 'undefined') {
                            nameValidation = '<li>' + errors.name[0] + '</li>';
                        }
                        let errorHtml = '<div class="alert alert-danger" role="alert">' +
                            '<b>Validation Error!</b>' +
                            '<ul>' + nameValidation + descriptionValidation + '</ul>' +
                            '</div>';
                            $("#error-div").html(errorHtml);            
                        }
                    }
                });
            }
          
          
            /*
                edit record function
                it will get the existing value and show the project form
            */
            function editDisabilitas(id)
            {
                let url = $('meta[name=app-url]').attr("content") + "/disabilitas/" + id;
                $.ajax({
                    url: url,
                    type: "GET",
                    success: function(response) {
                        let disabilitas = response.disabilitas;
                        $("#modalDialogScrollable .modal-title").text("Edit Data"); 
                        $("#alert-div").html("");
                        $("#error-div").html("");
                        $("#update_id").val(disabilitas.disabilitas_id);
                        $("#nama_lengkap").val(disabilitas.nama_lengkap);
                        $("#jenis_kelamin").val(disabilitas.jenis_kelamin);
                        $("#tanggal_lahir").val(disabilitas.tanggal_lahir);
                        $("#tempat_lahir").val(disabilitas.tempat_lahir);
                        $("#alamat").val(disabilitas.alamat);
                        $("#jenis_disabilitas_id").val(disabilitas.jenis_disabilitas_id);
                        $("#pekerjaan").val(disabilitas.pekerjaan);
                        $("#modalDialogScrollable").modal('show'); 
                    },
                    error: function(response) {
                        console.log(response.responseJSON)
                    }
                });
            }
          
            /*
                sumbit the form and will update a record
            */
            function updateProject()
            {
                $("#save-disabilitas-btn").prop('disabled', true);
                let url = $('meta[name=app-url]').attr("content") + "/disabilitas/" + $("#update_id").val();
                let data = {
                    id: $("#update_id").val(),
                    nama_lengkap: $("#nama_lengkap").val(),
                    jenis_kelamin: $("#jenis_kelamin").val(),
                    tanggal_lahir: $("#tanggal_lahir").val(),
                    tempat_lahir: $("#tempat_lahir").val(),
                    alamat: $("#alamat").val(),
                    jenis_disabilitas_id: $("#jenis_disabilitas_id").val(),
                    pekerjaan: $("#pekerjaan").val(),
                };
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "PUT",
                    data: data,
                    success: function(response) {
                        $("#save-disabilitas-btn").prop('disabled', false);
                        let successHtml = '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert"><strong>Success!</strong> Data has been saved successfully.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#alert-div").html(successHtml);
                        $("#nama_lengkap").val("");
                        $("#jenis_kelamin").val("");
                        $("#tanggal_lahir").val("");
                        $("#tempat_lahir").val("");
                        $("#alamat").val("");
                        $("#jenis_disabilitas_id").val("");
                        $("#pekerjaan").val("");
                        reloadTable();
                        $("#modalDialogScrollable").modal('hide');
                    },
                    error: function(response) {
                        $("#save-disabilitas-btn").prop('disabled', false);
                        if (typeof response.responseJSON.errors !== 'undefined') {
                        let errors = response.responseJSON.errors;
                        let descriptionValidation = "";
                        if (typeof errors.description !== 'undefined') {
                            descriptionValidation = '<li>' + errors.description[0] + '</li>';
                        }
                        let nameValidation = "";
                        if (typeof errors.name !== 'undefined') {
                            nameValidation = '<li>' + errors.name[0] + '</li>';
                        }
                        let errorHtml = '<div class="alert alert-danger" role="alert">' +
                            '<b>Validation Error!</b>' +
                            '<ul>' + nameValidation + descriptionValidation + '</ul>' +
                            '</div>';
                            $("#error-div").html(errorHtml);            
                        }
                    }
                });
            }
          
        //     /*
        //         get and display the record info on modal
        //     */
            function showDisabilitas(id)
            {
                $("#nama-info").html("");
                $("#jenis-kelamin-info").html("");
                $("#ttl-info").html("");
                $("#alamat-info").html("");
                $("#jenis-disabilitas-info").html("");
                $("#pekerjaan-info").html("");
                let url = $('meta[name=app-url]').attr("content") + "/disabilitas/" + id +"";
                $.ajax({
                    url: url,
                    type: "GET",
                    success: function(response) {
                        let disabilitas = response.disabilitas;
                        let kebutuhanDisabilitas = response.kebutuhan;
                        
                        $("#nama-info").html(disabilitas.nama_lengkap);
                        $("#jenis-kelamin-info").html(disabilitas.jenis_kelamin);
                        $("#ttl-info").html(disabilitas.ttl);
                        $("#alamat-info").html(disabilitas.alamat);
                        $("#jenis-disabilitas-info").html(disabilitas.jenis_disabilitas);
                        $("#pekerjaan-info").html(disabilitas.pekerjaan);

                        let kebutuhanHtml = "";
                        $.each(kebutuhanDisabilitas, function(index, value) {
                            let bgColor;
                            
                            if (value.status_diterima === 'Diterima') {
                                bgColor = 'bg-success';
                            } else if (value.status_diterima === 'Diajukan') {
                                bgColor = 'bg-secondary';
                            } else {
                                bgColor = 'bg-danger';
                            }

                            kebutuhanHtml += '<tr><td>' + value.keperluan + '</td>' +
                                '<td class="' + bgColor + ' mt-4" style="color:white;">' + 
                                value.status_diterima + '</td>' +
                                '<td class="d-flex justify-content-center">' + 
                                '<a href="#" class="btn btn-danger btn-sm" style="margin-right: 5px" onclick="updateStatusDitolak(\'' + value.keperluan_disabilitas_id + '\')"><i class="bi bi-x"></i></a>' +
                                '<a href="#" class="btn btn-success btn-sm" onclick="updateStatusDiterima(\'' + value.keperluan_disabilitas_id + '\')"><i class="bi bi-check"></i></a>' +
                                '</td></tr>';

                        });

                        $("#tabel-keperluan-disabilitas").html(kebutuhanHtml);
                        $("#ExtralargeModal").modal('show'); 
                    },
                    error: function(response) {
                        console.log(response.responseJSON)
                    }
                });
            }

            function kelolaLayananDisabilitas(id)
            {
                $("#nama-info").html("");
                $("#jenis-kelamin-info").html("");
                $("#ttl-info").html("");
                $("#alamat-info").html("");
                $("#jenis-disabilitas-info").html("");
                $("#pekerjaan-info").html("");
                let url = $('meta[name=app-url]').attr("content") + "/disabilitas/" + id +"";
                $.ajax({
                    url: url,
                    type: "GET",
                    success: function(response) {
                        let disabilitas = response.disabilitas;
                        let kebutuhanDisabilitas = response.kebutuhan;
                        let roleUserLogin = response.roleLogin;
                        
                        $("#nama-info").html(disabilitas.nama_lengkap);
                        $("#jenis-kelamin-info").html(disabilitas.jenis_kelamin);
                        $("#ttl-info").html(disabilitas.ttl);
                        $("#alamat-info").html(disabilitas.alamat);
                        $("#jenis-disabilitas-info").html(disabilitas.jenis_disabilitas);
                        $("#pekerjaan-info").html(disabilitas.pekerjaan);

                        let buttonTambah = '<a href="#" class="btn btn-primary btn-sm" style="margin-right: 20px" onclick="addLayanan(\'' + disabilitas.disabilitas_id + '\')""><i class="bi bi-plus"></i></a>';

                        let kebutuhanHtml = "";
                        $.each(kebutuhanDisabilitas, function(index, value) {
                            let bgColor;
                            
                            if (value.status_diterima === 'Diterima') {
                                bgColor = 'bg-success';
                            } else if (value.status_diterima === 'Diajukan') {
                                bgColor = 'bg-secondary';
                            } else {
                                bgColor = 'bg-danger';
                            }

                            if (roleUserLogin == 'admin') {
                                kebutuhanHtml += '<tr><td>' + value.keperluan + '</td>' +
                                    '<td class="' + bgColor + ' mt-4" style="color:white;">' + 
                                    value.status_diterima + '</td>' +
                                    '<td class="d-flex justify-content-center">' + 
                                    '<a href="#" class="btn btn-danger btn-sm" style="margin-right: 5px" onclick="updateStatusDitolak(\'' + value.keperluan_disabilitas_id + '\')"><i class="bi bi-x"></i></a>' +
                                    '<a href="#" class="btn btn-success btn-sm" onclick="updateStatusDiterima(\'' + value.keperluan_disabilitas_id + '\')"><i class="bi bi-check"></i></a>' +
                                    '</td></tr>';
                            } else {
                                kebutuhanHtml += '<tr><td>' + value.keperluan + '</td>' +
                                    '<td class="' + bgColor + ' mt-4" style="color:white;">' + 
                                    value.status_diterima + '</td>' +
                                    '<td class="d-flex justify-content-center">' + 
                                    '<a href="#" class="btn btn-danger btn-sm" style="margin-right: 5px" onclick="hapusLayanan(\'' + value.keperluan_disabilitas_id + '\')"><i class="bi bi-trash"></i></a>' +
                                    '</td></tr>';
                            }
                        });

                        $("#btn-tambah-layanan").html(buttonTambah);
                        $("#tabel-keperluan-disabilitas").html(kebutuhanHtml);
                        $("#ExtralargeModal").modal('show'); 
                    },
                    error: function(response) {
                        console.log(response.responseJSON)
                    }
                });
            }


            $("#save-layanan-difabel").click(function(event ){
                event.preventDefault();
                storeLayananDifabel();
              
            })

            /*
                edit record function
                it will get the existing value and show the project form
            */
            function addLayanan(id)
            {
                $("#update_id").val("");
                $("#keperluan_layanan_id").val("");
                $("#disabilitas_id").val(id);
                $("#tambah-edit-layanan").modal('show'); 
            }

            function storeLayananDifabel()
            {   
                $("#save-layanan-difabel").prop('disabled', true);
                let url = $('meta[name=app-url]').attr("content") + "/kebutuhan-difabel";
                let data = {
                    keperluan_layanan_id: $("#keperluan_layanan_id").val(),
                    disabilitas_id: $("#disabilitas_id").val(),
                    status_diterima: 0
                };
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "POST",
                    data: data,
                    success: function(response) {
                        let disabilitasId = response.disabilitas_id;

                        $("#save-layanan-difabel").prop('disabled', false);
                        $("#tambah-edit-layanan").modal('hide'); 
                        reloadTable()
                        kelolaLayananDisabilitas(disabilitasId)
                        $("#ExtralargeModal").modal('hide');

                        let successHtml = '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert"><strong>Success!</strong> Data has been saved successfully.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#success-layanan-div").html(successHtml);
                    },
                    error: function(response) {
                        $("#save-layanan-difabel").prop('disabled', false);
                        if (typeof response.responseJSON.errors !== 'undefined') {
                        let errors = response.responseJSON.errors;
                        let descriptionValidation = "";
                        if (typeof errors.description !== 'undefined') {
                            descriptionValidation = '<li>' + errors.description[0] + '</li>';
                        }
                        let nameValidation = "";
                        if (typeof errors.name !== 'undefined') {
                            nameValidation = '<li>' + errors.name[0] + '</li>';
                        }
                        let errorHtml = '<div class="alert alert-danger" role="alert">' +
                            '<b>Validation Error!</b>' +
                            '<ul>' + nameValidation + descriptionValidation + '</ul>' +
                            '</div>';
                            $("#error-div").html(errorHtml);            
                        }
                    }
                });
            }

            function hapusLayanan(id)
            {
                let url = $('meta[name=app-url]').attr("content") + "/kebutuhan-difabel/" + id;
                let data = {
                    id: id,
                };
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "DELETE",
                    data: data,
                    success: function(response) {
                        let disabilitasId = response.disabilitas_id;

                        reloadTable()
                        kelolaLayananDisabilitas(disabilitasId)
                        let successHtml = '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert"><strong>Success!</strong> Data berhasil dihapus.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#success-layanan-div").html(successHtml);
                    },
                    error: function(response) {
                        let errorHtml = '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert"><strong>Error!</strong> Data gagal dihapus.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#alert-div").html(errorHtml)
                        console.log(response.responseJSON)
                    }
                });
            }

            function updateStatusDitolak(id, Status) {
                let url = $('meta[name=app-url]').attr("content") + "/update-status-keperluan/" + id;
                let data = {
                    keperluan_disabilitas_id: id,
                    status_diterima: 2
                };
                
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "PUT",
                    data: data,
                    success: function(response) {
                        let successHtml = '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert"><strong>Success!</strong> Data has been saved successfully.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#alert-div").html(successHtml);
                        reloadTable();
                        $("#ExtralargeModal").modal('hide');
                    },
                    error: function(response) {
                        if (typeof response.responseJSON.errors !== 'undefined') {
                        let errors = response.responseJSON.errors;
                        let descriptionValidation = "";
                        if (typeof errors.description !== 'undefined') {
                            descriptionValidation = '<li>' + errors.description[0] + '</li>';
                        }
                        let nameValidation = "";
                        if (typeof errors.name !== 'undefined') {
                            nameValidation = '<li>' + errors.name[0] + '</li>';
                        }
                        let errorHtml = '<div class="alert alert-danger" role="alert">' +
                            '<b>Validation Error!</b>' +
                            '<ul>' + nameValidation + descriptionValidation + '</ul>' +
                            '</div>';
                            $("#error-div").html(errorHtml);            
                        }
                    }
                });   
            }

            function updateStatusDiterima(id, Status) {
                let url = $('meta[name=app-url]').attr("content") + "/update-status-keperluan/" + id;
                let data = {
                    keperluan_disabilitas_id: id,
                    status_diterima: 1
                };
                
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "PUT",
                    data: data,
                    success: function(response) {
                        let successHtml = '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert"><strong>Success!</strong> Data has been saved successfully.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#alert-div").html(successHtml);
                        reloadTable();
                        $("#ExtralargeModal").modal('hide');
                    },
                    error: function(response) {
                        if (typeof response.responseJSON.errors !== 'undefined') {
                        let errors = response.responseJSON.errors;
                        let descriptionValidation = "";
                        if (typeof errors.description !== 'undefined') {
                            descriptionValidation = '<li>' + errors.description[0] + '</li>';
                        }
                        let nameValidation = "";
                        if (typeof errors.name !== 'undefined') {
                            nameValidation = '<li>' + errors.name[0] + '</li>';
                        }
                        let errorHtml = '<div class="alert alert-danger" role="alert">' +
                            '<b>Validation Error!</b>' +
                            '<ul>' + nameValidation + descriptionValidation + '</ul>' +
                            '</div>';
                            $("#error-div").html(errorHtml);            
                        }
                    }
                });
                
            }
          
        //     /*
        //         delete record function
        //     */
            function destroyDisabilitas(id)
            {
                let url = $('meta[name=app-url]').attr("content") + "/disabilitas/" + id;
                let data = {
                    id: $("#update_id").val(),
                    nama_lengkap: $("#nama_lengkap").val(),
                    jenis_kelamin: $("#jenis_kelamin").val(),
                    tanggal_lahir: $("#tanggal_lahir").val(),
                    tempat_lahir: $("#tempat_lahir").val(),
                    alamat: $("#alamat").val(),
                    jenis_disabilitas_id: $("#jenis_disabilitas_id").val(),
                    pekerjaan: $("#pekerjaan").val(),
                };
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "DELETE",
                    data: data,
                    success: function(response) {
                        let successHtml = '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert"><strong>Success!</strong> Data berhasil dihapus.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#alert-div").html(successHtml);
                        reloadTable();
                    },
                    error: function(response) {
                        let errorHtml = '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert"><strong>Error!</strong> Data gagal dihapus.<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#alert-div").html(errorHtml)
                        console.log(response.responseJSON)
                    }
                });
            }
        </script>
      </main><!-- End #main -->
  </x-layout>