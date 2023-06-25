{{-- <footer class="main-footer">
  <p style="font:bold; color:black">&copy; Nuclear Gauges <span id="copyright-year"></span></p>

  <script>
    var year = new Date().getFullYear();
    document.getElementById("copyright-year")
      .textContent = year;
  </script>
</footer> --}}
{{-- <footer class="main-footer">
  <p style="font:bold; color:black">&copy; Nuclear Gauges <span id="current-year"></span></p>
  <script>
    setInterval(function() {
      var year = new Date().getFullYear();
      document.getElementById("current-year").textContent = year;
    }, 1000);
  </script>
</footer> --}}
{{-- <footer class="main-footer">
  <p style="font:bold; color:black">&copy; Nuclear Gauges <span id="current-date"></span></p>
  <script>
    setInterval(function() {
      var currentDate = new Date();
      var year = currentDate.getFullYear();
      var month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
      var day = ("0" + currentDate.getDate()).slice(-2);
      var formattedDate = day + "/" + month + "/" + year;
      document.getElementById("current-date").textContent = formattedDate;
    }, 1000);
  </script>
</footer> --}}
<footer class="main-footer">
  <p style="font:bold; color:black">&copy; Nuclear Gauges <span id="current-date"></span> <span id="current-time"></span></p>
  <script>
    setInterval(function() {
      var currentDate = new Date();
      var year = currentDate.getFullYear();
      var month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
      var day = ("0" + currentDate.getDate()).slice(-2);
      var formattedDate = day + "/" + month + "/" + year;

      var hour = ("0" + currentDate.getHours()).slice(-2);
      var minute = ("0" + currentDate.getMinutes()).slice(-2);
      var second = ("0" + currentDate.getSeconds()).slice(-2);
      var formattedTime = hour + ":" + minute + ":" + second;

      document.getElementById("current-date").textContent = formattedDate;
      document.getElementById("current-time").textContent = formattedTime;
    }, 1000);
  </script>
</footer>
    </div>
  </div>
  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script> --}}
  <script src="{{asset('dist/modules/jquery.min.js')}}"></script>
  <script src="{{asset('dist/modules/popper.js')}}"></script>
  <script src="{{asset('dist/modules/tooltip.js')}}"></script>
  <script src="{{asset('dist/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
  <script src="{{asset('dist/js/sa-functions.js')}}"></script>
  
  <script src="{{asset('dist/modules/chart.min.js')}}"></script>
  <script src="{{asset('dist/modules/summernote/summernote-lite.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.js" integrity="sha512-jdM4CX13QmorrIpE3U+2hOxEO+j6hy9nZFUMIIC8LvNS699p7mxonP7z//UnPGs3Vkn299GKD9FWN60m1tZGxg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  {{-- <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script> --}}
  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
  window.onload = function() {
      CKEDITOR.replace( 'editor' );
  };
</script> --}}
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( error => {
			console.error( 'There was a problem initializing the editor.', error );
		} );
</script> --}}
@yield('ckeditor')
@yield('dropdown')
  <script src="{{asset('dist/js/scripts.js')}}"></script>
  <script src="{{asset('dist/js/custom.js')}}"></script>
  <script src="{{asset('dist/js/demo.js')}}"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready( function () {
      $('#data-table').DataTable();
  } );
  
  </script>

<script  type="text/javascript">

  $(document).ready(function () {
    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be gone forever.",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });
  });
  
  
  </script>