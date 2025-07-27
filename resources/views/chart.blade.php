<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dynamic Donut Chart</title>
    <script src="https://fastly.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
    <style>
        #chart-container {
            width: 100%;
            max-width: 800px;
            height: 400px;
            margin: 50px auto;
        }
    </style>
</head>

<body>
    <div id="chart-container"></div>

    <script>
        var dom = document.getElementById('chart-container');
        var myChart = echarts.init(dom, null, {
            renderer: 'canvas',
            useDirtyRect: false
        });

        var option = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: '5%',
                left: 'center'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                itemStyle: {
                    borderRadius: 10,
                    borderColor: '#fff',
                    borderWidth: 2
                },
                label: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: 30,
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: false
                },
                data: @json(
                    $data->map(function ($item) {
                        return ['value' => $item->value, 'name' => $item->name];
                    }))
            }]
        };

        if (option && typeof option === 'object') {
            myChart.setOption(option);
        }

        window.addEventListener('resize', myChart.resize);
    </script>
</body>

</html>
