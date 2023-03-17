

<div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <div class="p-6 m-20 bg-white rounded shadow">
    </div>
        <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>
        <div>
            <canvas id="myChart"></canvas>
        </div>
        
        <?php $dataku = ''; 
        $temp_lingkar = [];
        $temp_length = [];
        $temp_weight = [];

         ?>
        @foreach ($history as $item)
          
          <?php
          $i = 0;
          $temp_lingkar[$loop->index] = $item->lingkar;
          $temp_length[$loop->index] = $item->length;
          $temp_weight[$loop->index] = $item->weight;

          ?>
        @endforeach
            

            <div class="sm:flex block px-2">

                <table class="table-fixed hover w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">No.</th>
                            <th class="px-4 py-2">Lingkar (cm)</th>
                            <th class="px-4 py-2">Panjang (cm)</th>
                            <th class="px-4 py-2">Berat(kg)</th>
                            <th class="px-4 py-2">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($history as $item)

                        <tr>
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{$item->lingkar}}</td>
                            <td class="border px-4 py-2">{{$item->length}}</td>
                            <td class="border px-4 py-2">{{$item->weight}}</td>
                            <td class="border px-4 py-2">{{$item->created_at}}</td>

                            </tr>
                            @empty
                            <tr>
                                <td class="border px-4 py-2 text-center text-md font-bold" colspan="5">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <script
        src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script>
		new Chart(document.getElementById("myChart"), {
			type : 'line',
			data : {
				labels : [ 1, 2,3,4,5,6,7,8,9,10,11,12],
				datasets : [
                    {
                        data : <?php echo json_encode($temp_lingkar) ?>,
                        label : "Lingkar",
                        borderColor : "#0E8388",
                        fill : false
                    },
                    {
                        data : <?php echo json_encode($temp_length) ?>,
                        label : "Panjang",
                        borderColor : "#E7B10A",
                        fill : false
                    },
            {
                    data : <?php echo json_encode($temp_weight) ?>,
                    label : "Berat",
                    borderColor : "#FF0303",
                    fill : false
                }  
          
          ]
			},
			options : {
                responsive: true,
				
                scales: {
                y: {
                    data : ["January","February","March","April","May","June","July"],
                    title : {
					display : true,
					text : 'Chart JS Multiple Lines Example'
                    },
                    type: 'linear',
                    display: true,
                    position: 'left',
				},
                
                y1: {
                    title : {
					display : true,
					text : 'heheh'
				},
                    type: 'linear',
                    display: true,
                    position: 'right',

                    // grid line settings
                    grid: {
                    drawOnChartArea: false, // only want the grid lines for one axis to show up
                    },
                },
                }
			}
		});
	</script>

    <script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}