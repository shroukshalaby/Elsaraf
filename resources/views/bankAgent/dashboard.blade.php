@extends('bankAgent.layouts.main')

@section('content')



      <!-- Breadcrumb-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="row">

            <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-success">
                <div class="card-body pb-0">
                  <div class="text-value">9.823</div>
                  <div> Requests</div>
                </div>
                <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70" width="210" style="display: block; width: 210px; height: 70px;"></canvas>
                <div id="card-chart2-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 121.89px; top: 124.979px;"><div class="tooltip-header"><div class="tooltip-header-item">April</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">17</span></div></div></div></div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-warning">
                <div class="card-body pb-0">
                  <div class="text-value">9.823</div>
                  <div>Pending</div>
                </div>
                <div class="chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70" width="244" style="display: block; width: 244px; height: 70px;"></canvas>
                <div id="card-chart3-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 122px; top: 134.5px;"><div class="tooltip-header"><div class="tooltip-header-item">April</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">45</span></div></div></div></div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-danger">
                <div class="card-body pb-0">
                  <div class="text-value">9.823</div>
                  <div>Refused</div>
                </div>
                <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas class="chart chartjs-render-monitor" id="card-chart4" height="70" width="210" style="display: block; width: 210px; height: 70px;"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <div class="text-value">9.823</div>
                    <div>Accepted</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 212px; height: 70px;" width="212"></canvas>
                  <div id="card-chart1-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 88.2422px; top: 121.173px;"><div class="tooltip-header"><div class="tooltip-header-item">January</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">65</span></div></div></div></div>
                </div>
            </div>
              <!-- /.col-->

          <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-pink">
              <div class="card-body pb-0">
                <div class="text-value">9.823</div>
                <div>Help</div>
              </div>
              <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70" width="210" style="display: block; width: 210px; height: 70px;"></canvas>
              <div id="card-chart2-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 121.89px; top: 124.979px;"><div class="tooltip-header"><div class="tooltip-header-item">April</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">17</span></div></div></div></div>
            </div>
          </div>
          <!-- /.col-->
          <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-info">
              <div class="card-body pb-0">
                <div class="text-value">9.823</div>
                <div>Emergency Team</div>
              </div>
              <div class="chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70" width="244" style="display: block; width: 244px; height: 70px;"></canvas>
              <div id="card-chart3-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 122px; top: 134.5px;"><div class="tooltip-header"><div class="tooltip-header-item">April</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">45</span></div></div></div></div>
            </div>
          </div>
          <!-- /.col-->
          <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-dark">
              <div class="card-body pb-0">
                <div class="text-value">9.823</div>
                <div>Integration Team</div>
              </div>
              <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas class="chart chartjs-render-monitor" id="card-chart4" height="70" width="210" style="display: block; width: 210px; height: 70px;"></canvas>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        </div>
      </div>
    </main>



@endsection
