@extends('layout.app')

@section('content')
    <div class="master-user-ubah">
        <div class="pop-up-simpan" id="popUpSimpan">
            <div class="card">
                <div class="title">
                    <i class="fa fa-check-circle" style="color: #12D962;"></i>
                    <p class="text-1">Success</p>
                    <p class="text-2">Update User Succesfully</p>
                    <a href="{{ route('backend.datamaster.user.index') }}" class="button">OK</a>
                </div>
            </div>
        </div>

        <form method="POST" class="formdata" action="{{ route('backend.datamaster.user.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="top-page">
                <div class="groupDiv">
                    <a href="{{ route('backend.datamaster.user.index') }}"><img
                            src='{{ asset('images/icon/arrow-back.svg') }}'></a>
                    <h1 class="text-1">Daftar User <span>/ Ubah User</span></h1>
                </div>
                <a id="simpan" type="submit" class="button">Simpan</a>
            </div>

            <div class="box">
                <div class="text-box">
                    <p><span>*</span>Username</p>
                    <input type="text" class="input-style" name="username" value="{{old('username', $user->username)}}" placeholder="Masukkan Username">
                </div>
                <div class="text-box">
                    <p><span>*</span>Nama</p>
                    <input type="text" class="input-style" name="name" value="{{old('name', $user->name)}}" placeholder="Masukkan Nama">
                </div>
                <div class="box2">
                    <div class="text-box">
                        <p><span>*</span>Email</p>
                        <input type="text" class="input-style" name="email" value="{{old('email', $user->email)}}" placeholder="Masukkan Email">
                    </div>
                    <div class="text-box">
                        <p><span>*</span>Password</p>
                        <input type="password" class="input-style" name="password" value="{{old('password', $user->password)}}" placeholder="Password">
                    </div>
                </div>
                <div class="box3">
                    <div class="text-box">
                        <p><span>*</span>Role</p>
                        <div class="select-wrapper-arrow">
                            <select required name="role_id" id="role_id">
                                <option value="" selected disabled>Role</option>
                                @foreach ($roles as $role)
                                    <option @selected(old('role_id', $user->role[0]->id) == $role->id) value="{{ $role->id }}">{{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-box">
                        <p><span>*</span>Pabrik</p>
                        <div class="select-wrapper-arrow">
                            <select required name="factory_id" id="factory_id">
                                <option value="" selected disabled>Pabrik</option>
                                @foreach ($factories as $factory)
                                    <option @selected(old('factory_id', $user->factory[0]->id) == $factory->id) value="{{ $factory->id }}">{{ $factory->name }}
                                    </option>
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
