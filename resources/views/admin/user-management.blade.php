<x-layout>
  <main id="main" class="main">
    <div class="pagetitle mb-4">
      <h1>User Management</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"></a></li>
        </ol>
      </nav>
      <div class="d-flex justify-content-between">
          <div></div> 
          <a href="#" class="btn btn-primary btn-sm tambah_modal" style="margin-right: 20px"><i class="bi bi-plus"></i></a>
      </div>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-body">
            @if(session('success'))
              <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <script>
              setTimeout(function() {
                $('.alert-success').alert('close');
              }, 5000);
              </script>
            @endif

            @if ($errors->any())
              <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col" class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $user)
                <tr>
                  <th scope="row">{{ $key+1 }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ Str::ucfirst($user->role) }}</td>
                  <td class="d-flex justify-content-center">
                      <button class="btn btn-primary btn-sm edit_modal" style="margin-right: 10px;" value="{{ $user->id }}" ><i class="bi bi-pen"></i></button>
                      <form action="{{ route('manageuser.destroy', $user->id) }}" method="post" style="margin-left: 10px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
  
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('manageuser.store') }}" method="POST" enctype="multipart/form-data" id="userForm">
              @csrf
              <input type="hidden" name="id" id="id">
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="name">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="email">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" id="password">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                  <select class="form-select" name="role" id="role">
                    <option value="" disabled selected>Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <script type="text/javascript">
    $(document).on("click", ".tambah_modal", function () {
      $("#id").val("");
      $("#name").val("");
      $("#email").val("");
      $("#role").val("");
      $("#modalDialogScrollable .modal-title").text("Tambah Data"); // Mengubah judul modal
      $("#modalDialogScrollable").modal("show"); // Menampilkan modal
    });

    $(document).on("click", ".edit_modal", function () {
        var userId = $(this).val();
        $.get("/manageuser/" + userId + "/edit", function (data) {
            // Mengisi data ke dalam form
            $("#id").val(data.id);
            $("#name").val(data.name);
            $("#email").val(data.email);
            $("#role").val(data.role);
            $("#modalDialogScrollable .modal-title").text("Edit Data"); // Mengubah judul modal
            $("#modalDialogScrollable").modal("show"); // Menampilkan modal
        }).fail(function () {
            alert("Error fetching user data"); // Menampilkan pesan kesalahan jika gagal mengambil data
        });
    });
  </script>
</x-layout>