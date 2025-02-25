@extends ('layouts.app')

@section('content')

<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <div class="card p-2">
        <div class="bg-info" >
        <h1 class="text-center">Tambah Data Karyawan</h1>
        </div>
        <form class="row g-3" action="/karyawan" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nama</label>
          <input type="text" class="form-control" name="karyawan_name" id="inputEmail4">
          <span class="text-danger">
            @error('karyawan_name')
            {{$message}}
                
            @enderror
          </span>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Kebun/Unit</label>
          <input type="text" class="form-control" name="karyawan_kebun" id="inputEmail4">
          <span class="text-danger">
            @error('karyawan_kebun')
            {{$message}}
                
            @enderror
          </span>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Jenis Lisensi</label>
          <input type="text" class="form-control" name="karyawan_jenis" id="inputEmail4">
          <span class="text-danger">
            @error('karyawan_jenis')
            {{$message}}
                
            @enderror
          </span>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Nomor Lisensi</label>
          <input type="text" name="karyawan_nomor" class="form-control" id="inputPassword4">
          <span class="text-danger">
            @error('karyawan_nomor')
            {{$message}}
                
            @enderror
          </span>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Tanggal Lisensi</label>
          <input type="text" class="form-control" name="karyawan_tanggal" id="inputEmail4">
          <span class="text-danger">
            @error('karyawan_tanggal')
            {{$message}}
                
            @enderror
          </span>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Masa Berlaku</label>
          <input type="text" name="karyawan_masa" class="form-control" id="inputPassword4">
          <span class="text-danger">
            @error('karyawan_masa')
            {{$message}}
                
            @enderror
          </span>
        </div>

        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Foto</label>
          <input type="file" name="karyawan_foto" class="form-control" id="inputPassword4">
          <span class="text-danger">
            @error('foto')
            {{$message}}
            @enderror
          </span>
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>  
    </div>
  </div>    
</div>
</body>
@endsection