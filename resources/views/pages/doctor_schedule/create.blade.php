@extends('layouts.app')

@section('title', 'Add Schedule')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Schedule</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Doctor Schedule

                </h2>
                <div class="card">
                    <form action="{{ route('doctor_schedule.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Doctor</label>
                                <select class="form-control selectric @error('doctor_id') is-invalid @enderror"
                                    name="doctor_id">
                                    <option value="">Select Doctor</option>
                                    @foreach ($doctors as $doctor)
                                        <option value = "{{ $doctor->id }}">{{ $doctor->doctor_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jadwal Senin</label>
                                <input type="text" class="form-control" name="monday">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Selasa</label>
                                <input type="text" class="form-control" name="tuesday">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Rabu</label>
                                <input type="text" class="form-control" name="wednesday">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Kamis</label>
                                <input type="text" class="form-control" name="thursday">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Jumat</label>
                                <input type="text" class="form-control" name="friday">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Sabtu</label>
                                <input type="text" class="form-control" name="saturday">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Minggu</label>
                                <input type="text" class="form-control" name="sunday">
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="active" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Active</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="inactive" class="selectgroup-input">
                                        <span class="selectgroup-button">Inactive</span>
                                    </label>

                                </div>
                            </div> --}}
                            {{-- Radio Button --}}
                            {{-- <div class="form-group mt-3">
                                <label>Status</label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input @error('status') is-invalid @enderror"
                                                type="radio" name="status" id="active" value="active" checked>
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input @error('status') is-invalid @enderror"
                                                type="radio" name="status" id="inactive" value="inactive">
                                            <label class="form-check-label" for="inactive">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group">
                                <label>Note</label>
                                <textarea type="text" class="form-control @error('note') is-invalid @enderror" name="note"></textarea>
                                @error('note')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
