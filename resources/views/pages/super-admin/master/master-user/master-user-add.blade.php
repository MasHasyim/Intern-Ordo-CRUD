@extends('layout.app')

@section('content')
    <div class="master-user-add">
        <div class="pop-up-simpan" id="popUpSimpan">
            <div class="card">
                <div class="title">
                    <i class="fa fa-check-circle" style="color: #12D962;"></i>
                    <p class="text-1">Success</p>
                    <p class="text-2">Create User Succesfully</p>
                    <a href="{{ route('backend.datamaster.user.index') }}" class="button">OK</a>
                </div>
            </div>
        </div>

        <form action="{{ route('backend.datamaster.user.store') }}">
            @csrf
            <div class="top-page">
                <div class="groupDiv">
                    <a href="{{ route('backend.datamaster.user.index') }}"><img
                            src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                    <h1 class="text-1">Daftar User <span>/ Tambah User</span></h1>
                </div>
                <button type="submit" id="simpan" class="button">Simpan</button>
            </div>

            <div class="box">
                <div class="text-box">
                    <p><span>*</span>Username</p>
                    <input type="text" name="username" class="input-style" placeholder="Masukkan Username">
                </div>
                <div class="text-box">
                    <p><span>*</span>Nama</p>
                    <input type="text" name="name" class="input-style" placeholder="Masukkan Nama">
                </div>
                <div class="box2">
                    <div class="text-box">
                        <p><span>*</span>Email</p>
                        <input type="text" name="email" class="input-style" placeholder="Masukkan Email">
                    </div>
                    <div class="text-box">
                        <p><span>*</span>Password</p>
                        <div class="input-wrapper"></div>
                        <input type="password" name="password" class="input-style" placeholder="Password">
                    </div>
                </div>
                <div class="box3">
                    <div class="text-box">
                        <p><span>*</span>Role</p>
                        <div class="select-wrapper-arrow">
                            <select name="" id="">
                                <option value="" selected disabled>Role</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-box">
                        <p><span>*</span>Pabrik</p>
                        <div class="select-wrapper-arrow">
                            <select name="" id="">
                                <option value="" selected disabled>Pabrik</option>
                            </select>
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
