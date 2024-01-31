<!DOCTYPE html>
<html>
  <head>
  @include('includes.header')
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
      <form>
    <h2 style="margin: 0; font-size: 24px; font-weight: bold;">
        Form Feedback Pelayanan Fingerspot
    </h2>
    <div class="steps-w">
        <div class="step-triggers">
            <a class="step-trigger active" href="#stepContent1"></a>
            <a class="step-trigger" href="#stepContent2"></a>
            <a class="step-trigger" href="#stepContent3"></a>
            <a class="step-trigger" href="#stepContent4"></a>
            <a class="step-trigger" href="#stepContent5"></a>
            <a class="step-trigger" href="#stepContent6"></a>
            <a class="step-trigger" href="#stepContent7"></a>
            <a class="step-trigger" href="#stepContent8"></a>


        </div>
        <div class="step-contents">
            <div class="step-content active" id="stepContent1">
                <p>Terima kasih atas ketersediaan waktu untuk memberikan feedback mengenai pelayanan Fingerspot.</p>
                <p>Apakah Anda sudah dihubungi oleh Care Officer Fingerspot untuk kebutuhan [isian kebutuhan dari lead CRM] ?</p>
                <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent2">Sudah dihubungi</a>
                    <a class="btn btn-danger step-trigger-btn" href="#" onclick="redirectToRoute('{{ route('dashboard') }}')">Belum</a>
                </div>
            </div>
            <div class="step-content" id="stepContent2">
                <p>Kami ingin mengetahui interaksi terakhir Anda dengan Care Officer Fingerspot, silahkan memberikan feedback untuk kami.</p>
                <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent3">Next</a>
                </div>
            </div>
            <div class="step-content" id="stepContent3">
            <div class="form-group row">
                <p>Sikap Care Officer dalam hal keramahan.</p>
                <div class="col-sm-8">
                    <div class="form-check">
                        <label class="form-check-label"><input checked="" class="form-check-input" name="optionsRadios" type="radio" value="option1">Tidak ramah</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option2">Kurang ramah</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option3">Cukup ramah</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option4">Ramah</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option4">Sangat ramah</label>
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
                        <label class="form-check-label"><input checked="" class="form-check-input" name="optionsRadios" type="radio" value="option1">Tidak mudah paham</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option2">Kurang paham</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option3">Cukup paham</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option4">Paham</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option4">Sangat paham</label>
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
                        <label class="form-check-label"><input checked="" class="form-check-input" name="optionsRadios" type="radio" value="option1">Tidak cepat</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option2">Kurang cepat</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option3">Cukup cepat </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option4">Cepat</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option4">Sangat cepat</label>
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
                        <label class="form-check-label"><input checked="" class="form-check-input" name="optionsRadios" type="radio" value="option1">Tidak jelas & tidak solutif</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option2">Kurang jelas & kurang solutif</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option3">Cukup jelas & cukup solutif</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option4">Jelas</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option4">Sangat jelas</label>
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
                            <input class="form-check-input" name="optionsRadios[]" type="checkbox" value="option1">Sosial media
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="optionsRadios[]" type="checkbox" value="option2">Rekan / kenalan
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="optionsRadios[]" type="checkbox" value="option3">Media Cetak (flyer, spanduk, xbanner, dll)
                        </label>                    
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="optionsRadios[]" type="checkbox" value="option4" id="lainnyaCheckbox">Lainnya
                        </label>
                    </div>
                    <div class="form-group" id="lainnyaOption" style="display: none;">
                        <input type="text" class="form-control" id="lainnyaInput" name="lainnyaInput" placeholder="">
                    </div>
                </div>
            </div> 
                <div class="form-buttons-w text-right">
                    <a class="btn btn-primary step-trigger-btn" href="#stepContent8">Next</a>
                </div>
            </div>  
            <div class="step-content" id="stepContent8">
                <div class="form-group">
                    <label> Saran & kritik </label><textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-buttons-w text-right">
                    <a class="btn btn-danger step-trigger-btn" href="#" onclick="redirectToRoute('{{ route('thanks') }}')">Submit</a>
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
