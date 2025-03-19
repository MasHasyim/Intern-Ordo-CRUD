@extends('layout.app')

@section('content')
    <div class="master-truck-add">
        <div class="pop-up-simpan" id="popUpSimpan">
            <div class="card">
                <div class="title">
                    <i class="fa fa-check-circle" style="color: #12D962;"></i>
                    <p class="text-1">Success</p>
                    <p class="text-2">Create Truck Successfully</p>
                    <a href="{{ route('super-admin.master.truck.index') }}" class="button">OK</a>
                </div>
            </div>
        </div>

        <div class="top-page">
            <div class="groupDiv">
                <a href="{{ route('super-admin.master.truck.index') }}"><img
                        src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                <h1 class="text-1">Daftar Truck <span>/ Tambah Truck</span></h1>
            </div>
            <a id="simpan" class="button">Simpan</a>
        </div>

        <div class="box">
            <div class="box-padding">
                <div class="upload-button">
                    <div class="button">
                        <img src="{{ asset('images/icon/upload.svg') }}">
                    </div>
                    <div class="text-beside-upload">
                        <div class="box2">
                            <div class="text-box">
                                <p><span>*</span>Tanggal Inventory</p>
                                <input type="date" class="input-style" placeholder="Kode Sopir">
                            </div>
                        </div>
                        <div class="box2">
                            <div class="text-box">
                                <p><span>*</span>Kode Truck</p>
                                <input type="text" class="input-style" placeholder="Kode Truck">
                            </div>
                            <div class="text-box">
                                <p><span>*</span> Merek Truck</p>
                                <input type="text" class="input-style" placeholder="Masukkan Merek">
                            </div>
                        </div>
                        <div class="box2">
                            <div class="text-box">
                                <p><span>*</span>Plat Nomor</p>
                                <input type="text" class="input-style" placeholder="Masukkan Plat Nomor">
                            </div>
                            <div class="text-box">
                                <p><span>*</span>Ukuran Truck</p>
                                <div class="select-wrapper-arrow" style="margin-top:5px">
                                    <select name="" id="mesin">
                                        <option value="" selected disabled>Pilih Ukuran Truck</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box2">
                            <div class="text-box">
                                <p><span>*</span>Kapasitas Truck</p>
                                <input type="text" class="input-style" placeholder="Masukkan Kapasitas">
                            </div>
                            <div class="text-box">
                                <p><span>*</span>Pabrik</p>
                                <div class="select-wrapper-arrow" style="margin-top:5px">
                                    <select name="" id="mesin">
                                        <option value="" selected disabled>Pilih Pabrik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
    </script>
@endpush
