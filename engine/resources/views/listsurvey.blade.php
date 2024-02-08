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
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->telepon }}</td>
                                            <td class="status-cell" style="text-align: center;">
                                                @if(empty($data->feedback))
                                                    <span class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></span>
                                                @else
                                                    <span class="status-pill green" data-title="Complete" data-toggle="tooltip"></span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                            @if($data->feedback)
                                            @else
                                                <a href="#" class="btn btn-primary" onclick="copySurveyLink('{{ route('new-survey-form', ['url' => $data->url]) }}')">Copy</a>
                                            @endif     
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewModal{{ $data->id }}">View</button>                                          
                                            </td>
                                            <div class="modal fade" id="viewModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content text-center">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="viewModalLabel">View Data</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="POST" action="">
                                                          @csrf
                                                          @method('PUT')

                                                          <div class="form-group">
                                                              <label for="idLeads">Id</label>
                                                              <input type="text" class="form-control" id="idLeads" name="idLeads" value="{{ $data->id }}" >
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="idLeads">Id Leads</label>
                                                              <input type="text" class="form-control" id="idLeads" name="idLeads" value="{{ $data->id_leads }}" >
                                                          </div>

                                                          <div class="form-group">
                                                              <label for="perusahaan">Nama</label>
                                                              <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" >
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="perusahaan">Kebutuhan</label>
                                                              <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->kebutuhan }}" >
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="nama">feedback customer</label>
                                                              <input type="text" class="form-control" id="nama" name="feedback" value="{{ $data->feedback ? $data->feedback->sikap_keramahan . ', ' . $data->feedback->pemahaman_kebutuhan . ', ' . $data->feedback->kecepatan_pelayanan . ', ' . $data->feedback->penjelasan . ', ' . $data->feedback->sumber_info . ', ' . $data->feedback->saran_kritik : '' }}">
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr class="survey-row">
                                            <td colspan="7" class="text-center">Tidak ada hasil pencarian.</td>
                                        </tr>
                                    @endif                           
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