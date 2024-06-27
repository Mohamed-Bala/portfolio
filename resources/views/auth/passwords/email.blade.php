
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>soengsouy.com</title>
        <link rel="shortcut icon" href="{{ URL::to('admin/assets/images/favicon.png') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::to('admin/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::to('admin/assets/vendors/iconly/bold.css') }}">
        <link rel="stylesheet" href="{{ URL::to('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ URL::to('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ URL::to('admin/assets/css/app.css') }}">
        <link rel="shortcut icon" href="{{ URL::to('admin/assets/images/favicon.svg') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ URL::to('admin/assets/vendors/simple-datatables/style.css') }}">
        <link rel="stylesheet" href="{{ URL::to('admin/assets/css/jquery.DataTables_en.css') }}">
    
        {{-- message toastr --}}
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <livewire:styles>
    
    </head>
    <style>
        .form-group[class*=has-icon-].has-icon-left .form-select {
        padding-left: 2.5rem;
    }
    </style>
    <style>
        @import url("{{ asset('assets') }}/fonts/Janna LT Regular.eot");
        
        body{
          font-family: 'fonts/Janna LT Regular.', serif;
        }
        </style>
    
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 150px;)">
                <div class="card">
                <div class="card-header bg-success text-light">{{ __('Reset Password') }}</div>

                <div class="card-body" style="padding-top: 50px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::to('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ URL::to('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::to('admin/assets/vendors/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::to('admin/assets/js/pages/dashboard.js') }}"></script>
<script src="{{ URL::to('admin/assets/js/main.js') }}"></script>

<script src="{{ URL::to('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ URL::to('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ URL::to('admin/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ URL::to('admin/assets/js/jquery.DataTables_en.js') }}"></script>

<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="{{ URL::to('admin/assets/js/main.js') }}"></script>

<livewire:scripts>



</body>

</html>

