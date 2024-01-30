<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        background-color: #222533;
        padding: 20px;
        font-family: "Helvetica Neue", "Segoe UI", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.43;
      }

      #formContacted, #formNotContacted {
        display: none;
      }

      #feedbackForm {
        color: #636363;
        font-size: 14px;
      }

      label {
        display: block;
        margin-top: 10px;
      }

      select, textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
      }

      input[type="submit"] {
        background-color: #4B72FA;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        padding: 8px 15px;
        cursor: pointer;
        border: none;
      }
    </style>
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
      <div style="padding: 60px 70px;">
        <h2 style="margin-top: 0px;">
          Form Feedback Pelayanan Fingerspot
        </h2>
        <div style="color: #636363; font-size: 14px;">
        Terima kasih Bapak / Ibu [nama customer] atas ketersediaan waktu untuk memberikan feedback mengenai pelayanan Fingerspot.
        Apakah Anda sudah dihubungi oleh Care Officer Fingerspot untuk kebutuhan [isian kebutuhan dari lead CRM] ?        </div>
        <a href="#" onclick="showForm(true)" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 20px 0px; margin-right: 20px; text-decoration: none;">Ya, Sudah dihubungi</a>
        <a href="#" onclick="showForm(false)" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 20px 0px; margin-right: 20px; text-decoration: none;">Belum</a>

        <div id="formContacted">
          <form id="feedbackForm">
            <label for="sikap">1. Sikap Care Officer dalam hal keramahan:</label>
            <select id="sikap" name="sikap">
              <option value="Tidak ramah">Tidak ramah</option>
              <option value="Kurang ramah">Kurang ramah</option>
              <option value="Cukup ramah">Cukup ramah</option>
              <option value="Ramah">Ramah</option>
              <option value="Sangat ramah">Sangat ramah</option>
            </select>

            <label for="pemahaman">2. Care Officer dapat memahami kebutuhan Anda:</label>
            <select id="pemahaman" name="pemahaman">
              <option value="Tidak mudah paham">Tidak mudah paham</option>
              <option value="Kurang paham">Kurang paham</option>
              <option value="Cukup paham">Cukup paham</option>
              <option value="Paham">Paham</option>
              <option value="Sangat paham">Sangat paham</option>
            </select>

            <label for="kecepatan">3. Kecepatan pelayanan Care Officer:</label>
            <select id="kecepatan" name="kecepatan">
              <option value="Tidak cepat">Tidak cepat</option>
              <option value="Kurang cepat">Kurang cepat</option>
              <option value="Cukup cepat">Cukup cepat</option>
              <option value="Cepat">Cepat</option>
              <option value="Sangat cepat">Sangat cepat</option>
            </select>

            <label for="penjelasan">4. Penjelasan informasi & pemberian solusi Care Officer:</label>
            <select id="penjelasan" name="penjelasan">
              <option value="Tidak jelas & tidak solutif">Tidak jelas & tidak solutif</option>
              <option value="Kurang jelas & kurang solutif">Kurang jelas & kurang solutif</option>
              <option value="Cukup jelas & cukup solutif">Cukup jelas & cukup solutif</option>
              <option value="Jelas">Jelas</option>
              <option value="Sangat jelas">Sangat jelas</option>
            </select>

            <label for="mengetahui">5. Mengetahui Fingerspot dari:</label>
            <select id="mengetahui" name="mengetahui" multiple>
              <option value="Sosial media">Sosial media</option>
              <option value="Rekan / Kenalan">Rekan / Kenalan</option>
              <option value="Pamflet">Pamflet</option>
              <option value="dst">Lainnya</option>
            </select>

            <label for="saran">6. Saran & Kritik:</label>
            <textarea id="saran" name="saran"></textarea>

            <input type="submit" value="Submit Feedback">
          </form>
        </div>

    <div id="formNotContacted" class="hidden">
        <div style="color: #636363; font-size: 14px;">
            Mohon maaf atas ketidaknyamanan yang dialami, mengenai kebutuhan Anda akan saya konfirmasi ke tim terkait.
            Silakan menunggu tim kami akan segera menghubungi Anda maksimal 1x24 jam di hari kerja.
            <a href="#" style="padding: 5px 15px; background-color: #4B72FA; color: #fff; font-weight: bolder; font-size: 14px; display: inline-block; margin: 20px 0px; margin-right: 20px; text-decoration: none;">Baik, Hubungi Saya</a>

        </div>
    </div>

    </div><div style="background-color: #F5F5F5; padding: 40px; text-align: center;">
        <div style="margin-bottom: 20px;">
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="{{ asset('assets/img/social-icons/twitter.png') }}" style="width: 28px;"></a>
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="{{ asset('assets/img/social-icons/facebook.png') }}" style="width: 28px;"></a>
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="{{ asset('assets/img/social-icons/instagram.png') }}"style="width: 28px;"></a>
        </div>
        <div style="margin-bottom: 20px;">
          <a href="#" style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">Contact Us</a><a href="#" style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">Privacy Policy</a><a href="#" style="text-decoration: underline; font-size: 14px; letter-spacing: 1px; margin: 0px 15px; color: #261D1D;">Unsubscribe</a>
        </div>
        <div style="margin-bottom: 20px;">
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="{{ asset('assets/img/market-google-play.png') }}" style="height: 33px;"></a>
          <a href="#" style="display: inline-block; margin: 0px 10px;"><img alt="" src="{{ asset('assets/img/market-ios.png') }}" style="height: 33px;"></a>
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

    <script>
        function showForm(contacted) {
            document.getElementById('formContacted').style.display = 'none';
            document.getElementById('formNotContacted').style.display = 'none';

            if (contacted) {
                document.getElementById('formContacted').style.display = 'block';
            } else {
                document.getElementById('formNotContacted').style.display = 'block';
            }
        }
    </script>
  </body>
</html>
