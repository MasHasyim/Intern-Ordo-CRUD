@extends('layout.app')

@section('content')
    <div class="master-user-detail">
        <div class="top-page">
            <a href="{{ route('backend.datamaster.user.index') }}"><img src='{{ asset('images/icon/arrow-back.svg') }}'></a>
            <h1 class="text-1">User <span>/ Detail</span></h1>
        </div>

        <div class="box">
            <div class="text-box">
                <div class="inside-box">
                    <p>Status</p>
                    <p id="checkActive" class="{{ $user->status === 'active' ? 'status-active' : 'status-inactive' }}">
                        {{ ucfirst($user->status) }}</p>
                </div>
            </div>
            <div class="border2"></div>
            <div class="text-box">
                <p>Nama</p>
                <p class="text-2">{{ $user->name }}</p>
            </div>
            <div class="border2"></div>
            <div class="box2">
                <div class="text-box">
                    <p>Username</p>
                    <p class="text-2">{{ $user->username }}</p>
                    <div class="border2"></div>
                </div>
                <div class="text-box">
                    <p>Email</p>
                    <p class="text-2">{{ $user->email }}</p>
                    <div class="border2"></div>
                </div>
            </div>
            <div class="box3">
                <div class="text-box">
                    <p>Role</p>
                    <p class="text-2">{{ $user->role->name }}</p>
                    <div class="border2"></div>
                </div>
                <div class="text-box">
                    <p>Pabrik</p>
                    <p class="text-2">{{ $user->factory->name }}</p>
                    <div class="border2"></div>
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

{{-- @push('script')
    <script>
        $(document).ready(function() {
            var statusDiv = $('#checkActive'); // Target the correct element
            var statusText = statusDiv.text().trim(); // Get the text and trim whitespace

            if (statusText.toLowerCase() === 'Active') {
                statusDiv.addClass('status-active'); // Add the active class
            } else if (statusText.toLowerCase() === 'Inactive') {
                statusDiv.addClass('status-inactive'); // Add the inactive class
            }
        });
    </script>
@endpush --}}
