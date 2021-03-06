
@extends('master')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <h1>Add New Rekening</h1>
        <hr>
        <div class="card">
          <div class="card-header">
            <strong>Rekening</strong>
          </div>
          <div class="card-body">
            <form action="{{route('rekening.update', $rekening->id)}}" method="post">
              <input type="hidden" name="_method" value="PUT">
              {{ csrf_field() }}

              <div class="form-group">
								<label for="kode">Kode</label>
								<input type="text" class="form-control" id="kode" name="kode" value="{{ $rekening->kode }}">
							</div>

              <div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" value="{{ $rekening->nama }}">
							</div>

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
