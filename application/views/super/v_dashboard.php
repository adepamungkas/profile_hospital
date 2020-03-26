<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-9 main-chart">

              <div class="row mtbox">
                <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  <div class="box1">
            <span class="li_heart"></span>
            <h3>933</h3>
                  </div>
            <p>933 Orang-orang menyukai halaman Anda 24 jam terakhir. Whoohoo!</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
            <span class="li_cloud"></span>
            <h3>+48</h3>
                  </div>
            <p>48 File baru ditambahkan di penyimpanan cloud Anda.</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
            <span class="li_stack"></span>
            <h3>23</h3>
                  </div>
            <p>Anda memiliki 23 pesan yang belum dibaca di kotak masuk Anda.</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
            <span class="li_news"></span>
            <h3>+10</h3>
                  </div>
            <p>Lebih dari 10 berita ditambahkan di pembaca Anda.</p>
                </div>
                <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
            <span class="li_data"></span>
            <h3>OK!</h3>
                  </div>
            <p>Server Anda bekerja dengan sempurna. Santai & nikmati.</p>
                </div>

              </div><!-- /row mt -->


                <div class="row mt">
                <!-- SERVER STATUS PANELS -->
                  <div class="col-md-4 col-sm-4 mb">
                    <div class="white-panel pn donut-chart">
                      <div class="white-header">
              <h5>BEBAN SERVER</h5>
                      </div>
          <div class="row">
            <div class="col-sm-6 col-xs-6 goleft">
              <p><i class="fa fa-database"></i> 70%</p>
            </div>
                      </div>
          <canvas id="serverstatus01" height="120" width="120"></canvas>
          <script>
            var doughnutData = [
                {
                  value: 70,
                  color:"#68dff0"
                },
                {
                  value : 30,
                  color : "#fdfdfd"
                }
              ];
              var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
          </script>
                    </div><! --/grey-panel -->
                  </div><!-- /col-md-4-->


                  <div class="col-md-4 col-sm-4 mb">
                    <div class="white-panel pn">
                      <div class="white-header">
              <h5>PENYAKIT TERLARIS</h5>
                      </div>
          <div class="row">
            <div class="col-sm-6 col-xs-6 goleft">
              <p><i class="fa fa-heart"></i> 122</p>
            </div>
            <div class="col-sm-6 col-xs-6"></div>
                      </div>
                      <div class="centered">
              <img src="<?php echo base_url('assets/backend2') ?>/img/product.png" width="120">
                      </div>
                    </div>
                  </div><!-- /col-md-4 -->

      <div class="col-md-4 mb">
        <!-- WHITE PANEL - TOP USER -->
        <div class="white-panel pn">
          <div class="white-header">
            <h5>PENGUNJUNG TERBAIK</h5>
          </div>
          <p><img src="<?php echo base_url('assets/backend2') ?>/img/ui-zac.jpg" class="img-circle" width="80"></p>
          <p><b>Zac Snider</b></p>
          <div class="row">
            <div class="col-md-6">
              <p class="small mt">ANGGOTA SEJAK</p>
              <p>2012</p>
            </div>
            <div class="col-md-6">
              <p class="small mt">TOTAL SPEND</p>
              <p>$ 47,60</p>
            </div>
          </div>
        </div>
      </div><!-- /col-md-4 -->


              </div><!-- /row -->


    <div class="row">
      <!-- TWITTER PANEL -->
      <div class="col-md-4 mb">
                    <div class="darkblue-panel pn">
                      <div class="darkblue-header">
              <h5>DROPBOX STATICS</h5>
                      </div>
          <canvas id="serverstatus02" height="120" width="120"></canvas>
          <script>
            var doughnutData = [
                {
                  value: 60,
                  color:"#68dff0"
                },
                {
                  value : 40,
                  color : "#444c57"
                }
              ];
              var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
          </script>
          <p>April 17, 2014</p>
          <footer>
            <div class="pull-left">
              <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
            </div>
            <div class="pull-right">
              <h5>60% Used</h5>
            </div>
          </footer>
                    </div><! -- /darkblue panel -->
      </div><!-- /col-md-4 -->


      <div class="col-md-4 mb">
        <!-- INSTAGRAM PANEL -->
        <div class="instagram-panel pn">
          <i class="fa fa-instagram fa-4x"></i>
          <p>@THISISYOU<br/>
            5 min. ago
          </p>
          <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
        </div>
      </div><!-- /col-md-4 -->

      <div class="col-md-4 col-sm-4 mb">
        <!-- REVENUE PANEL -->
        <div class="darkblue-panel pn">
          <div class="darkblue-header">
            <h5>GRAFIK PASIEN</h5>
          </div>
          <div class="chart mt">
            <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
          </div>
          <p class="mt"><b>Rp 45.370.110</b><br/>Pendapatan Perbulan</p>
        </div>
      </div><!-- /col-md-4 -->

    </div><!-- /row -->

    <div class="row mt">
                <!--CUSTOM CHART START -->
                <div class="border-head">
                    <h3>KUNJUNGAN</h3>
                </div>
                <div class="custom-bar-chart">
                    <ul class="y-axis">
                        <li><span>10.000</span></li>
                        <li><span>8.000</span></li>
                        <li><span>6.000</span></li>
                        <li><span>4.000</span></li>
                        <li><span>2.000</span></li>
                        <li><span>0</span></li>
                    </ul>
                    <div class="bar">
                        <div class="title">JAN</div>
                        <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">FEB</div>
                        <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">MAR</div>
                        <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">APR</div>
                        <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                    </div>
                    <div class="bar">
                        <div class="title">MAY</div>
                        <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">JUN</div>
                        <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                    </div>
                    <div class="bar">
                        <div class="title">JUL</div>
                        <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                    </div>
                </div>
                <!--custom chart end-->
    </div><!-- /row -->

            </div><!-- /col-lg-9 END SECTION MIDDLE -->


<!-- **********************************************************************************************************************************************************
RIGHT SIDEBAR CONTENT
*********************************************************************************************************************************************************** -->

            <div class="col-lg-3 ds">
                <!--COMPLETED ACTIONS DONUTS CHART-->

                <!-- CALENDAR-->
                <div id="calendar" class="mb">
                    <div class="panel green-panel no-margin">
                        <div class="panel-body">
                            <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                <div class="arrow"></div>
                                <h3 class="popover-title" style="disadding: none;"></h3>
                                <div id="date-popover-content" class="popover-content"></div>
                            </div>
                            <div id="my-calendar"></div>
                        </div>
                    </div>
                </div><!-- / calendar -->
    </section>
</section>
