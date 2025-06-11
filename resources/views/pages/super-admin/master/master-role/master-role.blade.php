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
                        <select name="status" id="statusSelect">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>

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
                ajax: {
                    url:`{{ route('backend.datamaster.roles.index') }}`, 
                }, 
                columns: [{
                        data: 'code',
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'status',
                    },
                    {
                        data: 'action',
                        sortable: false,
                        searchable: false
                    },
                    // {
                    //     data: 'id',
                    //     visible: false
                    // },
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

            $(document).on('click', '.ubahStatus', function() {
                $('.ubahStatus').removeClass('active');
                $(this).addClass('active');
                $('#statusSelect').val($(this).data('status'));
                $('#popUpUbah').css('display', 'flex');
            });

            $(document).on('click', '.modal-ellipsis a:contains("Hapus")', function() {
                $('#popUpHapus').css('display', 'flex');
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
            // ubahStatusButtons.forEach(button => {
            //     button.addEventListener('click', togglePopup2);
            // });

            // ubahStatusButtons.forEach(button => {
            //     button.addEventListener('click', function() {
            //         document.querySelectorAll('.ubahStatus').forEach(btn => btn.classList.remove(
            //             'active'));
            //         this.classList.add('active');
            //         togglePopup2();
            //     });
            // })

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

        document.querySelector('.button2').addEventListener('click', function() {
            const selectedStatus = document.getElementById('statusSelect').value;
            const targetId = document.querySelector('.ubahStatus.active')?.getAttribute('data-id');

            if (!targetId) return alert('ID tidak ditemukan');

            fetch(`/backend/datamaster/roles/${targetId}/change-status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        status: selectedStatus
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Status berhasil diubah ke: ' + data.new_status);
                        $('#table-master-user').DataTable().ajax.reload();
                        document.getElementById('popUpUbah').style.display = 'none';
                    } else {
                        alert('Gagal ubah status');
                    }
                })
                .catch(error => {
                    console.error(error);
                    alert('Terjadi kesalahan.');
                });
        });
    </script>
@endpush
