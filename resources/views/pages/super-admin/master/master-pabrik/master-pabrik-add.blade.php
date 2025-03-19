@extends('layout.app')

@section('content')
    <div class="master-pabrik-add">
        <div class="pop-up-simpan" id="popUpSimpan">
            <div class="card">
                <div class="title">
                    <i class="fa fa-check-circle" style="color: #12D962;"></i>
                    <p class="text-1">Success</p>
                    <p class="text-2">Create Pabrik Succesfully</p>
                    <a href="{{ route('super-admin.master.pabrik.index') }}" class="button">OK</a>
                </div>
            </div>
        </div>

        <div class="top-page">
            <div class="groupDiv">
                <a href="{{ route('super-admin.master.pabrik.index') }}"><img
                        src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                <h1 class="text-1">Daftar Pabrik <span>/ Tambah Pabrik</span></h1>
            </div>
            <a id="simpan" class="button">Simpan</a>
        </div>

        <div class="box">
            <div class="box2">
                <div class="text-box">
                    <p style="margin-bottom: 5px"><span>*</span>Kode Pabrik</p>
                    <input type="text" placeholder="Kode Pabrik">
                </div>
                <div class="text-box">
                    <p style="margin-bottom: 5px"><span>*</span>Nama Pabrik</p>
                    <input type="text" placeholder="Nama Pabrik">
                </div>
            </div>
            <div class="box2">
                <div class="text-box">
                    <p style="margin-bottom: 5px"><span>*</span>Lokasi Pabrik</p>
                    <input type="text" placeholder="Masukkan Lokasi Pabrik">
                </div>
                <div class="text-box">
                    <p style="margin-bottom: 5px"><span>*</span>Alamat</p>
                    <input type="text" placeholder="Masukkan Alamat">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const popup = document.getElementById('popUpSimpan');
            const simpan = document.getElementById('simpan');

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

        document.addEventListener("DOMContentLoaded", function() {
            const startTimeInput = document.getElementById("start-time");
            const endTimeInput = document.getElementById("end-time");

            const currentTime = new Date().toISOString().slice(0, 5);
            startTimeInput.value = currentTime;
            endTimeInput.value = currentTime;

            endTimeInput.addEventListener("change", function() {
                const startTime = startTimeInput.value;
                const endTime = endTimeInput.value;

                if (startTime >= endTime) {
                    alert("End time must be greater than start time.");
                }
            });
        });
    </script>
@endpush
