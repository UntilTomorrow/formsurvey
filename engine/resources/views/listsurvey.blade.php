<!DOCTYPE html>
<html>
  <head>
  @include('includes.header')
  @if(session('success'))
     <div class="alert alert-success">
        {{ session('success') }}
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
                <div class="col-sm-12">
                  <div class="element-wrapper">
              <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">
                      Data
                    </h6>
                    <div class="element-box">
                      <div class="controls-above-table">
                        <div class="row">
                          <div class="col-sm-6">
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">  


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                <form class="form-inline" method="POST" action="{{ route('search.listsurvey') }}">
                                @csrf
                                <label class="sr-only">Search</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Search..." name="search">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-lg table-v2 table-striped">
                          <thead>
                            <tr class="survey-row">
                              <th>No</th>
                              <th>ID leads</th>
                              <th>Perusahaan</th>
                              <th>Nama Pelanggan</th>
                              <th>Telepon</th>
                              <th>Status</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                            <tbody id="surveyTableBody">
                                @if(isset($search) && !empty($search))
                                    @if(count($survey) > 0)
                                        @foreach($survey as $data)
                                        <tr class="survey-row">
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->id_leads }}</td>
                                            <td>{{ $data->perusahaan }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->telepon }}</td>
                                            <td class="status-cell" style="text-align: center;">
                                                @if(empty($data->kesan_pelayanan))
                                                    <span class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></span>
                                                @else
                                                    <span class="status-pill green" data-title="Complete" data-toggle="tooltip"></span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                <a href="#" class="btn btn-primary" onclick="copySurveyLink('{{ route('new-survey-form', ['url' => $data->url]) }}')">Copy</a>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewModal{{ $data->id }}">View</button>                                          
                                                <a href="https://wa.me/{{ $data->telepon }}" class="btn btn-primary" target="_blank">Send</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr class="survey-row">
                                            <td colspan="7" class="text-center">Tidak ada hasil pencarian.</td>
                                        </tr>
                                    @endif
                                @else
                                    @foreach($survey as $data)
                                    <tr class="survey-row">
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->id_leads }}</td>
                                        <td>{{ $data->perusahaan }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td class="status-cell" style="text-align: center;">
                                            @if(empty($data->kesan_pelayanan))
                                                <span class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></span>
                                            @else
                                                <span class="status-pill green" data-title="Complete" data-toggle="tooltip"></span>
                                            @endif
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="#" class="btn btn-primary" onclick="copySurveyLink('{{ route('new-survey-form', ['url' => $data->url]) }}')">Copy</a>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewModal{{ $data->id }}">View</button>                                          
                                            <a href="https://wa.me/{{ $data->telepon }}" class="btn btn-primary" target="_blank">Send</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                      </div>
                  </div>
              </div>
            </div>
          </div>
       </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $(".survey-row").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

<script>
    function copySurveyLink(url) {
        const input = document.createElement('input');
        input.value = url;
        document.body.appendChild(input);
        input.select();
        document.execCommand('copy');
        document.body.removeChild(input);
        alert('Link berhasil disalin!');
    }
</script>

@include('includes.js')
  </body>
</html>
