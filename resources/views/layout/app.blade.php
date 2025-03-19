<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Texkleen</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/photo/texkleen.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    {{-- @php
        $files = File::glob(public_path('build/assets/*.css'));
    @endphp
    @foreach ($files as $file)
        <link rel="stylesheet" href="{{ asset('build/assets/' . basename($file)) }}" />
    @endforeach --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- alwan color picker --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alwan/dist/css/alwan.min.css" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- alwan color picker --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alwan/dist/css/alwan.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('js/doomEdit/doomEdit.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"
        integrity="sha512-hUhvpC5f8cgc04OZb55j0KNGh4eh7dLxd/dPSJ5VyzqDWxsayYbojWyl5Tkcgrmb/RVKCRJI1jNlRbVP4WWC4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @stack('style')
</head>

<body>
    <div id="app" class="wrapper">
        {{-- Sidebar logic based on URL --}}
        @php
            $currentUrl = url()->current();

            // if (strpos($currentUrl, 'super-admin') !== false) {
            echo view('layout.sidebar-super-admin');
            // } elseif (strpos($currentUrl, 'leader') !== false) {
            // echo view('layout.sidebar-leader');
            // } elseif (strpos($currentUrl, 'staff') !== false) {
            // echo view('layout.sidebar-staff');
            // }
        @endphp


        <div>
            <nav class="content">
                <div class="top-bar">
                    <div>
                        <img class="icon-sidebar2" id="sidebar-button" src="{{ asset('images/icon/sidebar-icon.svg') }}"
                            alt="logo" />
                        <img class="logo-texkleen" src="{{ asset('images/icon/logo.svg') }}" alt="logo" />
                    </div>
                </div>
            </nav>

            <div class="content-wrapper">
                @yield('content')

                {{-- Modal Filter --}}
            </div>
            <div id="qrcode-container" style="display:none;"></div>
            <iframe id="printableIframe" style="display:none; border: none;" width="0" height="0"></iframe>

            @yield('modal')

            <div class="modal fade trolley-tujuan2" id="details" tabindex="-1" aria-labelledby="detail"
                aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <form class="modal-content" id="formNotif" method="POST">
                        @csrf
                        <div class="modal-head">
                            <h3 id="notif-title">Warning</h3>
                            <i class="fa fa-times" data-dismiss="modal"></i>
                        </div>

                        <div class="modal-body">
                            <p id="notif-body">Waktu pengerjaan untuk Collection Form 1 kurang 1 Jam lagi! segera
                                selesaikan
                                pekerjaan!</p>
                        </div>
                        <div class="modal-footer" id="rewash-button">
                            <button class="button primary" type="submit" style="width: 100%">
                                OK
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal fade trolley-tujuan2" id="detailAsk" tabindex="-1" aria-labelledby="detailAsk"
                aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <form class="modal-content" method="POST" id="solaxForm">
                        @csrf
                        <div class="modal-head">
                            <h3>Konfirmasi</h3>
                            <i class="fa fa-times" data-dismiss="modal"></i>
                        </div>

                        <div class="modal-body">
                            <p id="notif-extra">Waktu pengerjaan untuk Collection Form 1 kurang 1 Jam lagi! segera
                                selesaikan
                                pekerjaan!</p>
                        </div>
                        <div class="modal-footer">
                            <button class="button secondary submit-notif" data-type="decline" type="button"
                                style="width: 45%">
                                Decline
                            </button>
                            <button class="button primary submit-notif" data-type="accept" type="button"
                                style="width: 45%">
                                Accept
                            </button>
                        </div>
                        <input type="hidden" name="type">
                    </form>
                </div>
            </div>

            <div class="modal fade general" id="notifGambar" tabindex="-1" aria-labelledby="notifGambarLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title w-100" id="notif-image-type">INFO !</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="{{ asset('images/icon/close.svg') }}" alt="">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="wrapp-img">
                                <img id="notif-image-img" src="{{ asset('images/photo/notif-img.png') }}"
                                    alt="">
                            </div>

                            <p class="sub-text" id="notif-image-from">Form : Superadmin</p>

                            <div class="warning" id="notif-image-body">
                                Berhasil menambahkan CF baru pada hotel “The Westin Nusa Dua (WND)”. Cek sekarang!
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn-primary w-100" id="notif-image-submit">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade sku" id="addSku" tabindex="2" aria-labelledby="filter" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <form class="modal-content" method="POST">
                        <div class="modal-head">
                            <h3>Tambah SKU</h3>
                            <i class="fa fa-times-circle" data-dismiss="modal"></i>
                        </div>

                        <div class="modal-body">
                            <div class="group-text">
                                <p>Missing Delivery</p>
                                <input type="number" readonly value="10">
                            </div>
                            <div class="d-flex flex-column" style="gap: 20px">
                                <div class="group-text2">
                                    <div class="group-input">
                                        <p>Jenis Inventory</p>
                                        <div class="select-wrapper-arrow">
                                            <select name="" id="">
                                                <option value="" selected disabled>Pilih</option>
                                                <option value="">Mesin</option>
                                                <option value="">Trolley</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="group-input">
                                        <p>Type</p>
                                        <div class="select-wrapper-arrow">
                                            <select name="" id="">
                                                <option value="" selected disabled>Pilih</option>
                                                <option value="">SOIL-01</option>
                                                <option value="">SOIL-02</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="group-input">
                                        <p>QTY</p>
                                        <input type="number" placeholder="Quantity">
                                    </div>
                                    <i class="fa fa-times-circle"></i>
                                </div>
                            </div>
                            <a class="add-trolley">+ Tambah Inventory</a>
                        </div>
                        <div class="modal-footer">
                            <button class="button secondary" type="button" data-dismiss="modal">
                                Cancel
                            </button>
                            <button class="button primary" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"
        integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"
        integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"
        integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    {{-- bootsrap --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- chart js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"
        integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"
        integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"
        integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- bootsrap --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- chart js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script> --}}
    <script src="{{ asset('js/html5-qrcode/html5-qrcode.min.js') }}"></script>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js"></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <script src="{{ asset('js/doomEdit/jquery.doomEdit.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.select-2').select2();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const notif = document.getElementById('notifikasi');
            const open = document.getElementById('openNotifikasi');
            const close = document.getElementById('closeNotifikasi');

            if (open && notif && close) {
                open.addEventListener('click', () => {
                    notif.style.display = 'flex';
                });

                close.addEventListener('click', () => {
                    notif.style.display = 'none';
                });
            }
        });

        document.body.classList.add('no-transition');
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.body.classList.remove('no-transition');
            }, 500);
        });
    </script>

    {{-- Number Pad --}}
    <script>
        let namePad = '';
        $(document).on('click', '.open-pad', function() {
            $('#popUpPad').css('display', 'flex');
            namePad = $(this).attr('name');
            $('#calcInput-pad').val($(`input[name="${namePad}"]`).val());
        });

        $(document).on('click', '.number-box-pad-val', function() {
            var value = $(this).find('p').text();
            console.log(value);
            var input = $('#calcInput-pad');
            var current = input.val();
            var new_value = current + value;
            console.log(new_value)
            if (current == '0') {
                input.val(value);
            } else {
                input.val(new_value);
            }
        });

        $(document).on('click', '#clear-pad', function() {
            $('#calcInput-pad').val('0');
        });

        $(document).on('click', '#backspace-pad', function() {
            var current = $('#calcInput-pad').val();
            if (current.length > 1) {
                $('#calcInput-pad').val(current.slice(0, -1));
            } else {
                $('#calcInput-pad').val('0');
            }
        });

        $(document).on('click', '#enter-pad', function() {
            var value = parseFloat($('#calcInput-pad').val());
            $(`input[name="${namePad}"]`).val(value);
            $(`input[name="${namePad}"]`).trigger('keyup');
            $('#popUpPad').css('display', 'none');
            $('#calcInput-pad').val('0');
        });

        $(document).on('click', '#closePad', function() {
            $('#popUpPad').css('display', 'none');
            $('#calcInput-pad').val('0');
        });
    </script>
    @stack('script')
</body>

</html>
