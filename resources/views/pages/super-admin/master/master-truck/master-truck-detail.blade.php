@extends('layout.app')

@section('content')
    <div class="master-truck-detail">
        <div class="top-page">
            <div class="groupDiv">
                <a href="{{ route('super-admin.master.truck.index') }}"><img
                        src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                <h1 class="text-1">Truck <span>/ Detail</span></h1>
            </div>
        </div>

        <div class="box" style="margin-bottom: 20px">
            <div class="box-padding">
                <div style="display: flex; justify-content: space-between; align-items:center">
                    <p>Status</p>
                    <p class="status-active">Active</p>
                </div>
            </div>
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
                                <div style="position: relative; display:flex">
                                    <p style="font-weight: 500">Tanggal Inventory</p>
                                    <img src="{{ asset('images/icon/date.svg') }}" style="margin-left: 10px" />
                                </div>
                                <p class="text-1">22/06/2024</p>
                            </div>
                        </div>
                        <div class="box2">
                            <div class="text-box">
                                <p style="font-weight: 500">Kode Truck</p>
                                <p class="text-1">TS-15</p>
                            </div>
                            <div class="text-box">
                                <p style="font-weight: 500">Merek Truck</p>
                                <p class="text-1">Suzuki</p>
                            </div>
                        </div>
                        <div class="box2">
                            <div class="text-box">
                                <p style="font-weight: 500">Plat Nomor</p>
                                <p class="text-1">DK 8293 OS</p>
                            </div>
                            <div class="text-box">
                                <p style="font-weight: 500">Ukuran Truck</p>
                                <p class="text-1">Large</p>
                            </div>
                        </div>
                        <div class="box2">
                            <div class="text-box">
                                <p style="font-weight: 500">Kapasitas</p>
                                <p class="text-1">1000</p>
                            </div>
                            <div class="text-box">
                                <p style="font-weight: 500">Pabrik</p>
                                <p class="text-1">Pabrik Taman Giri</p>
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
