<!DOCTYPE html>
<html>
  <head>
  @include('includes.header')
  @if(session('error'))
       <div class="alert alert-danger">
          {{ session('error') }}
       </div>
    @endif
  </head>
  <body style="background-color: #222533; padding: 20px; font-family: font-size: 14px; line-height: 1.43; font-family: &quot;Helvetica Neue&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif;">
    <div style="max-width: 600px; margin: 10px auto 20px; font-size: 12px; color: #A5A5A5; text-align: center;">
    </div>
    <div style="max-width: 600px; margin: 0px auto; background-color: #fff; box-shadow: 0px 20px 50px rgba(0,0,0,0.05);">
      <table style="width: 100%;">
        <tr>
          <td style="background-color: #fff;">
          <img alt="" src="{{ asset('assets/img/logo.png') }}" style="width: 70px; padding: 20px">
        </td>
        </tr>
      </table><img alt="" src="{{ asset('assets/img/email-header-img.jpg') }}" style="max-width: 100%; height: auto;">
      <div class="element-box">
      <form method="POST" action="{{ route('submitform', ['url' => $url]) }}">
      @csrf
        <h2 style="margin: 0; font-size: 24px; font-weight: bold;">
        Form Feedback Pelayanan Fingerspot
    </h2>
    <div class="steps-w">
        <div class="step-triggers">
            <a class="step-trigger active" href="#stepContent1"></a>

            <a class="step-trigger" href="#stepContent3"></a>
            <a class="step-trigger" href="#stepContent4"></a>
            <a class="step-trigger" href="#stepContent5"></a>
            <a class="step-trigger" href="#stepContent6"></a>
            <a class="step-trigger" href="#stepContent7"></a>
            <a class="step-trigger" href="#stepContent8"></a>
        </div>
        <div class="step-contents">
        @if($survey->feedback)
        <div class="step-content active" id="stepContent1">
                <p>Terima kasih atas ketersediaan waktu untuk memberikan feedback mengenai pelayanan Fingerspot.</p>
            </div>
        @else
            <div class="step-content active" id="stepContent1">
                <p>Terima kasih atas ketersediaan waktu untuk memberikan feedback mengenai pelayanan Fingerspot.</p>
                <p>Apakah Anda sudah dihubungi oleh Care Officer Fingerspot untuk kebutuhan <strong>{{ $survey->kebutuhan }}</strong>?</p>
                <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent3">Sudah dihubungi</a>
                    <a class="btn btn-danger step-trigger-btn" href="#" onclick="redirectToRoute('{{ route('sorry') }}')">Belum</a>
                </div>
            </div>
        @endif
            <div class="step-content" id="stepContent3">
            <div class="form-group row">
                <p>Kami ingin mengetahui interaksi terakhir Anda dengan Care Officer Fingerspot, silahkan memberikan feedback untuk kami.</p>
                <p>Sikap Care Officer dalam hal keramahan.</p>
                <div class="col-sm-8">
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="sikap_keramahan" type="radio" value="Tidak ramah">Tidak ramah</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="sikap_keramahan" type="radio" value="Kurang ramah">Kurang ramah</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="sikap_keramahan" type="radio" value="Cukup ramah">Cukup ramah</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="sikap_keramahan" type="radio" value="Ramah">Ramah</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="sikap_keramahan" type="radio" value="Sangat ramah">Sangat ramah</label>
                    </div>
                    </div>
            </div>           
            <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent4">Next</a>
                </div>
            </div>


            <div class="step-content" id="stepContent4">
            <div class="form-group row">
                <p>Care Officer dapat memahami kebutuhan Anda. </p>
                <div class="col-sm-8">
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="pemahaman_kebutuhan" type="radio" value="Tidak mudah paham">Tidak mudah paham</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="pemahaman_kebutuhan" type="radio" value="Kurang paham">Kurang paham</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="pemahaman_kebutuhan" type="radio" value="Cukup paham">Cukup paham</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="pemahaman_kebutuhan" type="radio" value="Paham">Paham</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="pemahaman_kebutuhan" type="radio" value="Sangat paham">Sangat paham</label>
                    </div>
                </div>
            </div>
                <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent5">Next</a>
                </div>
            </div>


            <div class="step-content" id="stepContent5">
            <div class="form-group row">
                <p>Kecepatan pelayanan Care Officer. </p>
                <div class="col-sm-8">
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="kecepatan_pelayanan" type="radio" value="Tidak cepat">Tidak cepat</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="kecepatan_pelayanan" type="radio" value="Kurang cepat">Kurang cepat</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="kecepatan_pelayanan" type="radio" value="Cukup cepat">Cukup cepat </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="kecepatan_pelayanan" type="radio" value="Cepat">Cepat</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="kecepatan_pelayanan" type="radio" value="Sangat cepat">Sangat cepat</label>
                    </div>
                </div>
            </div>
                <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent6">Next</a>
                </div>
            </div>

            
            <div class="step-content" id="stepContent6">
            <div class="form-group row">
                <p>Penjelasan informasi & pemberian solusi Care Officer.</p>
                <div class="col-sm-8">
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="penjelasan" type="radio" value="Tidak Jelas & tidak solutif">Tidak jelas & tidak solutif</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="penjelasan" type="radio" value="Kurang jelas & kurang solutif">Kurang jelas & kurang solutif</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="penjelasan" type="radio" value="Cukup jelas & cukup solutif">Cukup jelas & cukup solutif</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="penjelasan" type="radio" value="Jelas">Jelas</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="penjelasan" type="radio" value="Sangat jelas">Sangat jelas</label>
                    </div>
                </div>
            </div>
                <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent7">Next</a>
                </div>
            </div>


            <div class="step-content" id="stepContent7">
            <div class="form-group row">
            <p>Dari mana Anda mengetahui Fingerspot? </p>
                <div class="col-sm-8">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="sumber_info[]" type="checkbox" value="Sosial media">Sosial media
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="sumber_info[]" type="checkbox" value="Rekan">Rekan / kenalan
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="sumber_info[]" type="checkbox" value="Media cetak">Media Cetak (flyer, spanduk, xbanner, dll)
                        </label>                    
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="sumber_info[]" type="checkbox" value="lainnya" id="lainnyaCheckbox">Lainnya
                        </label>
                    </div>
                    <div class="form-group" id="lainnyaOption" style="display: none;">
                        <input type="text" class="form-control" id="lainnyaInput" name="sumber_info[]" placeholder="">
                    </div>
                </div>
            </div> 
                <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent8">Next</a>
                </div>
            </div>  
            <div class="step-content" id="stepContent8">
                <div class="form-group">
                    <label> Saran & kritik </label><textarea class="form-control" name="saran_kritik" rows="3"></textarea>
                </div>
                <div class="form-buttons-w text-right">
                <button type="submit">Submit</button>
                <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                </div> 
            </div>
    </div>  
</div>
</form>
    </div><div style="background-color: #F5F5F5; padding: 40px; text-align: center;">
        <div style="margin-bottom: 20px;">
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="{{ asset('assets/img/social-icons/twitter.png') }}" style="width: 28px;"></a>
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="{{ asset('assets/img/social-icons/facebook.png') }}" style="width: 28px;"></a>
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="{{ asset('assets/img/social-icons/instagram.png') }}"style="width: 28px;"></a>
        </div>
    <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
          <div style="color: #A5A5A5; font-size: 10px; margin-bottom: 5px;">
          </div>
          <div style="color: #A5A5A5; font-size: 10px;">
          Copyright © Fingerspot, 2002 - 2024 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('includes.js')
<script>
    function redirectToRoute(route) {
    window.location.href = route;
}
</script>
<script>
    document.getElementById('lainnyaCheckbox').addEventListener('change', 
    function() {
        var lainnyaOption = document.getElementById('lainnyaOption');
        var lainnyaInput = document.getElementById('lainnyaInput');
        
        lainnyaOption.style.display = this.checked ? 'block' : 'none';
        
        if (!this.checked) {
            lainnyaInput.value = '';
        }
    });
</script>

  </body>
</html>