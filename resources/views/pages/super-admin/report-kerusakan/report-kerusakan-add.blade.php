@extends('layout.app')

@section('content')
    <div class="master-mesin-add">
        <div class="pop-up-simpan" id="popUpSimpan">
            <div class="card">
                <div class="title">
                    <i class="fa fa-check-circle" style="color: #12D962;"></i>
                    <p class="text-1">Success</p>
                    <p class="text-2">Create Broken Report Successfully</p>
                    <a href="{{ route('backend.broken-report.index') }}" class="button">OK</a>
                </div>
            </div>
        </div>

        <form class="formdata" method="POST" action="{{ route('backend.broken-report.store') }}">
            @csrf
            <div class="top-page">
                <div class="groupDiv">
                    <a href="#"><img src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                    <h1 class="text-1">Report Kerusakan <span>/ Tambah Report</span></h1>
                </div>
                <button class="border-0 bg-transparent" type="submit">
                    <a class="button">Simpan</a>
                </button>
            </div>

            <div class="box">
                <div class="box-padding">
                    <div class="upload-button">
                        <div class="text-beside-upload">
                            <div class="text-box">
                                <p><span>*</span>Tanggal Kerusakan</p>
                                <input type="datetime-local" class="input-style" placeholder="- Pilih Tanggal -"
                                    name="broken_date" value="{{ old('inventory_date', now()->format('Y-m-d H:i:s')) }}"
                                    readonly>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path
                                        d="M5.625 0C5.79076 0 5.94973 0.065848 6.06694 0.183058C6.18415 0.300269 6.25 0.45924 6.25 0.625V2.5H13.75V0.625C13.75 0.45924 13.8158 0.300269 13.9331 0.183058C14.0503 0.065848 14.2092 0 14.375 0C14.5408 0 14.6997 0.065848 14.8169 0.183058C14.9342 0.300269 15 0.45924 15 0.625V2.5H17.2917C18.0967 2.5 18.75 3.15333 18.75 3.95833V17.2917C18.75 17.6784 18.5964 18.0494 18.3229 18.3229C18.0494 18.5964 17.6784 18.75 17.2917 18.75H2.70833C2.32156 18.75 1.95063 18.5964 1.67714 18.3229C1.40365 18.0494 1.25 17.6784 1.25 17.2917V3.95833C1.25 3.15333 1.90333 2.5 2.70833 2.5H5V0.625C5 0.45924 5.06585 0.300269 5.18306 0.183058C5.30027 0.065848 5.45924 0 5.625 0ZM17.5 7.91667H2.5V17.2917C2.5 17.4067 2.59333 17.5 2.70833 17.5H17.2917C17.3469 17.5 17.3999 17.4781 17.439 17.439C17.4781 17.3999 17.5 17.3469 17.5 17.2917V7.91667ZM2.70833 3.75C2.65308 3.75 2.60009 3.77195 2.56102 3.81102C2.52195 3.85009 2.5 3.90308 2.5 3.95833V6.66667H17.5V3.95833C17.5 3.90308 17.4781 3.85009 17.439 3.81102C17.3999 3.77195 17.3469 3.75 17.2917 3.75H2.70833Z"
                                        fill="#AEAEAE" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="box2" style="margin-top: 0px; padding-top: 0px">
                        <div class="text-box">
                            <p><span>*</span>Tipe Kerusakan</p>
                            <div class="mt-2">
                                <input type="text" class="form-control" placeholder="Input Tipe" name="type"
                                    id="type" required readonly>
                            </div>
                        </div>
                        <div class="text-box">
                            <p><span>*</span>Kode Kerusakan</p>
                            <div class="mt-2">
                                <input type="text" class="form-control" placeholder="Input Kode Kerusakan"
                                    name="brokenable_text" id="brokenable_text" required readonly>
                                <input type="hidden" name="brokenable_id" id="brokenable_id">
                            </div>
                        </div>
                    </div>
                    <div class="text-box">
                        <p><span>*</span>Keterangan Kerusakan</p>
                        <input type="text" class="input-style" placeholder="Masukkan Keterangan" name="note" />
                    </div>
                    <div class="box2" style="margin-top: 0px; padding-top: 0px">
                        <div class="text-box">
                            <p><span>*</span>Upload Bukti Kerusakan</p>
                            <div class="wrapper-upload" style="margin-top:5px">
                                <label class="button" for="image-input">
                                    <img src="{{ asset('images/icon/upload.svg') }}" id="preview-input-image"
                                        style="max-height: 200px; max-width: 200px">
                                </label>
                                <input type="file" id="image-input" style="display: none" name="images[0][image]">
                            </div>
                        </div>
                        <div class="text-box">
                            <p style="color: white">.</p>
                            <div class="wrapper-upload" style="margin-top:5px">
                                <label class="button" for="image-input-2">
                                    <img src="{{ asset('images/icon/upload.svg') }}" id="preview-input-image-2"
                                        style="max-height: 200px; max-width: 200px">
                                </label>
                                <input type="file" id="image-input-2" style="display: none" name="images[1][image]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const popup = document.getElementById('popUpSimpan');
            const simpan = document.getElementById('simpan');
            const enterButton = document.getElementById('enterButton');
            const jumlahBatch = document.getElementById('jumlahBatch');
            const box3Container = document.getElementById('box3Container');
            const mesin = document.getElementById('mesin');
            const tipeMesin = document.getElementById('tipeMesin');
            const tunnelDiv = document.querySelector('.tunnel');
            const tunnelBox = document.getElementById('tunnel-box');

            function togglePopup() {
                popup.style.display = popup.style.display === 'none' ? 'flex' : 'none';
            }

            function togglePopup2() {
                popup.style.display = popup.style.display === 'flex' ? 'none' : 'flex';
            }

            popup.addEventListener('click', (e) => {
                if (e.target === popup) {
                    togglePopup();
                }
            });

            simpan.addEventListener('click', togglePopup2);
        });

        $('#image-input').change(function(event) {
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview-input-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        });

        $('#image-input-2').change(function(event) {
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview-input-image-2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>

    <script>
        $(document).ready(async function() {
            const urlParams = new URLSearchParams(window.location.search);

            code = urlParams.get('code');

            const response = await fetch(`/api/v1/broken-report-scan?code=${code}`);
            const data = await response.json();

            if (data.data) {
                $('#type').val(data.data.type);
                $('#brokenable_id').val(data.data.id);
                $('#brokenable_text').val(data.data.code);
            }

        });
    </script>
@endpush
