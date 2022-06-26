@section('head-customizations')
    @parent
    <style>
        #overlay-area {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='%23f1f5f9'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
            background-color: rgba(0, 55, 255, 0.2);
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: 999;
        }

        .dialog-contailer {
            padding: 30px 50px;
            background: #ffffff;
        }
    </style>
@endsection
<div id="overlay-area" class="flex items-top justify-center sm:items-center py-4 sm:pt-0">
    <div class="dialog-contailer">
        @yield('dialog-content')
    </div>
</div>