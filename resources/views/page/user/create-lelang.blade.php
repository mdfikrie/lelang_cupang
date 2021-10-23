@extends('layouts.master')
@section('title','Buat Lelangan Baru')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        <h3>Buat Lelangan Baru</h3>
                    </div>
                    <div class="card-body">
                    <form action="{{route('lelang-store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{old('judul')}}">
                                    @error('judul')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Waktu Close</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="datepicker" name="tanggal" value="{{old('tanggal')}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-calendar-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            @error('tanggal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="timepicker" name="jam" value="{{old('jam')}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-clock"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            @error('jam')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                <label for="">Gambar</label>
                                <div class="input-file input-file-image">
                                    <img class="img-upload-preview" width="150" src="http://placehold.it/150x150" alt="preview">
                                    <input type="file" class="form-control form-control-file" id="uploadImg2" name="gambar" required>
                                    <label for="uploadImg2" class="  label-input-file btn btn-black btn-round">
                                        <span class="btn-label">
                                            <i class="fa fa-file-image"></i>
                                        </span>
                                        Upload a Image
                                    </label>
                                </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" id="summernote"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{route('lelangan')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<!-- Moment JS -->

<script src="{{ asset('templates/js/plugin/moment/moment.min.js') }}"></script>
<!-- DateTimePicker -->
<script src="{{ asset('templates/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>
	<!-- Select2 -->
    <script src="{{ asset('templates/js/plugin/select2/select2.full.min.js') }}"></script>
	<!-- Bootstrap Tagsinput -->
    
    <script src="{{ asset('templates/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('templates/js/plugin/summernote/summernote-bs4.min.js') }}"></script>
	<!-- Atlantis JS -->
    
    <script src="{{ asset('templates/js/atlantis.min.js') }}"></script>
	<script>

		$('#datepicker').datetimepicker({
			format: 'YYYY-MM-DD',
		});
		$('#timepicker').datetimepicker({
			format: 'H:mm:00', 
		});

	</script>
    <script>
		$('#summernote').summernote({
			fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
			tabsize: 2,
			height: 300
		});
	</script>
@endsection