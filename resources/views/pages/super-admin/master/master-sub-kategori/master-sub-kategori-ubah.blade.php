@extends('layout.app')

@section('content')
    <div class="master-sub-kategori-ubah">
        <div class="pop-up-simpan" id="popUpSimpan">
            <div class="card">
                <div class="title">
                    <i class="fa fa-check-circle" style="color: #12D962;"></i>
                    <p class="text-1">Success</p>
                    <p class="text-2">Update Sub Kategori Succesfully</p>
                    <a href="{{ route('super-admin.master.sub-kategori.index') }}" class="button">OK</a>
                </div>
            </div>
        </div>

        <div class="top-page">
            <div class="groupDiv">
                <a href="{{ route('super-admin.master.sub-kategori.index') }}"><img
                        src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                <h1 class="text-1">Daftar Kategori <span>/ Ubah Sub Kategori</span></h1>
            </div>
            <a id="simpan" class="button">Simpan</a>
        </div>

        <div class="box">
            <div class="box2">
                <div class="text-box">
                    <p style="margin-bottom: 5px"><span>*</span>Kode Sub Kategori</p>
                    <input type="text" placeholder="Kode Sub Kategori">
                </div>
            </div>
            <div class="box2">
                <div class="text-box">
                    <p style="margin-bottom: 5px"><span>*</span>Sub Kategori</p>
                    <input type="text" placeholder="Masukkan Sub Kategori">
                </div>
            </div>
            <div class="box2">
                <div class="text-box">
                    <p style="margin-bottom: 5px"><span>*</span>Kategori</p>
                    <div class="select-wrapper-arrow">
                        <select name="" id="">
                            <option value="" selected disabled>- Pilih Kategori -</option>
                        </select>
                    </div>
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
