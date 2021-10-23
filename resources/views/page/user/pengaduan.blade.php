@extends('layouts.master')
@section('title','Halaman Pengaduan')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                @if(session('pesan'))
                        <div class="alert alert-success style="margin-bottom:20px!important;">{{session('pesan')}}</div>
                    @endif
                    <div class="card-header text-white bg-primary">
                        <h3>Halaman Pengaduan</h3>
                    </div>
                   
                    <div class="card-body">
                    <form action="{{route('pengaduan-store')}}" method="POST" >
                    @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>Siapa yang di laporkan</label>
                                    <input type="text" class="form-control" name="name">
                                    @error('name')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Alasan</label>
                                    <textarea name="alasan" id="summernote"></textarea>
                                    @error('name')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                            
                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary" type="submit">Submit</button>
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