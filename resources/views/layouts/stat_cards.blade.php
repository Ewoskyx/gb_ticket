<div class="cardBox">
    @card(['type'=>'ticket-total','count' => $result->count(), 'icon' => 'ticket-outline','routeTo'=>'all_tickets'])
          Toplam      
    @endcard
    @card(['type'=>'pend','count' => $result->where('status', 'pending')->count(),'icon' => 'bug-outline','routeTo'=>'tickets_pending'])
          Bekliyor      
    @endcard
    @card(['type'=>'inprog','count' => $result->where('status', 'in_progress')->count(),'icon' => 'barbell-outline','routeTo'=>'tickets_in_progress'])
          Çalışılıyor      
    @endcard
    @card(['type'=>'res','count' => $result->where('status', 'resolved')->count(),'icon' => 'checkmark-done-outline','routeTo'=>'tickets_resolved'])
          Çözümlendi      
    @endcard
    @card(['type'=>'closed','count' => $result->where('status', 'closed')->count(),'icon' => 'close-outline','routeTo'=>'tickets_closed'])
          Kapandı      
    @endcard
</div>
<div class="chart_box">
    <div id="chartdiv"></div>
</div>
<!-- Styles -->
<style>
    #chartdiv {
        width: 100%;
        height: 600px;
        
    }
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        @foreach ($result as $data)
        data = [
            {
                name: "Pending",
                steps: {{ $data->where('status', 'pending')->count() }},
                pictureSettings: {
                    src: 'images/bug-outline.svg'
                }
            },
            {
                name: "In Progress",
                steps: {{ $data->where('status', 'in_progress')->count() }},
                pictureSettings: {
                    src: 'images/barbell-outline.svg'
                }
            },
          
            {
                name: "Resolved",
                steps: {{ $data->where('status', 'resolved')->count() }},
                pictureSettings: {
                    src: 'images/checkmark-done-outline.svg'
                }
            },
            {
                name: "Closed",
                steps: {{ $data->where('status', 'closed')->count() }},
                pictureSettings: {
                    src: 'images/close-outline.svg'
                }
            },
        ];
        @endforeach

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(
            am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelX: "none",
                wheelY: "none",
                paddingLeft: 50,
                paddingRight: 40
            })
        );

        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/

        var yRenderer = am5xy.AxisRendererY.new(root, {});
        yRenderer.grid.template.set("visible", false);

        var yAxis = chart.yAxes.push(
            am5xy.CategoryAxis.new(root, {
                categoryField: "name",
                renderer: yRenderer,
                paddingRight: 40
            })
        );

        var xRenderer = am5xy.AxisRendererX.new(root, {});
        xRenderer.grid.template.set("strokeDasharray", [4]);

        var xAxis = chart.xAxes.push(
            am5xy.ValueAxis.new(root, {
                min:0,
                renderer: xRenderer
            })
        );

        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        var series = chart.series.push(
            am5xy.ColumnSeries.new(root, {
                name: "Income",
                xAxis: xAxis,
                yAxis: yAxis,
                valueXField: "steps",
                categoryYField: "name",
                sequencedInterpolation: true,
                calculateAggregates: true,
                maskBullets: false,
                tooltip: am5.Tooltip.new(root, {
                    dy: -30,
                    pointerOrientation: "vertical",
                    labelText: "{valueX}"
                })
            })
        );

        series.columns.template.setAll({
            strokeOpacity: 0,
            cornerRadiusBR: 10,
            cornerRadiusTR: 10,
            cornerRadiusBL: 10,
            cornerRadiusTL: 10,
            maxHeight: 50,
            fillOpacity: 0.8
        });

        var currentlyHovered;

        series.columns.template.events.on("pointerover", function(e) {
            handleHover(e.target.dataItem);
        });

        series.columns.template.events.on("pointerout", function(e) {
            handleOut();
        });

        function handleHover(dataItem) {
            if (dataItem && currentlyHovered != dataItem) {
                handleOut();
                currentlyHovered = dataItem;
                var bullet = dataItem.bullets[0];
                bullet.animate({
                    key: "locationX",
                    to: 1,
                    duration: 3000,
                    easing: am5.ease.out(am5.ease.cubic)
                });
            }
        }

        function handleOut() {
            if (currentlyHovered) {
                var bullet = currentlyHovered.bullets[0];
                bullet.animate({
                    key: "locationX",
                    to: 0,
                    duration: 3000,
                    easing: am5.ease.out(am5.ease.cubic)
                });
            }
        }


        var circleTemplate = am5.Template.new({});

        series.bullets.push(function(root, series, dataItem) {
            var bulletContainer = am5.Container.new(root, {});
            var circle = bulletContainer.children.push(
                am5.Circle.new(
                    root, {
                        radius: 34
                    },
                    circleTemplate
                )
            );

            var maskCircle = bulletContainer.children.push(
                am5.Circle.new(root, {
                    radius: 27
                })
            );

            // only containers can be masked, so we add image to another container
            var imageContainer = bulletContainer.children.push(
                am5.Container.new(root, {
                    mask: maskCircle
                })
            );

            // not working
            var image = imageContainer.children.push(
                am5.Picture.new(root, {
                    templateField: "pictureSettings",
                    centerX: am5.p50,
                    centerY: am5.p50,
                    width: 60,
                    height: 60
                })
            );

            return am5.Bullet.new(root, {
                locationX: 0,
                sprite: bulletContainer
            });
        });

        // heatrule
        series.set("heatRules", [{
                dataField: "valueX",
                min: am5.color(0xe5dc36),
                max: am5.color(0x5faa46),
                target: series.columns.template,
                key: "fill"
            },
            {
                dataField: "valueX",
                min: am5.color(0xe5dc36),
                max: am5.color(0x5faa46),
                target: circleTemplate,
                key: "fill"
            }
        ]);

        series.data.setAll(data);
        yAxis.data.setAll(data);

        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
        cursor.lineX.set("visible", false);
        cursor.lineY.set("visible", false);

        cursor.events.on("cursormoved", function() {
            var dataItem = series.get("tooltip").dataItem;
            if (dataItem) {
                handleHover(dataItem)
            } else {
                handleOut();
            }
        })

        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        series.appear();
        chart.appear(1000, 100);

    }); // end am5.ready()
</script>
