@extends('layout.app')

@section('content')
    <div class="dashboard-truck-rusak">
        <div class="top-page">
            <a href="{{ route('super-admin.dashboard.index') }}"><img src="{{ asset('images/icon/arrow-back.svg') }}"
                    alt="Ironing"></a>
            <p>List / <span style="font-weight: 700">Truck Rusak</span></p>
        </div>

        <div class="search-bar2">
            <div class="search-input-container">
                <input type="text" placeholder="Cari berdasarkan plat nomor" id="searchable">
                <div class="search-icon">
                    <i class="fa fa-search"></i>
                </div>
            </div>
        </div>

        <div class="box3">
            <div class="table-box">
                <table id="table-master-user">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Truck</th>
                            <th>Plat Nomor</th>
                            <th>Merk Truk</th>
                            <th>Ukuran Truk</th>
                            <th>Pabrik</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('#switch .item');

            items.forEach(item => {
                item.addEventListener('click', () => {
                    items.forEach(i => i.classList.remove('active'));

                    item.classList.add('active');
                });
            });
        });

        $(document).ready(function() {
            $('#table-master-user').DataTable({
                scrollX: true,
                scrollY: 'calc(100vh - 400px)',
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: `{{ route('backend.dashboard.broken.trucks') }}`,
                },
                columns: [{
                        data: 'id',
                    },
                    {
                        data: 'code',
                    },
                    {
                        data: 'number_plate',
                    },
                    {
                        data: 'brand',
                    },
                    {
                        data: 'weight',
                    },
                    {
                        data: 'factory.name'
                    }
                ],

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
                pagingType: 'simple',
                "language": {
                    "lengthMenu": "Rows : _MENU_",
                    "info": "_START_ - _END_ of _TOTAL_ Items",
                    "infoEmpty": "Show 0 of 0 Item",
                    "paginate": {
                        "next": "<img class='next-icon' src='{{ asset('images/icon/table-right-enable.svg') }}'>",
                        "previous": "<img class='prev-icon' src='{{ asset('images/icon/table-left-enable.svg') }}'>"
                    },
                },
                aaSorting: [],
                lengthMenu: [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                pageLength: 10,
                dom: 'tipl',
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
                initComplete: function() {
                    $('.dataTables_info').each(function() {
                        var text = $(this).text();
                        $(this).html(text.replace(/(\d+\s+to\s+\d+)/, '<strong>$1</strong>'));
                    });

                    $('#table-master-user tbody tr').each(function() {
                        var statusDiv = $(this).find('td').eq(6).find('div');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Regular') {
                            statusDiv.addClass('status-regular');
                        } else if (statusText === 'Express') {
                            statusDiv.addClass('status-express');
                        }
                    });

                    $('#table-master-user tbody tr').each(function() {
                        var statusDiv = $(this).find('td').eq(9).find('div');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Need Revision') {
                            statusDiv.addClass('status-need-revision');
                        } else if (statusText === 'Need Approve') {
                            statusDiv.addClass('status-need-approve');
                        } else if (statusText === 'Draft') {
                            statusDiv.addClass('status-draft');
                        } else if (statusText === 'Uncomplete') {
                            statusDiv.addClass('status-uncomplete');
                        } else if (statusText === 'Complete') {
                            statusDiv.addClass('status-complete');
                        }
                    });

                    $('#table-master-user tbody tr').each(function() {
                        var statusDiv = $(this).find('td').eq(5).find('div');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Overdue') {
                            statusDiv.addClass('status-overdue');
                        } else if (statusText === 'Ontime') {
                            statusDiv.addClass('status-ontime');
                        } else if (statusText === 'Earlier') {
                            statusDiv.addClass('status-earlier');
                        }
                    });
                }
            });
            $('#table-master-user').DataTable().on('draw.dt', function() {
                $(this).DataTable().columns.adjust();
            });

            $(document).on('keyup', '#searchable', function() {
                $('#table-master-user').DataTable().search($(this).val()).draw();
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

            document.addEventListener('DOMContentLoaded', () => {
                const popup2 = document.getElementById('popUpHapus');
                const cancelButton2 = document.getElementById('cancelButton2');
                const hapusButtons = document.querySelectorAll('.hapus');

                hapusButtons.forEach((hapusButton) => {
                    hapusButton.addEventListener('click', () => {
                        popup2.style.display = 'flex';
                    });
                });

            });
        });
    </script>
@endpush
