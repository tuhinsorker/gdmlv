
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