@extends('layout.app')

@section('content')
    <div class="master-kategori-add">
        <div class="pop-up-simpan" id="popUpSimpan">
            <div class="card">
                <div class="title">
                    <i class="fa fa-check-circle" style="color: #12D962;"></i>
                    <p class="text-1">Success</p>
                    <p class="text-2">Create Email Succesfully</p>
                    <a href="{{ route('backend.settings.index') }}" class="button">OK</a>
                </div>
            </div>
        </div>

        <form method="POST" class="formdata" action="{{ route('backend.setting-email.store') }}">
            @csrf
            <div class="top-page">
                <div class="groupDiv">
                    <a href="{{ route('backend.settings.index') }}"><img
                            src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                    <h1 class="text-1">Setting Email Service <span>/ Tambah Email Service</span></h1>
                </div>
                <button class="border-0 bg-transparent" type="submit">
                    <a class="button">Simpan</a>
                </button>
            </div>

            <div class="box">
                <div class="box2">
                    <div class="text-box">
                        <p style="margin-bottom: 5px"><span>*</span>Nama</p>
                        <input type="text" placeholder="Masukkan Nama" name="name">
                    </div>
                </div>
                <div class="box2">
                    <div class="text-box">
                        <p style="margin-bottom: 5px"><span>*</span>Email</p>
                        <input type="text" placeholder="Masukkan Email" name="email">
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
