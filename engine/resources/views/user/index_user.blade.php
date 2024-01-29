@extends('master')
@section('title','User')
@section('content')

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="pagetitle">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
            Tambah User
          </button>
<!-- modal tambah user -->
          <div class="modal fade" id="largeModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambahkan User Baru</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                          <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                          <div class="col-md-8 col-lg-9">
                            <input class="form-control" type="file" id="formFile">
                            <div class="pt-2">
                              <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                              <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="fullName" type="text" class="form-control" id="fullName" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                          <div class="col-md-8 col-lg-9">
                            <textarea name="about" class="form-control" id="about" style="height: 100px"></textarea>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="company" type="text" class="form-control" id="company" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="job" type="text" class="form-control" id="Job" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="country" type="text" class="form-control" id="Country" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="address" type="text" class="form-control" id="Address" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="phone" type="text" class="form-control" id="Phone" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="Email" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="twitter" type="text" class="form-control" id="Twitter" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="facebook" type="text" class="form-control" id="Facebook" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="instagram" type="text" class="form-control" id="Instagram" value="">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="linkedin" type="text" class="form-control" id="Linkedin" value="">
                          </div>
                        </div>
                      </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-dark rounded-pill" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary rounded-pill">Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- end modal tambah user -->

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    <b>N</b>ame
                  </th>
                  <th>Ext.</th>
                  <th>City</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                  <th>Completion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Unity Pugh</td>
                  <td>9958</td>
                  <td>Curicó</td>
                  <td>2005/02/11</td>
                  <td>37%</td>
                </tr>
                <tr>
                  <td>Theodore Duran</td>
                  <td>8971</td>
                  <td>Dhanbad</td>
                  <td>1999/04/07</td>
                  <td>97%</td>
                </tr>
                <tr>
                  <td>Kylie Bishop</td>
                  <td>3147</td>
                  <td>Norman</td>
                  <td>2005/09/08</td>
                  <td>63%</td>
                </tr>
                <tr>
                  <td>Willow Gilliam</td>
                  <td>3497</td>
                  <td>Amqui</td>
                  <td>2009/29/11</td>
                  <td>30%</td>
                </tr>
                <tr>
                  <td>Blossom Dickerson</td>
                  <td>5018</td>
                  <td>Kempten</td>
                  <td>2006/11/09</td>
                  <td>17%</td>
                </tr>
                <tr>
                  <td>Elliott Snyder</td>
                  <td>3925</td>
                  <td>Enines</td>
                  <td>2006/03/08</td>
                  <td>57%</td>
                </tr>
                <tr>
                  <td>Castor Pugh</td>
                  <td>9488</td>
                  <td>Neath</td>
                  <td>2014/23/12</td>
                  <td>93%</td>
                </tr>
                <tr>
                  <td>Pearl Carlson</td>
                  <td>6231</td>
                  <td>Cobourg</td>
                  <td>2014/31/08</td>
                  <td>100%</td>
                </tr>
                <tr>
                  <td>Deirdre Bridges</td>
                  <td>1579</td>
                  <td>Eberswalde-Finow</td>
                  <td>2014/26/08</td>
                  <td>44%</td>
                </tr>
                <tr>
                  <td>Daniel Baldwin</td>
                  <td>6095</td>
                  <td>Moircy</td>
                  <td>2000/11/01</td>
                  <td>33%</td>
                </tr>
                <tr>
                  <td>Phelan Kane</td>
                  <td>9519</td>
                  <td>Germersheim</td>
                  <td>1999/16/04</td>
                  <td>77%</td>
                </tr>
                <tr>
                  <td>Quentin Salas</td>
                  <td>1339</td>
                  <td>Los Andes</td>
                  <td>2011/26/01</td>
                  <td>49%</td>
                </tr>
                <tr>
                  <td>Armand Suarez</td>
                  <td>6583</td>
                  <td>Funtua</td>
                  <td>1999/06/11</td>
                  <td>9%</td>
                </tr>
                <tr>
                  <td>Gretchen Rogers</td>
                  <td>5393</td>
                  <td>Moxhe</td>
                  <td>1998/26/10</td>
                  <td>24%</td>
                </tr>
                <tr>
                  <td>Harding Thompson</td>
                  <td>2824</td>
                  <td>Abeokuta</td>
                  <td>2008/06/08</td>
                  <td>10%</td>
                </tr>
                <tr>
                  <td>Mira Rocha</td>
                  <td>4393</td>
                  <td>Port Harcourt</td>
                  <td>2002/04/10</td>
                  <td>14%</td>
                </tr>
                <tr>
                  <td>Drew Phillips</td>
                  <td>2931</td>
                  <td>Goes</td>
                  <td>2011/18/10</td>
                  <td>58%</td>
                </tr>
                <tr>
                  <td>Emerald Warner</td>
                  <td>6205</td>
                  <td>Chiavari</td>
                  <td>2002/08/04</td>
                  <td>58%</td>
                </tr>
                <tr>
                  <td>Colin Burch</td>
                  <td>7457</td>
                  <td>Anamur</td>
                  <td>2004/02/01</td>
                  <td>34%</td>
                </tr>
                <tr>
                  <td>Russell Haynes</td>
                  <td>8916</td>
                  <td>Frascati</td>
                  <td>2015/28/04</td>
                  <td>18%</td>
                </tr>
                <tr>
                  <td>Brennan Brooks</td>
                  <td>9011</td>
                  <td>Olmué</td>
                  <td>2000/18/04</td>
                  <td>2%</td>
                </tr>
                <tr>
                  <td>Kane Anthony</td>
                  <td>8075</td>
                  <td>LaSalle</td>
                  <td>2006/21/05</td>
                  <td>93%</td>
                </tr>
                <tr>
                  <td>Scarlett Hurst</td>
                  <td>1019</td>
                  <td>Brampton</td>
                  <td>2015/07/01</td>
                  <td>94%</td>
                </tr>
                <tr>
                  <td>James Scott</td>
                  <td>3008</td>
                  <td>Meux</td>
                  <td>2007/30/05</td>
                  <td>55%</td>
                </tr>
                <tr>
                  <td>Desiree Ferguson</td>
                  <td>9054</td>
                  <td>Gojra</td>
                  <td>2009/15/02</td>
                  <td>81%</td>
                </tr>
                <tr>
                  <td>Elaine Bishop</td>
                  <td>9160</td>
                  <td>Petrópolis</td>
                  <td>2008/23/12</td>
                  <td>48%</td>
                </tr>
                <tr>
                  <td>Hilda Nelson</td>
                  <td>6307</td>
                  <td>Posina</td>
                  <td>2004/23/05</td>
                  <td>76%</td>
                </tr>
                <tr>
                  <td>Evangeline Beasley</td>
                  <td>3820</td>
                  <td>Caplan</td>
                  <td>2009/12/03</td>
                  <td>62%</td>
                </tr>
                <tr>
                  <td>Wyatt Riley</td>
                  <td>5694</td>
                  <td>Cavaion Veronese</td>
                  <td>2012/19/02</td>
                  <td>67%</td>
                </tr>
                <tr>
                  <td>Wyatt Mccarthy</td>
                  <td>3547</td>
                  <td>Patan</td>
                  <td>2014/23/06</td>
                  <td>9%</td>
                </tr>
                <tr>
                  <td>Cairo Rice</td>
                  <td>6273</td>
                  <td>Ostra Vetere</td>
                  <td>2016/27/02</td>
                  <td>13%</td>
                </tr>
                <tr>
                  <td>Sylvia Peters</td>
                  <td>6829</td>
                  <td>Arrah</td>
                  <td>2015/03/02</td>
                  <td>13%</td>
                </tr>
                <tr>
                  <td>Kasper Craig</td>
                  <td>5515</td>
                  <td>Firenze</td>
                  <td>2015/26/04</td>
                  <td>56%</td>
                </tr>
                <tr>
                  <td>Leigh Ruiz</td>
                  <td>5112</td>
                  <td>Lac Ste. Anne</td>
                  <td>2001/09/02</td>
                  <td>28%</td>
                </tr>
                <tr>
                  <td>Athena Aguirre</td>
                  <td>5741</td>
                  <td>Romeral</td>
                  <td>2010/24/03</td>
                  <td>15%</td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
</main>

@endsection
