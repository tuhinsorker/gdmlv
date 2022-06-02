@extends('layouts.backend')
@push('css')
@endpush

@section('content')

<div class="body-content">

    <div class="row">
        <div class="col-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header d-flex justify-content-end mb-3" id="flush-headingOne">
                        <button type="button" class="fs-17 filter-bt" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><img  class="me-2 h-24" src="assets/dist/img/icons8-filter-30.png" alt="">Filter</button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse bg-white px-3" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Location</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Field Staff</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Outlet Type</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <label class="col-form-label text-end fw-semi-bold">Outlet Channel</label>
                                <div class="col-12">
                                    <select class="form-control placeholder-single">                                       
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>                                              
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <button class="btn btn-primary me-2">Go</button>
                                <button class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="row mb-3">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats statistic-box mb-4">
                <div class="card-header card-header-warning card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                        <i class="typcn typcn-device-tablet"></i>
                    </div>
                    <p class="fs-15 fw-bold mt-3">Total Outlet</p>
                    <h3 class="card-title fs-18 fw-bold">2</h3>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="#" class="warning-link">Total Outlet</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats statistic-box mb-4">
                <div class="card-header card-header-success card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                        <i class="typcn typcn-home-outline"></i>
                    </div>
                    <p class="fs-15 fw-bold mt-3">Total outlet map to fieldstaff</p>
                    <h3 class="card-title fs-21 fw-bold">5</h3>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="#" class="warning-link">Total outlet map to fieldstaff</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats statistic-box mb-4">
                <div class="card-header card-header-danger card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                        <i class="typcn typcn-info-outline"></i>
                    </div>
                    <p class="fs-15 fw-bold mt-3">Total outlet map to client</p>
                    <h3 class="card-title fs-21 fw-bold">75</h3>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="#" class="warning-link">Total outlet map to client</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats statistic-box mb-4">
                <div class="card-header card-header-info card-header-icon position-relative border-0 text-end px-3 py-0">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <p class="fs-15 fw-bold mt-3 mb-1">Click to custom export</p>
                    <i class="typcn typcn-arrow-down-thick fs-26"></i>
                </div>
                <div class="card-footer p-3">
                    <div class="stats">
                        <a href="#" class="warning-link">Click to custom export</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card">
                <div class="card-header gradient-1 p-3">
                    <h1 class="fs-24 text-white">Outlet Type Classification</h1>
                </div>
                <div class="card-body py-5">
                    <div class="fs-15 fw-bold">
                        2 Wholesaler
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card">
                <div class="card-header gradient-2 p-3">
                    <h1 class="fs-24 text-white"> Most Covered LGAs</h1>
                </div>
                <div class="card-body py-5">
                    <div class="fs-15 fw-bold">
                        1 Aba North
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card">
                <div class="card-header gradient-3 p-3">
                    <h1 class="fs-24 text-white">Least Covered LGAs</h1>
                </div>
                <div class="card-body py-5">
                    <div class="fs-15 fw-bold">
                        1 Aba North
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-6 d-flex">
            <div class="card mb-4 flex-fill w-100">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Variable Radius Pie Chart</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chartdiv" style="width: 100%;
                    height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex">
            <div class="card mb-4 flex-fill w-100">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Variable Radius Pie Chart</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chartdiv1" style="width: 100%;
                    height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Outlet By Region</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table display table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Region Name</th>
                                    <th>Outlet</th>
                                    <th>Wholesaler</th>
                                    <th>Neighbourhood</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                </tr>

                                <tr>
                                    <td>Jonas Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-12 d-flex">
            <div class="card mb-4 flex-fill w-100">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 fw-semi-bold mb-0">Performance by Outlet Sales last 2 weeks</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chartdiv2" style="width: 100%;
                    height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{url('public/assets/plugins/amcharts5/index.js')}}"></script>
<script src="{{url('public/assets/plugins/amcharts5/percent.js')}}"></script>
<script src="{{url('public/assets/plugins/amcharts5/themes/Animated.js')}}"></script>
<script src="{{url('public/assets/plugins/amcharts5/xy.js')}}"></script>

