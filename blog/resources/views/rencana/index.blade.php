@extends('layouts.conquer')

@section('tempat_konten')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Rencana Kegiatan Pertambangan
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a>Rencana Kegiatan Pertambangan</a>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="container">
            
            <div class="response"></div>

            <div id='chart_div'></div>
        </div>
    </div>
</div>
</div>
<!-- END PAGE CONTENT-->
<div id="classModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="classModalLabel">
                    Class Info
                </h4>
            </div>
            <div class="modal-body">
                <table id="classTable" class="table table-bordered">
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <td>id</td>
                            <td>Kegiatan</td>
                            <td>Musim</td>
                            <td>mulai</td>
                            <td>akhir</td>
                            <td>durasi</td>
                            <td>presentase selesai</td>
                            <td>ketergantungan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>




@section('tempat_script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['gantt']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Task ID');
        data.addColumn('string', 'Task Name');
        data.addColumn('string', 'Resource');
        data.addColumn('date', 'Start Date');
        data.addColumn('date', 'End Date');
        data.addColumn('number', 'Duration');
        data.addColumn('number', 'Percent Complete');
        data.addColumn('string', 'Dependencies');

        data.addRows([
            ['2014Spring', 'Spring 2014', 'spring',
                new Date(2014, 2, 22), new Date(2014, 5, 22), null, 100, null
            ],
            ['2014Summer', 'Summer 2014', 'summer',
                new Date(2014, 5, 21), new Date(2014, 8, 20), null, 100, null
            ],
            ['2014Autumn', 'Autumn 2014', 'autumn',
                new Date(2014, 8, 21), new Date(2014, 11, 20), null, 100, null
            ],
            ['2014Winter', 'Winter 2014', 'winter',
                new Date(2014, 11, 21), new Date(2015, 2, 21), null, 100, null
            ],
            ['2015Spring', 'Spring 2015', 'spring',
                new Date(2015, 2, 22), new Date(2015, 5, 20), null, 50, null
            ],
        ]);

        var options = {
            height: 400,
            gantt: {
                trackHeight: 30
            }
        };

        var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

        chart.draw(data, options);
    }
</script>
@endsection
@endsection