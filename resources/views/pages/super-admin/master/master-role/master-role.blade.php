@extends('layout.app')

@section('content')
    <div class="master-role">
        <div class="pop-up-ubah" id="popUpUbah">
            <div class="card">
                <div class="title">
                    <p>Ubah Status</p>
                    <i class="fa fa-times-circle" id="closeIcon" style="color: #DC3545; cursor: pointer;"></i>
                </div>
                <div class="content2">
                    <p>Status</p>
                    <div class="select-wrapper-arrow">
                        <select name="" id="">
                            <option value="" selected disabled>Active</option>
                        </select>
                    </div>
                </div>
                <div class="border2"></div>
                <div class="button">
                    <button class="button1" id="cancelButton">Cancel</button>
                    <button class="button2">Simpan</button>
                </div>
            </div>
        </div>

        <div class="pop-up-hapus" id="popUpHapus">
            <div class="card">
                <div class="title">
                    <i class="fa fa-exclamation-circle" style="color: #DC3545"></i>
                    <p>Do you want to delete this item?</p>
                </div>
                <div class="button">
                    <button class="button1" id="cancelButton2">Cancel</button>
                    <button class="button2">Yes</button>
                </div>
            </div>
        </div>

        <div class="top-page">
            <h1 class="text-1">Daftar Role</h1>
        </div>

        <div class="top-page2">
            <div class="dropdown-group">
                <div class="search-bar">
                    <div class="search-input-container">
                        <input type="text" placeholder="Cari berdasarkan nama atau username">
                        <div class="search-icon">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper-arrow">
                    <select name="" id="">
                        <option value="" selected disabled>Status</option>
                    </select>
                </div>
                <div class="button">
                    <div class="fas fa-plus" style="font-size: 15px; margin-right: 5px;"></div>
                    <a href="{{ route('super-admin.master.role.add') }}">Tambah Role</a>
                </div>
            </div>
        </div>

        <div class="table-box">
            <table id="table-master-user">
                <thead>
                    <tr>
                        <th>Kode Role</th>
                        <th>Nama Role</th>
                        <th style="text-align: center">Status</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SA</td>
                        <td>Superadmin</td>
                        <td>
                            <div>
                                <p>Active</p>
                            </div>
                        </td>
                        <td>
                            <div class="menu-button">
                                <a class="fa fa-pencil-alt" href="{{ route('super-admin.master.role.ubah') }}"
                                    style="color: #FFC107; cursor: pointer;"></a>
                                <div class="ellipsis-container">
                                    <button class="ellipsis-button">
                                        <i class="fa fa-ellipsis-v" style="color: black;"></i>
                                    </button>
                                    <div class="modal-ellipsis">
                                        <a style="cursor: pointer" class="ubahStatus">
                                            <i class="fa fa-pencil-alt" style="color: black;"></i>
                                            <span>Ubah Status</span>
                                        </a>
                                        <a class="hapus" style="cursor: pointer">
                                            <i class="fa fa-trash" style="color: black;"></i>
                                            <span>Hapus</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {{-- <tr>
                        <td>LD</td>
                        <td>Leader</td>
                        <td>
                            <div>
                                <p>Inactive</p>
                            </div>
                        </td>
                        <td>
                            <div class="menu-button">
                                <a class="fa fa-pencil-alt" href="{{ route('super-admin.master.role.ubah') }}"
                                    style="color: #FFC107; cursor: pointer;"></a>
                                <div class="ellipsis-container">
                                    <button class="ellipsis-button">
                                        <i class="fa fa-ellipsis-v" style="color: black;"></i>
                                    </button>
                                    <div class="modal-ellipsis">
                                        <a style="cursor: pointer" class="ubahStatus">
                                            <i class="fa fa-pencil-alt" style="color: black;"></i>
                                            <span>Ubah Status</span>
                                        </a>
                                        <a class="hapus" style="cursor: pointer">
                                            <i class="fa fa-trash" style="color: black;"></i>
                                            <span>Hapus</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ST</td>
                        <td>Staff</td>
                        <td>
                            <div>
                                <p>Active</p>
                            </div>
                        </td>
                        <td>
                            <div class="menu-button">
                                <a class="fa fa-pencil-alt" href="{{ route('super-admin.master.role.ubah') }}"
                                    style="color: #FFC107; cursor: pointer;"></a>
                                <div class="ellipsis-container">
                                    <button class="ellipsis-button">
                                        <i class="fa fa-ellipsis-v" style="color: black;"></i>
                                    </button>
                                    <div class="modal-ellipsis">
                                        <a style="cursor: pointer" class="ubahStatus">
                                            <i class="fa fa-pencil-alt" style="color: black;"></i>
                                            <span>Ubah Status</span>
                                        </a>
                                        <a class="hapus" style="cursor: pointer">
                                            <i class="fa fa-trash" style="color: black;"></i>
                                            <span>Hapus</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>DR</td>
                        <td>Driver</td>
                        <td>
                            <div>
                                <p>Inactive</p>
                            </div>
                        </td>
                        <td>
                            <div class="menu-button">
                                <a class="fa fa-pencil-alt" href="{{ route('super-admin.master.role.ubah') }}"
                                    style="color: #FFC107; cursor: pointer;"></a>
                                <div class="ellipsis-container">
                                    <button class="ellipsis-button">
                                        <i class="fa fa-ellipsis-v" style="color: black;"></i>
                                    </button>
                                    <div class="modal-ellipsis">
                                        <a style="cursor: pointer" class="ubahStatus">
                                            <i class="fa fa-pencil-alt" style="color: black;"></i>
                                            <span>Ubah Status</span>
                                        </a>
                                        <a class="hapus" style="cursor: pointer">
                                            <i class="fa fa-trash" style="color: black;"></i>
                                            <span>Hapus</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#table-master-user').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('backend.datamaster.roles.index') }}',
                columns: [
                    {data: 'id', visible: false},
                    {data: 'code',},
                    {data: 'name',},
                    {data: 'status',},
                    {data: 'action', sortable: false, searchable: false,},
                ],
                scrollX: true,
                responsive: true,
                columnDefs: [{
                        targets: '_all',
                        defaultContent: '-'
                        // sortable: false
                    },
                    // {
                    //     targets: [0,1,2,3,4,5,6],
                    //     sortable: false
                    //     },
                ],
                pagingType: 'simple_numbers',
                "language": {
                    "lengthMenu": "Rows : _MENU_",
                    "info": "Show _START_ to _END_ of _TOTAL_ data",
                    "infoEmpty": "Show 0 to 0 of 0 data",
                    "paginate": {
                        "next": "<img class='next-icon' src='{{ asset('images/icon/table-right-enable.svg') }}'>",
                        "previous": "<img class='prev-icon' src='{{ asset('images/icon/table-left-enable.svg') }}'>"
                    },
                },
                pageLength: 5,
                dom: 'tip',
                drawCallback: function(settings) {
                    var api = this.api();
                    var $nextIcon = $('.next-icon');
                    var $prevIcon = $('.prev-icon');

                    if ($(api.table().container()).find('.paginate_button.next').hasClass('disabled')) {
                        $nextIcon.attr('src', '{{ asset('images/icon/table-right-disable.svg') }}');
                    } else {
                        $nextIcon.attr('src', '{{ asset('images/icon/table-right-enable.svg') }}');
                    }

                    if ($(api.table().container()).find('.paginate_button.previous').hasClass(
                            'disabled')) {
                        $prevIcon.attr('src', '{{ asset('images/icon/table-left-disable.svg') }}');
                    } else {
                        $prevIcon.attr('src', '{{ asset('images/icon/table-left-enable.svg') }}');
                    }

                },
                pageLength: 5,
                dom: 'tip',
                initComplete: function() {
                    $('.dataTables_info').each(function() {
                        var text = $(this).text();
                        $(this).html(text.replace(/(\d+\s+to\s+\d+)/, '<strong>$1</strong>'));
                    });

                    $('#table-master-user tbody tr').each(function() {
                        var statusDiv = $(this).find('td').find('p');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Active') {
                            statusDiv.addClass('status-active');
                        } else if (statusText === 'Inactive') {
                            statusDiv.addClass('status-inactive');
                        }
                    });
                }
            });
            $(document).on('click', '.ellipsis-button', function(e) {
                e.stopPropagation();
                var $modal = $(this).siblings('.modal-ellipsis');
                $('.modal-ellipsis').not($modal).hide();
                $modal.toggle();
            });

            $(document).on('click', function() {
                $('.modal-ellipsis').hide();
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const popup = document.getElementById('popUpUbah');
            const closeIcon = document.getElementById('closeIcon');
            const cancelButton = document.getElementById('cancelButton');
            const ubahStatusButtons = document.querySelectorAll('.ubahStatus');

            const popup2 = document.getElementById('popUpHapus');
            const cancelButton2 = document.getElementById('cancelButton2');
            const hapusButtons = document.querySelectorAll('.hapus');

            function togglePopup() {
                popup.style.display = popup.style.display === 'none' ? 'flex' : 'none';
            }

            function togglePopup2() {
                popup.style.display = popup.style.display === 'flex' ? 'none' : 'flex';
            }

            function togglePopupHapus() {
                popup2.style.display = popup2.style.display === 'none' ? 'flex' : 'none';
            }

            function togglePopupHapus2() {
                popup2.style.display = popup2.style.display === 'flex' ? 'none' : 'flex';
            }

            closeIcon.addEventListener('click', togglePopup);
            cancelButton.addEventListener('click', togglePopup);
            popup.addEventListener('click', (e) => {
                if (e.target === popup) {
                    togglePopup();
                }
            });
            ubahStatusButtons.forEach(button => {
                button.addEventListener('click', togglePopup2);
            });

            cancelButton2.addEventListener('click', togglePopupHapus);
            popup2.addEventListener('click', (e) => {
                if (e.target === popup2) {
                    togglePopupHapus();
                }
            });
            hapusButtons.forEach(button => {
                button.addEventListener('click', togglePopupHapus2);
            });
        });
    </script>
@endpush
