@extends('layout.app')

@section('content')
    <div class="setting">
        @include('components.pop-up-change-status')
        @include('components.pop-up-delete')
        <div class="top-page">
            <div>
                <h1 class="text-1">Setting Email Service</h1>
            </div>
        </div>

        <div class="box">
            <div class="w-100 d-flex justify-content-between align-items-center mb-2">
                <p class="text-1">Notifikasi Broadcast ke Whatsapp</p>
                <div class="toggle-switch">
                    <input type="checkbox" id="switch1" class="switch-input"
                        {{ setting('broadcast', false) ? 'checked' : '' }} />
                    <label for="switch1" class="switch-label">
                        <span class="switch-slider"></span>
                        <span class="switch-text on-text">Off</span>
                        <span class="switch-text off-text">On</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="wrapp-bottom">
            <div class="filter three">
                <div class="wrapp-search">
                    <input type="text" class="form-control search" placeholder="Cari nama customer" id="searchable">
                    <div class="search-icon">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="wrapp-select">
                    <select class="form-select" id="active_status" aria-label="Default select example">
                        <option value="">Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div class="btn-primary" onclick="window.location.href = `{{ route('backend.setting-email.create') }}`"
                    type="button">
                    + Tambah Email
                </div>
            </div>

            <div class="card-tabel">
                <div class="card-datatable">
                    <table id="table-setting">
                        <thead>
                            <tr>
                                <th class="d-none"></th>
                                <th class="">Nama</th>
                                <th class="">Email</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $("#table-setting").DataTable({
                scrollX: true,
                scrollY: 'calc(100vh - 400px)',
                responsive: true,
                processing: true,
                serverSide: true,
                lengthChange: false,
                searching: false,
                ajax: {
                    url: `{{ route('backend.settings.index') }}`,
                    data: function(d) {
                        d.searchable = $('#searchable').val();
                        d.is_active = $('#active_status').val();
                    }
                },
                columns: [{
                        data: 'id',
                        visible: false
                    }, {
                        data: 'name',
                    },
                    {
                        data: 'email',
                    },
                    {
                        data: 'is_active',
                    },
                    {
                        data: 'action',
                        sortable: false,
                        searchable: false,
                    }
                ],
                order: [
                    [0, 'desc']
                ],
                "columnDefs": [{
                    targets: 3,
                    orderable: false
                }],
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

                "aaSorting": [], // Matikan sorting default
            });
            $('#table-setting').DataTable().on('draw.dt', function() {
                $(this).DataTable().columns.adjust();
            });
        });


        $(document).ready(function() {
            $('.toggle-switch input').change(function() {
                const checked = $(this).prop('checked');
                const that = $(this);
                const url = "{{ route('backend.settings.store') }}";
                const data = {
                    broadcast: checked ? 1 : 0
                };

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        toastr.success('Berhasil mengubah setting');
                    },
                    error: function(xhr, status, error) {
                        var err = JSON.parse(xhr.responseText);
                        if (err.errors) {
                            for (const [key, value] of Object.entries(err.errors)) {
                                toastr.error(value, 'Error', {
                                    timeOut: 3000
                                });
                            }
                        } else {
                            toastr.error(err.message, 'Error', {
                                timeOut: 3000
                            });
                        }
                        that.prop('checked', !checked);
                    }
                });
            });
        });

        $('#searchable').on('keyup', function() {
            $('#table-setting').DataTable().draw();
        });

        $(document).on('change', '#active_status', function() {
            $('#table-setting').DataTable().draw();
        });

        $('#cancelButton').on('click', function() {
            $('#popUpUbah').hide();
        });

        $('#cancelButton2').on('click', function() {
            $('#popUpHapus').hide();
        });

        $('#closeIcon').on('click', function() {
            $('#popUpUbah').hide();
        });
    </script>
@endpush
