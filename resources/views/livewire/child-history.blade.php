



    <script src="https://cdn.jsdelivr.net/gh/makeabilitylab/p5js/_libraries/serial.js"></script>

<div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        {{-- {{ $childrenID }}
        {{ $link }} --}}
        
        {{-- tombol connect serial --}}
        {{-- <x-jet-button class="ml-4" onclick='window.location.href="http://127.0.0.1:8000/show/". $childrenID ."/30/30/30"'> --}}


        <x-jet-button class="ml-4" id="connect-button" onclick="onButtonConnectToSerialDevice()">
            
        Connect Device
    
    </x-jet-button>
    <x-jet-button id="send-data " class="hidden">send to arduino</x-jet-button>


    <script>
        var dataku = '';
        const rcvdText = document.getElementById('received-text');
     
     
     const inputText = document.querySelector('input');
       const outputText = document.getElementById('output-text');
     
       inputText.addEventListener('input', updateOutputText);
     
         // And update the textContent of 'received-text' when new data is received
         function onSerialDataReceived(eventSender, newData) {
         console.log("onSerialDataReceived", newData);
         rcvdText.textContent = newData;
       }
     
       // Called automatically when the input textbox is updated
       function updateOutputText(e) {
         outputText.textContent = e.target.value;
         serialWriteTextData(e.target.value);
       }
     
       // Send text data over serial
       async function serialWriteTextData(textData) {
         if (serial.isOpen()) {
           console.log("Writing to serial: ", textData);
           serial.writeLine(textData);
         }
       }
     
       // Setup Web Serial using serial.js
       const serial = new Serial();
       serial.on(SerialEvents.CONNECTION_OPENED, onSerialConnectionOpened);
       serial.on(SerialEvents.CONNECTION_CLOSED, onSerialConnectionClosed);
       serial.on(SerialEvents.DATA_RECEIVED, onSerialDataReceived);
       serial.on(SerialEvents.ERROR_OCCURRED, onSerialErrorOccurred);
     
       async function onButtonConnectToSerialDevice() {
         console.log("onButtonConnectToSerialDevice");
         if (!serial.isOpen()) {
           await serial.connectAndOpen();
         }
       }
     
       function onSerialErrorOccurred(eventSender, error) {
         console.log("onSerialErrorOccurred", error);
       }
     
       function onSerialConnectionOpened(eventSender) {
         console.log("onSerialConnectionOpened", eventSender);
         document.getElementById("connect-button").style.display = "none";
       document.getElementById("send-data").style.display = "block";
       }
     
       function onSerialConnectionClosed(eventSender) {
         console.log("onSerialConnectionClosed", eventSender);
       }
     
       function onSerialDataReceived(eventSender, newData) {
         console.log("onSerialDataReceived", newData);
         dataku = newData;
    
         let lingkar = newData.slice(1 ,5);
         let panjang = newData.slice(6,10);
         let berat = newData.slice(11,15);
         console.log(lingkar, " lingkar,");
         console.log(panjang, " panjang,");
         console.log(berat, " berat,");

         var child = <?=json_encode($childrenID)?>;
          window.location=('http://127.0.0.1:8000/show/'+child+'/'+lingkar+'/'+panjang+'/'+berat+'');
          console.log(window.location);
       }
     
       async function onConnectButtonClick() {
         console.log("Connect button clicked!");
       }
     </script>
     <script>
        
        document.querySelector('#send-data').addEventListener('click', async () => {
        if (serial.isOpen()) {
          // console.log("Writing to serial: ", "hehe");
          // serial.writeLine(1);
            serial.write(1);
            console.log("dataku ", dataku);
        }
    
    
    });
    </script>

<?php
$value = "<script>document.writeln(part);</script>";

$link = "http://127.0.0.1:8000/show/".$childrenID."/".$value."/30/30";

?>
<script>var child = <?=json_encode($childrenID)?>;
// console.log("id ", child);
</script>
<x-jet-button class="ml-4">
    <a href="http://127.0.0.1:8000/show/" onclick=
"location.href=this.href+child+'/'+dataku+'/40/40';return false;" rel="noopener noreferrer">
Add Data 
</a> 
</x-jet-button>
        <div>
            <canvas id="myChart"></canvas>
        </div>
        <div class="p-2 m-2">
    </div>
        
        <?php 
        
        $dataku = ''; 
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
                        // text : 'Chart JS Multiple Lines Example'
                        },
                        type: 'linear',
                        display: true,
                        position: 'left',
                    },
                }
			}
		});
	</script>

    <script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}


