@extends('layout.app')

@section('content')
    <div class="report">
        <div class="pop-up-img" id="popUpImg">
            <i class="fa fa-times-circle close-image-button" style="color: #DC3545; cursor: pointer;"></i>
            <i class="fa fa-chevron-left arrow-custom" style="left: 10%" id="to-left"></i>
            <img id="selectedImage" alt="">
            <i class="fa fa-chevron-right arrow-custom" style="right: 10%" id="to-right"></i>
        </div>

        <div class="top-page">
            <div>
                <h1 class="text-1">Daftar Report Kerusakan</h1>
            </div>
            <div class="group-button">
                <a class="button-1" id="download-excel">
                    <div class="fas fa-file-import" style="font-size: 15px; margin-right: 5px;"></div>
                    <span href="#">Export Excel</span>
                </a>

                <a class="button-2" id="download-pdf">
                    <div class="fas fa-print" style="font-size: 15px; margin-right: 5px;"></div>
                    <span href="{{ route('backend.broken-report.download-pdf') }}" id="download-pdf">
                        Download PDF</span>
                </a>
            </div>
        </div>

        <div class="top-page2">
            <div class="dropdown-group">
                <div class="search-bar">
                    <div class="search-input-container">
                        <input type="text" placeholder="Cari code" id="searchable">
                        <div class="search-icon">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="button2" data-toggle="modal" data-target="#filter5">
                    <span>Filter</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                        fill="none">
                        <path d="M3.23828 7H21.2383" stroke="#3750BD" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M6.23828 12H18.2383" stroke="#3750BD" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M10.2383 17H14.2383" stroke="#3750BD" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </a>
                <div class="group-button">
                    <div class="button-3">
                        <div class="fas fa-plus" style=" margin-right: 5px;"></div>
                        <a data-target="#scanReortRusak" data-toggle="modal">Tambah Report</a>
                    </div>
                </div>
                {{-- <div class="group-button">
                    <div class="button-3">
                        <div class="fas fa-plus" style=" margin-right: 5px;"></div>
                        <a href="{{ route('backend.broken-report.create') }}">Tambah Report</a>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="table-box">
            <table id="table-master-user">
                <thead>
                    <tr>
                        <th class="d-none"></th>
                        <th>Tanggal Kerusakan</th>
                        <th>Jenis Kerusakan</th>
                        <th>Kode Kerusakan</th>
                        <th>Nama</th>
                        <th>Zona</th>
                        <th>Durasi</th>
                        <th>Keterangan</th>
                        <th class="text-center">Bukti Kerusakan</th>
                        <th class="text-center">Status</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        {{-- <tr>
                            <td>18 April 2024, 16:32 WITA</td>
                            <td>Trolley</td>
                            <td>SOIL - 01</td>
                            <td>Trolley Presta (Jepang)</td>
                            <td>Washing</td>
                            <td>Roda Tidak Dapat Berputar</td>
                            <td>
                                <div class="image-container">
                                    <p>Lihat</p>
                                    <i class="fa fa-eye" style="color: #28A745; cursor: pointer;"></i>
                                </div>
                            </td>
                            <td>
                                <div class="status laporan-diterima">Laporan Diterima</div>
                            </td>
                            <td class="text-center">
                                <div class="ellipsis-container" style="justify-content: center">
                                    <button class="ellipsis-button">
                                        <i class="fa fa-ellipsis-h" style="color: black;"></i>
                                    </button>
                                    <div class="modal-ellipsis">
                                        <a style="cursor: pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M7.99992 1.83594C4.32659 1.83594 1.33325 4.82927 1.33325 8.5026C1.33325 12.1759 4.32659 15.1693 7.99992 15.1693C11.6733 15.1693 14.6666 12.1759 14.6666 8.5026C14.6666 4.82927 11.6733 1.83594 7.99992 1.83594ZM11.1866 6.96927L7.40658 10.7493C7.31325 10.8426 7.18658 10.8959 7.05325 10.8959C6.91992 10.8959 6.79325 10.8426 6.69992 10.7493L4.81325 8.8626C4.61992 8.66927 4.61992 8.34927 4.81325 8.15594C5.00658 7.9626 5.32658 7.9626 5.51992 8.15594L7.05325 9.68927L10.4799 6.2626C10.6733 6.06927 10.9933 6.06927 11.1866 6.2626C11.3799 6.45594 11.3799 6.76927 11.1866 6.96927Z"
                                                    fill="black" />
                                            </svg>
                                            <span class="tracking" style="cursor: pointer" data-toggle="modal"
                                                data-target="#approveNote">Approve</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('modal')
    @include('pages.super-admin.report-kerusakan.modal-scan')
    <div class="modal fade approveNote" id="approveNote" tabindex="-1" aria-labelledby="filter" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form class="modal-content" id="formApprove" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-head">
                    <h3>Tambah Balasan</h3>
                    <i class="fa fa-times-circle" data-dismiss="modal"></i>
                </div>

                <div class="modal-body">
                    <p class="text-1">Keterangan</p>
                    <textarea name="reject_reason" required id="note" placeholder="Masukkan Balasan"></textarea>
                </div>

                <div class="modal-footer">
                    <button class="button secondary" id="cancel-approve" type="button">
                        Cancel
                    </button>
                    <button class="button primary" type="submit">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade approveNote" id="replyNote" tabindex="-1" aria-labelledby="filter" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form class="modal-content" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-head">
                    <h3>Lihat Balasan</h3>
                    <i class="fa fa-times-circle" data-dismiss="modal"></i>
                </div>

                <div class="modal-body">
                    <p class="text-1">Keterangan</p>
                    <textarea id="reply-note" readonly placeholder="Masukkan Balasan"></textarea>
                </div>

                <div class="modal-footer">
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade filter" id="filter5" tabindex="-1" aria-labelledby="filter" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form class="modal-content" id="formFilter" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-head">
                    <h3>Filter</h3>
                    <i class="fa fa-times-circle" data-dismiss="modal"></i>
                </div>

                <div class="modal-body">
                    <div class="top-page2">
                        <div class="dropdown-group">
                            <div class="group-box">
                                <div class="row-box">
                                    <div class="select-wrapper-arrow">
                                        <p>Jenis Kerusakan</p>
                                        <select class="form-select" id="type">
                                            <option value="">Pilih</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type }}">{{ $type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row-box">
                                    <div class="select-wrapper-arrow">
                                        <p>Status</p>
                                        <select class="form-select" id="status">
                                            <option value="">Pilih</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status }}">{{ $status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="select-wrapper-arrow">
                                        <p>Zona</p>
                                        <select class="form-select" id="zone">
                                            <option value="">Pilih</option>
                                            @foreach ($zones as $zone)
                                                <option value="{{ $zone }}">{{ $zone }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row-box">
                                    <div style="display: flex; flex-direction: column; width: 100%">
                                        <p>Tanggal Kerusakan</p>
                                        <div class="date">
                                            <input type="date" id="filter_date_start" class="date-style1">
                                            <img class="arrow-date" src='{{ asset('images/icon/arrow-until.svg') }}'>
                                            <input type="date" id="filter_date_end" class="date-style2">
                                            <img class="date-icon" src='{{ asset('images/icon/icon-date.svg') }}'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="button secondary reset-filter" type="button">
                        Hapus Filter
                    </button>
                    <button class="button primary" type="submit">
                        Terapkan
                    </button>
                </div>
            </form>
        </div>
    </div>
    <form action="" method="POST" id="formComplete" class="d-none">
        @csrf
        @method('PUT')
    </form>
@endsection

@push('script')
    <script>
        $(document).on('click', '.ellipsis-button', function(e) {
            e.stopPropagation();
            var $modal = $(this).siblings('.modal-ellipsis');
            $('.modal-ellipsis').not($modal).hide();
            $modal.toggle();
        });

        $(document).on('click', function() {
            $('.modal-ellipsis').hide();
        });

        function applyStatusClasses(tableId) {
            $('#table-master-user tbody tr').each(function() {
                var statusDiv = $(this).find('td').eq(7).find('div');
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
                var statusDiv = $(this).find('td').eq(12).find('div');
                var statusText = statusDiv.text().trim();

                if (statusText === '-') {
                    statusDiv.addClass('status-dash');
                } else if (statusText === 'Outstanding') {
                    statusDiv.addClass('status-outstanding');
                } else if (statusText === 'Partial Outstanding') {
                    statusDiv.addClass('status-partial-outstanding');
                } else if (statusText === 'Balance') {
                    statusDiv.addClass('status-balance');
                }
            });
        }

        $(document).ready(function() {
            $('#table-master-user').DataTable({
                scrollX: true,
                scrollY: 'calc(100vh - 400px)',
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: `{{ route('backend.broken-report.index') }}`,
                    data: function(d) {
                        d.search = $('#searchable').val();
                        d.type = $('#type').val();
                        d.status = $('#status').val();
                        d.zone = $('#zone').val();
                        d.start_date = $('#filter_date_start').val();
                        d.end_date = $('#filter_date_end').val();
                    }
                },
                columns: [{
                        data: 'id',
                        visible: false
                    }, {
                        data: 'broken_date',
                    },
                    {
                        data: 'type',
                    },
                    {
                        data: 'brokenable.code',
                    },
                    {
                        data: 'brokenable.name',
                    },
                    {
                        data: 'brokenable.zone',
                    },
                    {
                        data: 'time',
                    },
                    {
                        data: 'note',
                    },
                    {
                        data: 'image_urls',
                        render: function(data, type, row) {
                            return `
                                <div class="image-container">
                                    <p>Lihat</p>
                                    <i class="fa fa-eye" style="color: #28A745; cursor: pointer;" data-images='${JSON.stringify(data)}'></i>
                                </div>
                            `;
                        }
                    },
                    {
                        data: 'status',
                    },
                    {
                        data: 'action',
                    },
                ],
                order: [
                    [0, 'desc']
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
            });
            $('#table-master-user').DataTable().on('draw.dt', function() {
                $(this).DataTable().columns.adjust();
            });

            $(document).on('keyup', '#searchable', function(e) {
                e.preventDefault();
                $('#table-master-user').DataTable().draw();
            })

        });

        function setHrefPdf() {
            $('#download-pdf').attr('href',
                `{{ route('backend.broken-report.download-pdf') }}?start_date=${$('#filter_date_start').val()}&end_date=${$('#filter_date_end').val()}`
            );
        }

        function setHrefExcel() {
            $('#download-excel').attr('href',
                `{{ route('backend.broken-report.download-excel') }}?start_date=${$('#filter_date_start').val()}&end_date=${$('#filter_date_end').val()}`
            );
        }

        setHrefExcel();
        setHrefPdf();

        $(document).on('click', '.approve-button', function() {
            $('#formApprove').attr('action', $(this).data('route'));
            $('#approveNote').modal('show');
        })

        $(document).on('click', '.complete-button', function() {
            let route = $(this).data('route');
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Laporan kerusakan berikut akan diselesaikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Lanjutkan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formComplete').attr('action', route);
                    $('#formComplete').submit();
                }
            })
        })

        $(document).on('click', '.reply-button', function() {
            $('#reply-note').val($(this).data('reply'));
            $('#replyNote').modal('show');
        })

        $(document).on('submit', '#formFilter', function(e) {
            e.preventDefault();
            $('#filter5').modal('hide');
            $('#table-master-user').DataTable().draw();
            setHrefExcel();
            setHrefPdf();
        });

        $(document).on('click', '#cancel-approve', function(e) {
            e.preventDefault();
            $('#approveNote').modal('hide');
        })

        $(document).on('click', '.reset-filter', function() {
            $('#formFilter').trigger('reset');
            $('#filter5').modal('hide');
            $('#table-master-user').DataTable().draw();
        });

        document.addEventListener('DOMContentLoaded', () => {
            const popupUbah = document.getElementById('popUpUbah');
            const closeIcon = document.getElementById('closeIcon');
            const cancelButton = document.getElementById('cancelButton');

            const popupHapus = document.getElementById('popUpHapus');
            const cancelButton2 = document.getElementById('cancelButton2');
            const hapusButtons = document.querySelectorAll('.hapus');

            const popupImg = document.getElementById('popUpImg');
            const closeButton = document.querySelector('.pop-up-img .fa-times-circle');
            const selectedImage = document.getElementById('selectedImage');
            const thumbnails = document.querySelectorAll('.thumbnail');

            function togglePopup(popup) {
                popup.style.display = popup.style.display === 'none' || !popup.style.display ? 'flex' : 'none';
            }

            function setDefaultImage() {
                if (thumbnails.length > 0) {
                    selectedImage.src = thumbnails[0].src;
                    thumbnails[0].classList.add('active'); // Set the first thumbnail as active
                }
            }

            closeIcon.addEventListener('click', () => togglePopup(popupUbah));
            cancelButton.addEventListener('click', () => togglePopup(popupUbah));
            popupUbah.addEventListener('click', (e) => {
                if (e.target === popupUbah) {
                    togglePopup(popupUbah);
                }
            });

            cancelButton2.addEventListener('click', () => togglePopup(popupHapus));
            popupHapus.addEventListener('click', (e) => {
                if (e.target === popupHapus) {
                    togglePopup(popupHapus);
                }
            });
            hapusButtons.forEach(button => {
                button.addEventListener('click', () => {
                    togglePopup(popupHapus);
                });
            });

            closeButton.addEventListener('click', () => togglePopup(popupImg));
            popupImg.addEventListener('click', (e) => {
                if (e.target === popupImg) {
                    togglePopup(popupImg);
                }
            });

            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', () => {
                    // Remove 'active' class from all thumbnails
                    thumbnails.forEach(thumb => thumb.classList.remove('active'));
                    // Add 'active' class to the clicked thumbnail
                    thumbnail.classList.add('active');
                    // Update selected image source
                    selectedImage.src = thumbnail.src;
                });
            });
        });

        let images = [];
        $(document).on('click', '.fa-eye', function() {
            images = JSON.parse(JSON.parse($(this).data('images')));

            document.getElementById('selectedImage').src = images[0];

            document.getElementById('popUpImg').style.display = 'flex';
        });

        $(document).on('click', '.arrow-custom', function() {
            const selectedImage = document.getElementById('selectedImage');
            const currentImage = selectedImage.src;

            const currentIndex = images.indexOf(currentImage);

            if ($(this).attr('id') === 'to-left') {
                if (currentIndex === 0) {
                    selectedImage.src = images[images.length - 1];
                } else {
                    selectedImage.src = images[currentIndex - 1];
                }
            } else {
                if (currentIndex === images.length - 1) {
                    selectedImage.src = images[0];
                } else {
                    selectedImage.src = images[currentIndex + 1];
                }
            }
        });

        $(document).on('click', '.thumbnail', function() {
            const selectedImage = document.getElementById('selectedImage');
            selectedImage.src = this.src;
        });

        $('.close-image-button').click(function() {
            $('#popUpImg').hide();
        });

        $(document).on('click', '.ubahStatus', function() {
            const route = $(this).data('route');
            $('#popUpUbah').attr('action', route);
            $('#popUpUbah').show();
        });
    </script>
@endpush
