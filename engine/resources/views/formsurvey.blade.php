<!DOCTYPE html>
<html>
  <head>
  @include('includes.header')
    @if(session('success'))
       <div class="alert alert-success">
          {{ session('success') }}
       </div>
    @endif
    @if(session('error'))
       <div class="alert alert-danger">
          {{ session('error') }}
       </div>
    @endif
  </head>
<body class="menu-position-side menu-side-left full-screen">
<script src="https://cdn.jsdelivr.net/npm/uuid@8.3.0/dist/umd/uuid.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      const url = uuid.v4();
      console.log('url:', url);
      const idElement = document.getElementById('url');
      if (idElement) {
        idElement.value = url;
    }else {
      console.error(err);
    }
  });
</script>
<div class="layout-w">
        <!--------------------
        START - Main Menu
        -------------------->
        @include('includes.mainmenu')
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-transparent">
            @include('includes.topmenu')
          </div>
          <!--------------------
          END - Top Bar
          ------------>
          <div class="content-i">
            <div class="content-box">
              <div class="row">
              <div class="col-lg-6">
    <div class="element-wrapper">
      <h6 class="element-header">
      Inputkan Data Pelanggan
      </h6>
      <div class="element-box">
        <form method="POST" action="{{ route('inputform') }}">
            @csrf
          <h5 class="form-header">
            Form Survey Fingerspot
          </h5>
          <div class="form-desc">
            Discharge best employed your phase each the of shine. Be met even reason consider logbook redesigns. Never a turned interfaces among asking
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> ID Leads</label>
                <input class="form-control" placeholder="ID Lead" type="id" name="id_leads">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> Nama Pelanggan</label>
                <input class="form-control" placeholder="Nama Pelanggan" type="name" name="nama">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">No Telepon</label>
                <input class="form-control" placeholder="Nomor" type="text" name="telepon">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Email Address</label>
                <input class="form-control" placeholder="email" type="email" name="email">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Contact By</label>
                <input class="form-control" placeholder="ContactBy" type="text" name="contactby">
              </div>
            </div>
          </div>
          <fieldset class="form-group">
            <legend><span>Kebutuhan</span></legend>
            <div class="form-group">
            <textarea class="form-control" rows="3" name="kebutuhan"></textarea>            
          </div>
          </fieldset>
          <div class="form-buttons-w">
            <button class="btn btn-primary" type="submit"> Submit</button>
            <input type="hidden" name="url" id="url" value="">
          </div>
        </form>
      </div>
    </div>
  </div>
    </div>
</div>
@include('includes.js')
  </body>
</html>

