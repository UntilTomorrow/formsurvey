<!DOCTYPE html>
<html>
<head>
@include('includes.header')

</head>


<body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="assets/source/img/logo-big.png"></a>
        </div>
            <form id="formValidate" method="post" action="{{ route('submit-survey', ['url' => $survey->url]) }}">
                                @csrf
                    <div class="form-group">
                        <label for="id">Nomor Tiket Pelanggan</label>
                        <input class="form-control" required="required" type="text" name="id" value="{{ $survey->id_leads }}" readonly>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Perusahaan</label>
                        <input class="form-control" required="required" type="text" name="perusahaan" value="{{ $survey->perusahaan }}" readonly>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" required="required" type="text" name="nama" value="{{ $survey->nama }}" readonly>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input class="form-control" required="required" type="text" name="telepon" value="{{ $survey->telepon }}" readonly>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                    <fieldset class="form-group">
                        <legend><span>Isikan Survey Anda</span></legend>
                    <div class="form-group">
                        <label for="kesan_pelayanan">Kesan Pelayanan</label>
                        <textarea class="form-control" rows="3" name="kesan_pelayanan" @if($survey->kesan_pelayanan) readonly @endif>{{ $survey->kesan_pelayanan }}</textarea>
                    </div>
                    </fieldset>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="agree">
                        I agree to terms and conditions
                    </label>
                </div>
                <div class="form-buttons-w">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
