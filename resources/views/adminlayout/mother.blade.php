<!DOCTYPE html>
<html lang="en">

<head>
    @include('adminlayout.link')

    <!-- Token AJAX Merk Pupuk -->
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--  CSS nama pengepul dengan AJAX-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
      <!-- data tables -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
      <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" />
    <style>
        .select2-container--default .select2-selection--single {
            height: 2.6rem !important;
            line-height: 2rem !important;
            text-align: left; /* Menyeting teks menjadi rata kiri */
            display: flex; /* Menggunakan display flex untuk mengatur posisi vertikal */
            align-items: center; /* Mengatur posisi vertikal menjadi di tengah */
        }

        #formverify {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: start;
        }

        th{
            width: 250px;
            font-size: 14.5px;
        }

        td {
            font-size: 14.5px;
        }

        .card-header p {
            font-size: 16px;
        }

        .form-group label {
            font-size: 15px;
        }
        
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('nav.top')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            @include('adminlayout.theme')
            @include('adminlayout.panelview')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('nav.nav')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        @yield('container')
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('adminlayout.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    @include('script.script')
    @yield('scripts')
     <!-- datatables -->
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
  <script>
      $(document).ready(function() {
          $('#table').DataTable();
      });
  </script>
    <!-- End custom js for this page-->
</body>

<!-- Script verifikasi data panen -->

</html>
