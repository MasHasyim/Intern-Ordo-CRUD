@extends('layout.app')

@section('content')
    <div class="dashboard-balancing">
        <div class="top-page">
            <a href="javascript:history.back()"><img src="{{ asset('images/icon/arrow-back.svg') }}" alt="Ironing"></a>
            <p>Detail / <span style="font-weight: 700">CF Ongoing</span></p>
        </div>

        <div class="box3" style="margin-top: 40px">
            <div class="table-box">
                <div id="table-ongoing">
                    <table id="table-master-user">
                        <thead>
                            <tr>
                                <th style="width: 5% !important">No.</th>
                                <th>SKU</th>
                                <th>Kategori Kain</th>
                                <th>Trolley Asal</th>
                                <th>Trolley Tujuan</th>
                                <th>Berat SKU</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>Towel Pool</td>
                                    <td>Towel</td>
                                    <td>SOIL 1, SOIL 2</td>
                                    <td>SOIL 1, SOIL 2</td>
                                    <td>0.8 Kg</td>
                                    <td>09/05/2024, 15:00 </td>
                                    <td>-</td>
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
                        targets: [7],
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
        });
    </script>
@endpush