{{-- <script src="{{url('Modules/Outlet/Assets/js/dashboard.js')}}"></script> --}}



    <!-- Chart code -->
    <script>
        am5.ready(function() {
            var root = am5.Root.new("chartdiv");

            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            var chart = root.container.children.push(am5percent.PieChart.new(root, {
                layout: root.verticalLayout
            }));

            var series = chart.series.push(am5percent.PieSeries.new(root, {
                valueField: "value",
                categoryField: "category"
            }));

            series.data.setAll([{
                value: 10,
                category: "One"
            }, {
                value: 9,
                category: "Two"
            }, {
                value: 6,
                category: "Three"
            }, {
                value: 5,
                category: "Four"
            }, {
                value: 4,
                category: "Five"
            }, {
                value: 3,
                category: "Six"
            }, {
                value: 1,
                category: "Seven"
            }, ]);

            var legend = chart.children.push(am5.Legend.new(root, {
                centerX: am5.percent(50),
                x: am5.percent(50),
                marginTop: 15,
                marginBottom: 15
            }));

            legend.data.setAll(series.dataItems);

            series.appear(1000, 100);

        });
    </script>
    <script>
        am5.ready(function() {
            var root = am5.Root.new("chartdiv1");

            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            var chart = root.container.children.push(am5percent.PieChart.new(root, {
                layout: root.verticalLayout
            }));

            var series = chart.series.push(am5percent.PieSeries.new(root, {
                valueField: "value",
                categoryField: "category"
            }));

            series.data.setAll([{
                value: 10,
                category: "One"
            }, {
                value: 9,
                category: "Two"
            }, {
                value: 6,
                category: "Three"
            }, {
                value: 5,
                category: "Four"
            }, {
                value: 4,
                category: "Five"
            }, {
                value: 3,
                category: "Six"
            }, {
                value: 1,
                category: "Seven"
            }, ]);

            var legend = chart.children.push(am5.Legend.new(root, {
                centerX: am5.percent(50),
                x: am5.percent(50),
                marginTop: 15,
                marginBottom: 15
            }));

            legend.data.setAll(series.dataItems);

            series.appear(1000, 100);

        });
    </script>
    <script>
        am5.ready(function() {

            var root = am5.Root.new("chartdiv2");

            root.setThemes([am5themes_Animated.new(root)]);

            var chart = root.container.children.push(
                am5xy.XYChart.new(root, {
                    panX: false,
                    panY: false,
                    wheelX: "panX",
                    wheelY: "zoomX",
                    layout: root.verticalLayout
                })
            );

            chart.set(
                "scrollbarX",
                am5.Scrollbar.new(root, {
                    orientation: "horizontal"
                })
            );

            var data = [{
                day: "sat",
                income: 23.5,
                expenses: 21.1
            }, {
                day: "sun",
                income: 26.2,
                expenses: 30.5
            }, {
                day: "mon",
                income: 30.1,
                expenses: 34.9
            }, {
                day: "thue",
                income: 29.5,
                expenses: 31.1
            }, {
                day: "thu",
                income: 30.6,
                expenses: 28.2,
                strokeSettings: {
                    stroke: chart.get("colors").getIndex(1),
                    strokeWidth: 3,
                    strokeDasharray: [5, 5]
                }
            }, {
                day: "fri",
                income: 34.1,
                expenses: 32.9,
                columnSettings: {
                    strokeWidth: 1,
                    strokeDasharray: [5],
                    fillOpacity: 0.2
                },
                info: "(projection)"
            }];

            var xAxis = chart.xAxes.push(
                am5xy.CategoryAxis.new(root, {
                    categoryField: "day",
                    renderer: am5xy.AxisRendererX.new(root, {}),
                    tooltip: am5.Tooltip.new(root, {})
                })
            );

            xAxis.data.setAll(data);

            var yAxis = chart.yAxes.push(
                am5xy.ValueAxis.new(root, {
                    min: 0,
                    extraMax: 0.1,
                    renderer: am5xy.AxisRendererY.new(root, {})
                })
            );

            var series1 = chart.series.push(
                am5xy.ColumnSeries.new(root, {
                    name: "Income",
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueYField: "income",
                    categoryXField: "day",
                    tooltip: am5.Tooltip.new(root, {
                        pointerOrientation: "horizontal",
                        labelText: "{name} in {categoryX}: {valueY} {info}"
                    })
                })
            );

            series1.columns.template.setAll({
                tooltipY: am5.percent(10),
                templateField: "columnSettings"
            });

            series1.data.setAll(data);

            var series2 = chart.series.push(
                am5xy.LineSeries.new(root, {
                    name: "Expenses",
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueYField: "expenses",
                    categoryXField: "day",
                    tooltip: am5.Tooltip.new(root, {
                        pointerOrientation: "horizontal",
                        labelText: "{name} in {categoryX}: {valueY} {info}"
                    })
                })
            );

            series2.strokes.template.setAll({
                strokeWidth: 3,
                templateField: "strokeSettings"
            });


            series2.data.setAll(data);

            series2.bullets.push(function() {
                return am5.Bullet.new(root, {
                    sprite: am5.Circle.new(root, {
                        strokeWidth: 3,
                        stroke: series2.get("stroke"),
                        radius: 5,
                        fill: root.interfaceColors.get("background")
                    })
                });
            });

            chart.set("cursor", am5xy.XYCursor.new(root, {}));

            var legend = chart.children.push(
                am5.Legend.new(root, {
                    centerX: am5.p50,
                    x: am5.p50
                })
            );
            legend.data.setAll(chart.series.values);

            chart.appear(1000, 100);
            series1.appear();

        }); // end am5.ready()
    </script>


@endsection

@push('js')
@endpush