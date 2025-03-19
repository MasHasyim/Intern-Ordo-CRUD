@extends('layout.app')

@section('content')
    <div class="dashboard-balancing">
        <div class="top-page">
            <a href="{{ route('super-admin.dashboard.index') }}"><img src="{{ asset('images/icon/arrow-back.svg') }}"
                    alt="Ironing"></a>
            <p>List / <span style="font-weight: 700">Spotting</span></p>
        </div>

        <div class="box3">
            <div class="top2">
                <div class="items" id="switch">
                    <p class="item active" onclick="switchTable('ongoing')">Ongoing</p>
                    <p class="item" onclick="switchTable('history')">History</p>
                </div>
            </div>
            <div class="table-box">
                <div id="table-ongoing">
                    <table id="table-master-user">
                        <thead>
                            <tr>
                                <th style="width: 5% !important">No.</th>
                                <th>Kode CF</th>
                                <th>Customer</th>
                                <th>Pabrik</th>
                                <th>Berat SKU</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>CF001</td>
                                    <td>The Melia Nusa Dua</td>
                                    <td>Pabrik Goa Long</td>
                                    <td>0.8 Kg</td>
                                    <td class="text-center"><a
                                            href="{{ route('super-admin.dashboard.spotting-detail-1') }}"><i
                                                class="fa fa-eye" style="color: #28A745"></i></a></td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <div id="table-history" style="display: none;">
                    <table id="table-master-user2">
                        <thead>
                            <tr>
                                <th style="width: 5% !important">No.</th>
                                <th>Kode CF</th>
                                <th>Customer</th>
                                <th>Pabrik</th>
                                <th>Berat SKU</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>CF001</td>
                                    <td>The Melia Nusa Dua</td>
                                    <td>Pabrik Goa Long</td>
                                    <td>0.8 Kg</td>
                                    <td class="text-center"><a
                                            href="{{ route('super-admin.dashboard.spotting-detail-2') }}"><i
                                                class="fa fa-eye" style="color: #28A745"></i></a></td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function switchTable(type) {
            const ongoing = document.getElementById('table-ongoing');
            const history = document.getElementById('table-history');
            const items = document.querySelectorAll('#switch .item');

            if (type === 'ongoing') {
                ongoing.style.display = 'block';
                history.style.display = 'none';
            } else if (type === 'history') {
                ongoing.style.display = 'none';
                history.style.display = 'block';
            }

            items.forEach(item => {
                if (item.textContent.toLowerCase() === type) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });

            if (type === 'ongoing') {
                $('#table-master-user').DataTable().columns.adjust().draw();
            } else if (type === 'history') {
                $('#table-master-user2').DataTable().columns.adjust().draw();
            }
        }

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
                columnDefs: [{
                        targets: '_all',
                        defaultContent: '-'
                        // sortable: false
                    },
                    {
                        targets: [5],
                        sortable: false
                    },
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

            $('#table-master-user2').DataTable({
                scrollX: true,
                scrollY: 'calc(100vh - 400px)',
                responsive: true,
                columnDefs: [{
                        targets: '_all',
                        defaultContent: '-'
                        // sortable: false
                    },
                    {
                        targets: [5],
                        sortable: false
                    },
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
