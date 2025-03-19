@extends('layout.app')

@section('content')
    <div class="master-role-add">
        <div class="pop-up-simpan" id="popUpSimpan">
            <div class="card">
                <div class="title">
                    <i class="fa fa-check-circle" style="color: #12D962;"></i>
                    <p class="text-1">Success</p>
                    <p class="text-2">Update Role Succesfully</p>
                    <a href="{{ route('super-admin.master.role.index') }}" class="button">OK</a>
                </div>
            </div>
        </div>

        <div class="top-page">
            <div class="groupDiv">
                <a href="{{ route('super-admin.master.role.index') }}"><img
                        src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                <h1 class="text-1">Daftar Role <span>/ Ubah Role</span></h1>
            </div>
            <a id="simpan" class="button">Simpan</a>
        </div>

        <div class="out-box">
            <div class="box" style="width: 100%">
                <div class="text-box">
                    <p><span>*</span>Kode Role</p>
                    <input type="text" class="input-style" placeholder="Masukkan Nama">
                </div>
                <div class="text-box">
                    <p><span>*</span>Nama Role</p>
                    <input type="text" class="input-style" placeholder="Masukkan Nama Role">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.querySelectorAll('.dropdown .toggle-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const dropdownContent = btn.parentElement.nextElementSibling;

                if (dropdownContent.style.display === 'none' || !dropdownContent.style.display) {
                    dropdownContent.style.display = 'block';
                    btn.classList.add('open');
                } else {
                    dropdownContent.style.display = 'none';
                    btn.classList.remove('open');
                }
            });
        });

        // document.getElementById('semuaAkses').addEventListener('change', function() {
        //     const checkboxes = document.querySelectorAll('.access-list input[type="checkbox"]');
        //     checkboxes.forEach(function(checkbox) {
        //         checkbox.checked = document.getElementById('semuaAkses').checked;
        //     });
        // });

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
