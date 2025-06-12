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

        <form method="POST" class="formdata" action="{{ route('backend.datamaster.user.store') }}">
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
                    <input type="text" name="username" class="input-style" placeholder="Masukkan Username" required>
                </div>
                <div class="text-box">
                    <p><span>*</span>Nama</p>
                    <input type="text" name="name" class="input-style" placeholder="Masukkan Nama" required>
                </div>
                <div class="box2">
                    <div class="text-box">
                        <p><span>*</span>Email</p>
                        <input type="email" name="email" class="input-style" placeholder="Masukkan Email" required>
                    </div>
                    <div class="text-box">
                        <p><span>*</span>Password</p>
                        <div class="input-wrapper" style="flex-direction: column">
                            <div style="position: relative ; width: 100%">
                                <input type="password" name="password" class="input-style" placeholder="Password"
                                    id='password' required>
                                <i class="bi bi-eye-slash input-postfix" id="togglePassword"
                                    onclick="togglePasswordVisibility()"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box3">
                    <div class="text-box">
                        <p><span>*</span>Role</p>
                        <div class="select-wrapper-arrow">
                            <select name="role_id" id="role_id" >
                                <option value="" selected disabled>- Pilih Role -</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : ''}}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-box">
                        <p><span>*</span>Pabrik</p>
                        <div class="select-wrapper-arrow">
                            <select name="factory_id" id="factory_id">
                                <option value="" selected disabled>- Pilih Pabrik -</option>
                                @foreach ($factories as $factory)
                                    <option value="{{ $factory->id }}" {{ old('factory_id') == $factory->id ? 'selected' : ''}}>{{ $factory->name }}</option>
                                @endforeach
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
        function togglePasswordVisibility() {
            var password = document.getElementById('password');
            var icon = document.getElementById('togglePassword')

            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            } else {
                password.type = 'password';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            }
        }

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
