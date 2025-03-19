@extends('layout.app')

@section('content')
    <div class="dashboard">
        <div class="top-page">
            <p>Hello <span>Superadmin texkleen,</span> This is Superadmin dashboard</p>
            <div class="right-side">
                <div class="select-wrapper-arrow" style="margin-top:5px">
                    <select name="" id="">
                        <option value="" selected disabled>- Pilih Pabrik -</option>
                    </select>
                </div>

                <div class="date">
                    <input type="date" class="date-style1">
                    <img class="arrow-date" src='{{ asset('images/icon/arrow-until.svg') }}'>
                    <input type="date" class="date-style2">
                    <img class="date-icon" src='{{ asset('images/icon/icon-date.svg') }}'>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="top">
                <img src='{{ asset('images/icon/chart.svg') }}'>
                <p>On Process</p>
            </div>
            <div class="card-box">
                <div class="card">
                    <a class="group-text" href="{{ route('super-admin.dashboard.washing') }}">
                        <div class="text">
                            <p class="text-1">Washing</p>
                            <p class="text-2">50</p>
                            <p class="text-3">Total CF proses Washing</p>
                        </div>
                        <div>
                            <img src='{{ asset('images/icon/card-arrow.svg') }}'>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a class="group-text" href="{{ route('super-admin.dashboard.drying') }}">
                        <div class="text">
                            <p class="text-1">Drying</p>
                            <p class="text-2">50</p>
                            <p class="text-3">Total CF proses Drying</p>
                        </div>
                        <div>
                            <img src='{{ asset('images/icon/card-arrow.svg') }}'>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a class="group-text" href="{{ route('super-admin.dashboard.ironing') }}">
                        <div class="text">
                            <p class="text-1">Ironing</p>
                            <p class="text-2">50</p>
                            <p class="text-3">Total CF proses Ironing</p>
                        </div>
                        <div>
                            <img src='{{ asset('images/icon/card-arrow.svg') }}'>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a class="group-text" href="{{ route('super-admin.dashboard.folding') }}">
                        <div class="text">
                            <p class="text-1">Folding</p>
                            <p class="text-2">50</p>
                            <p class="text-3">Total CF proses Folding</p>
                        </div>
                        <div>
                            <img src='{{ asset('images/icon/card-arrow.svg') }}'>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card-box">
                <div class="card">
                    <a class="group-text" href="{{ route('super-admin.dashboard.checking') }}">
                        <div class="text">
                            <p class="text-1">Checking</p>
                            <p class="text-2">50</p>
                            <p class="text-3">Total CF proses Checking</p>
                        </div>
                        <div>
                            <img src='{{ asset('images/icon/card-arrow.svg') }}'>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a class="group-text" href="{{ route('super-admin.dashboard.spotting') }}">
                        <div class="text">
                            <p class="text-1">Spotting</p>
                            <p class="text-2">50</p>
                            <p class="text-3">Total CF proses Spotting</p>
                        </div>
                        <div>
                            <img src='{{ asset('images/icon/card-arrow.svg') }}'>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a class="group-text" href="{{ route('super-admin.dashboard.balancing') }}">
                        <div class="text">
                            <p class="text-1">Balancing</p>
                            <p class="text-2">50</p>
                            <p class="text-3">Total CF proses Balancing</p>
                        </div>
                        <div>
                            <img src='{{ asset('images/icon/card-arrow.svg') }}'>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a class="group-text" href="{{ route('super-admin.dashboard.delivery') }}">
                        <div class="text">
                            <p class="text-1">Delivery</p>
                            <p class="text-2">50</p>
                            <p class="text-3">Total CF proses Delivery</p>
                        </div>
                        <div>
                            <img src='{{ asset('images/icon/card-arrow.svg') }}'>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="box2">
            <div class="top1">
                <div class="left-item">
                    <img src='{{ asset('images/icon/receipt-item.svg') }}'>
                    <p>Ongoing</p>
                </div>
                <div class="right-item" id="switch-master-ongoing">
                    <p class="item active" onclick="switchTab('switch1')">Collection Form</p>
                    <p class="item" onclick="switchTab('switch2')">Inventory</p>
                    <p class="item" onclick="switchTab('switch3')">Delivery</p>
                </div>
            </div>

            <div id="switch1">
                <div class="top2">
                    <div class="items" id="switch-ongoing1">
                        <p class="item active">Waiting List CF</p>
                        <p class="item">Draft CF</p>
                        <p class="item">Rewash</p>
                        <p class="item">Ready DF</p>
                    </div>
                </div>
                <div class="containers">
                    <div class="select-wrapper-arrow">
                        <select name="" id="">
                            <option value="" selected disabled>All</option>
                        </select>
                    </div>
                </div>
                <div class="table-box">
                    <table id="table-master-user">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>CF</th>
                                <th>CF Date</th>
                                <th>Estimasi Selesai</th>
                                <th>Customer</th>
                                <th>Pabrik</th>
                                <th>Jenis Pesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>CF001</td>
                                <td>09/05/2024, 13:00</td>
                                <td>09/05/2024, 17:00</td>
                                <td>The Melia Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Regular</div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CF002</td>
                                <td>09/05/2024, 13:00</td>
                                <td>09/05/2024, 17:00</td>
                                <td>The Westin Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Regular</div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CF003</td>
                                <td>09/05/2024, 13:00</td>
                                <td>09/05/2024, 17:00</td>
                                <td>The Westin Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Express</div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>CF004</td>
                                <td>09/05/2024, 13:00</td>
                                <td>09/05/2024, 17:00</td>
                                <td>The Westin Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Regular</div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>CF005</td>
                                <td>09/05/2024, 13:00</td>
                                <td>09/05/2024, 17:00</td>
                                <td>The Westin Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Express</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="switch2">
                <div class="top2">
                    <div class="items" id="switch-ongoing2">
                        <p class="item active">Excess</p>
                        <p class="item">Missing</p>
                    </div>
                </div>
                <div class="containers">
                    <div class="select-wrapper-arrow">
                        <select name="" id="">
                            <option value="" selected disabled>All</option>
                        </select>
                    </div>
                </div>
                <div class="table-box">
                    <table id="table-master-user2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>CF</th>
                                <th>Customer</th>
                                <th>Inventory</th>
                                <th>Pabrik</th>
                                <th>Excess</th>
                                <th>Troli Asal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>CF001</td>
                                <td>The Westin Nusa Dua</td>
                                <td>09/05/2024, 17:00</td>
                                <td>Pabrik Goa Long</td>
                                <td>10</td>
                                <td>Troli1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CF002</td>
                                <td>The Melia Nusa Dua</td>
                                <td>09/05/2024, 17:00</td>
                                <td>Pabrik Goa Long</td>
                                <td>20</td>
                                <td>Troli1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CF003</td>
                                <td>The Westin Nusa Dua</td>
                                <td>09/05/2024, 17:00</td>
                                <td>Pabrik Goa Long</td>
                                <td>5</td>
                                <td>Troli1</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>CF004</td>
                                <td>The Sofitel Nusa Dua</td>
                                <td>09/05/2024, 17:00</td>
                                <td>Pabrik Goa Long</td>
                                <td>10</td>
                                <td>Troli1</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>CF005</td>
                                <td>The Sofitel Nusa Dua</td>
                                <td>09/05/2024, 17:00</td>
                                <td>Pabrik Goa Long</td>
                                <td>15</td>
                                <td>Troli1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="switch3">
                <div class="top2">
                    <div class="items" id="switch-ongoing3">
                        <p class="item active">Truk Keluar</p>
                        <p class="item">Truk Masuk</p>
                    </div>
                </div>
                <div class="containers">
                    <div class="select-wrapper-arrow">
                        <select name="" id="">
                            <option value="" selected disabled>All</option>
                        </select>
                    </div>
                </div>
                <div class="table-box">
                    <table id="table-master-user3">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>DF</th>
                                <th>CF</th>
                                <th>Customer</th>
                                <th>Pabrik</th>
                                <th>Truck Keluar</th>
                                <th>Plat Nomor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>DF001-A</td>
                                <td>CF001</td>
                                <td>The Melia Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>09/05/2024, 17:00</td>
                                <td>DK 9271 LSX</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DF002-A</td>
                                <td>CF002</td>
                                <td>The Westin Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>09/05/2024, 17:00</td>
                                <td>DK 9271 LSX</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>DF003-A</td>
                                <td>CF003</td>
                                <td>The Westin Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>09/05/2024, 17:00</td>
                                <td>DK 9271 LSX</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>DF004-A</td>
                                <td>CF004</td>
                                <td>The Sofitel Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>09/05/2024, 17:00</td>
                                <td>DK 9271 LSX</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>DF005-A</td>
                                <td>CF005</td>
                                <td>The Sofitel Nusa Dua</td>
                                <td>Pabrik Goa Long</td>
                                <td>09/05/2024, 17:00</td>
                                <td>DK 9271 LSX</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="box3">
            <div class="top1">
                <div class="left-item">
                    <img src='{{ asset('images/icon/receipt-item.svg') }}'>
                    <p>Truck Delay in Delivery </p>
                </div>
            </div>
            <div class="top2">
                <div class="items" id="switch-truck">
                    <p class="item active" onclick="switchTruckTable('keluar')">Keluar</p>
                    <p class="item" onclick="switchTruckTable('masuk')">Masuk</p>
                </div>
            </div>
            <div class="containers">
                <div class="select-wrapper-arrow">
                    <select name="" id="">
                        <option value="" selected disabled>Status</option>
                    </select>
                </div>
            </div>
            <div class="table-box">
                <div id="keluar-table">
                    <table id="table-master-user4">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Plat Truk</th>
                                <th>Merk Truk</th>
                                <th>Tanggal Delivery</th>
                                <th>Keluar Truk</th>
                                <th>Status</th>
                                <th>Pabrik</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>DK 8293 OS</td>
                                <td>Suzuki</td>
                                <td>09/05/2024, 17:00</td>
                                <td>09/05/2024, 19:00</td>
                                <td>
                                    <div>Overdue</div>
                                </td>
                                <td>Pabrik Goa Long</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DK 8293 OS</td>
                                <td>Mitsubishi</td>
                                <td>09/05/2024, 17:00</td>
                                <td>09/05/2024, 19:00</td>
                                <td>
                                    <div>Ontime</div>
                                </td>
                                <td>Pabrik Goa Long</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>DK 8293 OS</td>
                                <td>Suzuki</td>
                                <td>09/05/2024, 17:00</td>
                                <td>09/05/2024, 19:00</td>
                                <td>
                                    <div>Overdue</div>
                                </td>
                                <td>Pabrik Goa Long</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>DK 8293 OS</td>
                                <td>Suzuki</td>
                                <td>09/05/2024, 17:00</td>
                                <td>09/05/2024, 19:00</td>
                                <td>
                                    <div>Earlier</div>
                                </td>
                                <td>Pabrik Goa Long</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>DK 8293 OS</td>
                                <td>Suzuki</td>
                                <td>09/05/2024, 17:00</td>
                                <td>09/05/2024, 19:00</td>
                                <td>
                                    <div>Earlier</div>
                                </td>
                                <td>Pabrik Goa Long</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="masuk-table" style="display: none">
                    <table id="table-master-user6">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Plat Truk</th>
                                <th>Tanggal Pickup</th>
                                <th>Customer</th>
                                <th>Masuk Truk</th>
                                <th>Pabrik</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>DK 8293 OS</td>
                                <td>09/05/2024, 19:00</td>
                                <td>The Melia Nusa Dua</td>
                                <td>-</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Ongoing</div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DK 8293 OS</td>
                                <td>09/05/2024, 19:00</td>
                                <td>The Westin Nusa Dua</td>
                                <td>-</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Ongoing</div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>DK 8293 OS</td>
                                <td>09/05/2024, 19:00</td>
                                <td>The Westin Nusa Dua</td>
                                <td>-</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Ongoing</div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>DK 8293 OS</td>
                                <td>09/05/2024, 19:00</td>
                                <td>The Sofitel Nusa Dua</td>
                                <td>09/05/2024, 17:00</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Done</div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>DK 8293 OS</td>
                                <td>09/05/2024, 19:00</td>
                                <td>The Sofitel Nusa Dua</td>
                                <td>09/05/2024, 17:00</td>
                                <td>Pabrik Goa Long</td>
                                <td>
                                    <div>Done</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="box4">
            <div class="top1">
                <div class="left-item">
                    <img src='{{ asset('images/icon/receipt-item.svg') }}'>
                    <p>Daftar Operasional Mesin</p>
                </div>
                <input type="date" />
            </div>
            <div class="table-box2">
                <table id="table-master-user5">
                    <thead>
                        <tr>
                            <th>Kode Mesin</th>
                            <th>Nama Mesin</th>
                            <th>Date</th>
                            <th>Mesin On</th>
                            <th>Mesin Off</th>
                            <th>Durasi Mesin</th>
                            <th>Durasi Mesin Bekerja</th>
                            <th>Durasi Mesin Off</th>
                            <th>Pabrik</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>WSH1</td>
                            <td>Washing Rotary 1</td>
                            <td>09/05/2024</td>
                            <td>17:00</td>
                            <td>17:00</td>
                            <td>45 Min</td>
                            <td>24 Jam</td>
                            <td>3 Jam</td>
                            <td>Pabrik Goa Long</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>DRY1</td>
                            <td>Dryer Rotary 1</td>
                            <td>09/05/2024</td>
                            <td>11:00</td>
                            <td>11:00</td>
                            <td>45 Min</td>
                            <td>24 Jam</td>
                            <td>4 Jam</td>
                            <td>Pabrik Goa Long</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>IRN1</td>
                            <td>Ironing 1</td>
                            <td>09/05/2024</td>
                            <td>15:00</td>
                            <td>15:00</td>
                            <td>45 Min</td>
                            <td>24 Jam</td>
                            <td>1 Jam</td>
                            <td>Pabrik Goa Long</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>WSH2</td>
                            <td>Tunnel 1</td>
                            <td>09/05/2024</td>
                            <td>07:00</td>
                            <td>07:00</td>
                            <td>45 Min</td>
                            <td>24 Jam</td>
                            <td>5 Jam</td>
                            <td>Pabrik Goa Long</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>FLD1</td>
                            <td>Folding 1</td>
                            <td>09/05/2024</td>
                            <td>12:00</td>
                            <td>12:00</td>
                            <td>45 Min</td>
                            <td>24 Jam</td>
                            <td>10 Jam</td>
                            <td>Pabrik Goa Long</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bottom-section">
            <div class="top">
                <div class="left-title">
                    <img src='{{ asset('images/icon/chart.svg') }}'>
                    <p>Statistic</p>
                </div>
                <div class="select-wrapper-arrow">
                    <select name="" id="">
                        <option value="" selected disabled>Juni, 2024</option>
                    </select>
                </div>
            </div>
            <div class="upper">
                <div class="part1">
                    <div class="top2">
                        <p class="text-1">Stock Keeping Unit</p>
                        <p class="text-2">Based On Missing & Excess SKU</p>
                    </div>
                    <div class="content-chart">
                        <div style="width: 50%">
                            <canvas id="SKU"></canvas>
                        </div>
                        <div class="group-text">
                            <div class="chart-text">
                                <p class="text-number">1</p>
                                <p class="text-title">The Westin Nusa Dua</p>
                            </div>
                            <div class="chart-text">
                                <p class="text-number">2</p>
                                <p class="text-title">Sofitel Nusa Dua</p>
                            </div>
                            <div class="chart-text">
                                <p class="text-number">3</p>
                                <p class="text-title">The Melia Nusa Dua</p>
                            </div>
                            <div class="chart-text2">
                                <p class="text-number">4</p>
                                <p class="text-title">The Nusa Dua</p>
                            </div>
                            <div class="chart-text2">
                                <p class="text-number">5</p>
                                <p class="text-title">Fatma Hotel</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="part2">
                    <div class="top2">
                        <i class="fas fa-trophy"></i>
                        <p class="tetx-1">5 Top Rewash</p>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">1</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping">
                            <div class="group-text">
                                <p class="text-1">Face Towel</p>
                                <p class="text-2">The Westin Nusa Dua</p>
                            </div>
                            <p class="text-3">215</p>
                        </div>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">2</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping2">
                            <div class="group-text">
                                <p class="text-1">Serbet</p>
                                <p class="text-2">Sofitel Nusa Dua</p>
                            </div>
                            <p class="text-3">173</p>
                        </div>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">3</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping2">
                            <div class="group-text">
                                <p class="text-1">Serbet</p>
                                <p class="text-2">Sofitel Nusa Dua</p>
                            </div>
                            <p class="text-3">173</p>
                        </div>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">4</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping2">
                            <div class="group-text">
                                <p class="text-1">Serbet</p>
                                <p class="text-2">Sofitel Nusa Dua</p>
                            </div>
                            <p class="text-3">173</p>
                        </div>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">5</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping2">
                            <div class="group-text">
                                <p class="text-1">Serbet</p>
                                <p class="text-2">Sofitel Nusa Dua</p>
                            </div>
                            <p class="text-3">173</p>
                        </div>
                    </div>
                </div>
                <div class="part3">
                    <div class="top2">
                        <i class="fas fa-trophy"></i>
                        <p class="tetx-1">5 Top Trip</p>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">1</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping">
                            <div class="group-text">
                                <p class="text-1">DK 9271 LSX</p>
                                <p class="text-2">10 DF From The Westin Nusa Dua</p>
                            </div>
                        </div>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">2</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping">
                            <div class="group-text">
                                <p class="text-1">DK 9271 LSX</p>
                                <p class="text-2">10 DF From The Westin Nusa Dua</p>
                            </div>
                        </div>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">3</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping">
                            <div class="group-text">
                                <p class="text-1">DK 9271 LSX</p>
                                <p class="text-2">10 DF From The Westin Nusa Dua</p>
                            </div>
                        </div>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">4</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping">
                            <div class="group-text">
                                <p class="text-1">DK 9271 LSX</p>
                                <p class="text-2">10 DF From The Westin Nusa Dua</p>
                            </div>
                        </div>
                    </div>
                    <div class="rank-text">
                        <div class="text-2">
                            <p style="color: #4F5150; font-size:18px">5</p>
                            <img src='{{ asset('images/icon/symbol.svg') }}'>
                        </div>
                        <div class="grouping">
                            <div class="group-text">
                                <p class="text-1">DK 9271 LSX</p>
                                <p class="text-2">10 DF From The Westin Nusa Dua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle">
                <div class="part1">
                    <div class="top-title">
                        <img src='{{ asset('images/icon/document.svg') }}'></i>
                        <div class="text-group">
                            <p class="text-1">Total Collection Form</p>
                            <p class="text-2">300</p>
                        </div>
                    </div>
                    <div class="inside-content">
                        <p>Current update on this month</p>
                    </div>
                </div>
                <div class="part2">
                    <div class="top-title">
                        <img src='{{ asset('images/icon/document.svg') }}'></i>
                        <div class="text-group">
                            <p class="text-1">Total Delivery Form</p>
                            <p class="text-2">300</p>
                        </div>
                    </div>
                    <div class="inside-content">
                        <p>Current update on this month</p>
                    </div>
                </div>
                <div class="part3">
                    <div class="top-title">
                        <img src='{{ asset('images/icon/document.svg') }}'></i>
                        <div class="text-group">
                            <p class="text-1">Total Rewash</p>
                            <p class="text-2">300</p>
                        </div>
                    </div>
                    <div class="inside-content">
                        <p>Current update on this month</p>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="part1">
                    <div class="top-title">
                        <img src='{{ asset('images/icon/document.svg') }}'></i>
                        <div class="text-group">
                            <p class="text-1">Total Customer</p>
                            <p class="text-2">300</p>
                        </div>
                    </div>
                    <div class="inside-content">
                        <p>Current update on this month</p>
                    </div>
                </div>
                <div class="part2">
                    <div class="top-title">
                        <img src='{{ asset('images/icon/document.svg') }}'></i>
                        <div class="text-group">
                            <p class="text-1">Total Karyawan</p>
                            <p class="text-2">30</p>
                        </div>
                    </div>
                    <div class="inside-content">
                        <p>Current update on this month</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="chart-section">
            <p class="text-1">Volume Customer</p>
            <p class="text-2">Based On Missing & Excess SKU</p>
            <canvas id="volumeBar"></canvas>
        </div>

        <div class="lower-section">
            <div class="top">
                <div class="left-title">
                    <img src='{{ asset('images/icon/chart.svg') }}'>
                    <p>Daftar Kerusakan Mesin</p>
                </div>
            </div>

            <div class="bottom">
                <div style="display:flex; gap:10px; width:100%">
                    <div class="part1">
                        <a class="top-title" href="{{ route('super-admin.dashboard.mesin-rusak') }}">
                            <div class="text-group">
                                <p class="text-1">Mesin Rusak</p>
                                <p class="text-2">3/100</p>
                                <p class="text-3">Total keseluruhan mesin rusak</p>
                            </div>
                            <img src='{{ asset('images/icon/arrow-dashboard-orange.svg') }}'>
                        </a>
                    </div>
                    <div class="part1">
                        <a class="top-title" href="{{ route('super-admin.dashboard.spotting-rusak') }}">
                            <div class="text-group">
                                <p class="text-1">Spotting Rusak</p>
                                <p class="text-2">3/100</p>
                                <p class="text-3">Total keseluruhan mesin rusak</p>
                            </div>
                            <img src='{{ asset('images/icon/arrow-dashboard-blue.svg') }}'>
                        </a>
                    </div>
                </div>
                <div style="display:flex; gap:10px; width:100%">
                    <div class="part1">
                        <a class="top-title" href="{{ route('super-admin.dashboard.trolley-rusak') }}">
                            <div class="text-group">
                                <p class="text-1">Trolley Rusak</p>
                                <p class="text-2">3/100</p>
                                <p class="text-3">Total keseluruhan mesin rusak</p>
                            </div>
                            <img src='{{ asset('images/icon/arrow-dashboard-blue.svg') }}'>
                        </a>
                    </div>
                    <div class="part1">
                        <a class="top-title" href="{{ route('super-admin.dashboard.truck-rusak') }}">
                            <div class="text-group">
                                <p class="text-1">Truck Rusak</p>
                                <p class="text-2">3/100</p>
                                <p class="text-3">Total keseluruhan mesin rusak</p>
                            </div>
                            <img src='{{ asset('images/icon/arrow-dashboard-orange.svg') }}'>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var ctx = document.getElementById('SKU').getContext('2d');
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Missing SKU', 'Excess SKU'],
                datasets: [{
                    data: [70, 30],
                    backgroundColor: ['#354EBC', '#FFE700'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 10,
                            boxHeight: 10,
                            padding: 10,
                        }
                    }
                },
                cutout: '70%',
            },
            plugins: [{
                id: 'centerText',
                beforeDraw: function(chart) {
                    var width = chart.width,
                        height = chart.height,
                        ctx = chart.ctx;
                    ctx.restore();
                    var fontSize = (height / 200).toFixed(2);
                    ctx.font = fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";
                    ctx.fillStyle = '#505D6F';
                    ctx.textBaseline = "middle";
                    var text1 = "SKU",
                        textX = Math.round((width - ctx.measureText(text1).width) / 2),
                        textY = height / 2.5;

                    ctx.fillText(text1, textX, textY);

                    var text2 = "Statistics";
                    ctx.font = (fontSize * 0.8) + "em sans-serif";
                    ctx.fillStyle = '#9AA1A9';
                    var textX2 = Math.round((width - ctx.measureText(text2).width) / 2),
                        textY2 = height / 2;

                    ctx.fillText(text2, textX2, textY2);
                    ctx.save();
                },
                afterDraw: function(chart) {
                    var ctx = chart.ctx;
                    var dataset = chart.data.datasets[0];
                    var total = dataset.data.reduce((acc, val) => acc + val, 0);

                    chart.data.datasets[0].data.forEach((value, index) => {
                        var percentage = Math.round(value / total * 100) + '%';
                        var model = chart.getDatasetMeta(0).data[index].tooltipPosition();

                        ctx.fillStyle = '#fff'; // Set color for percentage text
                        ctx.font = '10px sans-serif'; // Set font
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'mi  ddle';

                        // Draw the percentage text in the center of each arc
                        ctx.fillText(percentage, model.x, model.y);
                    });
                }
            }]
        });

        var ctx = document.getElementById('volumeBar').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    barPercentage: 0.5,
                    barThickness: 20,
                    data: [50, 25, 35, 70, 60, 48, 42, 85, 70, 43, 55, 35],
                    backgroundColor: ['#D0D6FA'],
                    hoverBackgroundColor: ['#354EBC'],
                    borderRadius: 5,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            title: function() {
                                return '';
                            },
                            label: function(context) {
                                var value = context.raw;
                                return `The Westin Nusa Dua, ${value} Kg`;
                            }
                        },
                        displayColors: false,
                        backgroundColor: '#354EBC',
                        titleColor: 'white',
                        bodyColor: '#fff',
                        borderRadius: 5,
                        xPadding: 10,
                        yPadding: 10,
                        position: 'average',
                        yAlign: 'bottom',
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#354EBC',
                        }
                    },
                    y: {
                        grid: {
                            display: true
                        },
                    }
                }
            }
        });

        function switchTruckTable(type) {
            const keluarTable = document.getElementById('keluar-table');
            const masukTable = document.getElementById('masuk-table');
            const items = document.querySelectorAll('#switch-truck .item');

            if (type === 'keluar') {
                keluarTable.style.display = 'block';
                masukTable.style.display = 'none';
            } else if (type === 'masuk') {
                keluarTable.style.display = 'none';
                masukTable.style.display = 'block';
            }

            items.forEach(item => {
                if (item.textContent.toLowerCase() === type) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });

            if (type === 'keluar') {
                $('#table-master-user4').DataTable().columns.adjust().draw();
            } else if (type === 'masuk') {
                $('#table-master-user6').DataTable().columns.adjust().draw();
            }
        }

        function switchTab(tabId) {
            document.getElementById('switch1').style.display = 'none';
            document.getElementById('switch2').style.display = 'none';
            document.getElementById('switch3').style.display = 'none';

            const tabs = document.querySelectorAll('#switch-master-ongoing .item');
            tabs.forEach(tab => tab.classList.remove('active'));

            document.getElementById(tabId).style.display = 'block';

            if (tabId === 'switch1') {
                $('#table-master-user').DataTable().columns.adjust().draw();
            } else if (tabId === 'switch2') {
                $('#table-master-user2').DataTable().columns.adjust().draw();
            } else if (tabId === 'switch3') {
                $('#table-master-user3').DataTable().columns.adjust().draw();
            }

            const clickedTab = [...tabs].find(tab => tab.innerText.toLowerCase() === tabId.replace('switch', '')
                .toLowerCase());
            if (clickedTab) {
                clickedTab.classList.add('active');
            }
        }

        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('card-active');
            });

            card.addEventListener('mouseleave', () => {
                card.classList.remove('card-active');
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('#switch-master-ongoing .item');

            items.forEach(item => {
                item.addEventListener('click', () => {
                    items.forEach(i => i.classList.remove('active'));

                    item.classList.add('active');
                });
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('#switch-ongoing1 .item');

            items.forEach(item => {
                item.addEventListener('click', () => {
                    items.forEach(i => i.classList.remove('active'));

                    item.classList.add('active');
                });
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('#switch-ongoing2 .item');

            items.forEach(item => {
                item.addEventListener('click', () => {
                    items.forEach(i => i.classList.remove('active'));

                    item.classList.add('active');
                });
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('#switch-ongoing3 .item');

            items.forEach(item => {
                item.addEventListener('click', () => {
                    items.forEach(i => i.classList.remove('active'));

                    item.classList.add('active');
                });
            });
        });

        function applyStatusClasses(tableId) {
            $(tableId + ' tbody tr').each(function() {
                var statusDiv = $(this).find('td').eq(6).find('div');
                var statusText = statusDiv.text().trim();

                if (statusText === 'Regular') {
                    statusDiv.addClass('status-regular');
                } else if (statusText === 'Express') {
                    statusDiv.addClass('status-express');
                }
            });

            $(tableId + ' tbody tr').each(function() {
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

            $(tableId + ' tbody tr').each(function() {
                var statusDiv = $(this).find('td').eq(6).find('div');
                var statusText = statusDiv.text().trim();

                if (statusText === 'Done') {
                    statusDiv.addClass('status-done');
                } else if (statusText === 'Ongoing') {
                    statusDiv.addClass('status-ongoing');
                }
            });
        }

        $(document).ready(function() {
            $('#table-master-user').DataTable({
                scrollX: true,
                responsive: true,
                columnDefs: [{
                    targets: '_all',
                    defaultContent: '-',
                    sortable: true
                }],
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
                pageLength: 5,
                dom: 'tipl',
                ordering: true,
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

                    applyStatusClasses('#table-master-user');
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
                }
            });

            $('#table-master-user2').DataTable({
                scrollX: true,
                responsive: true,
                columnDefs: [{
                    targets: '_all',
                    defaultContent: '-',
                    sortable: true
                }],
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
                pageLength: 5,
                dom: 'tipl',
                ordering: true,
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

                    applyStatusClasses('#table-master-user2');
                },
                initComplete: function() {
                    $('.dataTables_info').each(function() {
                        var text = $(this).text();
                        $(this).html(text.replace(/(\d+\s+to\s+\d+)/, '<strong>$1</strong>'));
                    });

                    $('#table-master-user2 tbody tr').each(function() {
                        var statusDiv = $(this).find('td').eq(6).find('div');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Regular') {
                            statusDiv.addClass('status-regular');
                        } else if (statusText === 'Express') {
                            statusDiv.addClass('status-express');
                        }
                    });

                    $('#table-master-user2 tbody tr').each(function() {
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

                    $('#table-master-user2 tbody tr').each(function() {
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

            $('#table-master-user3').DataTable({
                scrollX: true,
                responsive: true,
                columnDefs: [{
                    targets: '_all',
                    defaultContent: '-',
                    sortable: true
                }],
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
                pageLength: 5,
                dom: 'tipl',
                ordering: true,
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

                    applyStatusClasses('#table-master-user3');
                },
                initComplete: function() {
                    $('.dataTables_info').each(function() {
                        var text = $(this).text();
                        $(this).html(text.replace(/(\d+\s+to\s+\d+)/, '<strong>$1</strong>'));
                    });

                    $('#table-master-user3 tbody tr').each(function() {
                        var statusDiv = $(this).find('td').eq(6).find('div');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Regular') {
                            statusDiv.addClass('status-regular');
                        } else if (statusText === 'Express') {
                            statusDiv.addClass('status-express');
                        }
                    });

                    $('#table-master-user3 tbody tr').each(function() {
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

                    $('#table-master-user3 tbody tr').each(function() {
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

            $('#table-master-user4').DataTable({
                scrollX: true,
                responsive: true,
                columnDefs: [{
                    targets: '_all',
                    defaultContent: '-',
                    sortable: true
                }],
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
                pageLength: 5,
                dom: 'tipl',
                ordering: true,
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

                    applyStatusClasses('#table-master-user4');
                },
                initComplete: function() {
                    $('.dataTables_info').each(function() {
                        var text = $(this).text();
                        $(this).html(text.replace(/(\d+\s+to\s+\d+)/, '<strong>$1</strong>'));
                    });

                    $('#table-master-user4 tbody tr').each(function() {
                        var statusDiv = $(this).find('td').eq(6).find('div');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Regular') {
                            statusDiv.addClass('status-regular');
                        } else if (statusText === 'Express') {
                            statusDiv.addClass('status-express');
                        }
                    });

                    $('#table-master-user4 tbody tr').each(function() {
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

                    $('#table-master-user4 tbody tr').each(function() {
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

            $('#table-master-user5').DataTable({
                scrollX: true,
                responsive: true,
                columnDefs: [{
                    targets: '_all',
                    defaultContent: '-',
                    sortable: true
                }],
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
                pageLength: 5,
                dom: 'tipl',
                ordering: true,
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

                    applyStatusClasses('#table-master-user5');
                },
                initComplete: function() {
                    $('.dataTables_info').each(function() {
                        var text = $(this).text();
                        $(this).html(text.replace(/(\d+\s+to\s+\d+)/, '<strong>$1</strong>'));
                    });

                    $('#table-master-user5 tbody tr').each(function() {
                        var statusDiv = $(this).find('td').eq(6).find('div');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Regular') {
                            statusDiv.addClass('status-regular');
                        } else if (statusText === 'Express') {
                            statusDiv.addClass('status-express');
                        }
                    });

                    $('#table-master-user5 tbody tr').each(function() {
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

                    $('#table-master-user5 tbody tr').each(function() {
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

            $('#table-master-user6').DataTable({
                scrollX: true,
                responsive: true,
                columnDefs: [{
                    targets: '_all',
                    defaultContent: '-',
                    sortable: true
                }],
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
                pageLength: 5,
                dom: 'tipl',
                ordering: true,
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

                    applyStatusClasses('#table-master-user6');
                },
                initComplete: function() {
                    $('.dataTables_info').each(function() {
                        var text = $(this).text();
                        $(this).html(text.replace(/(\d+\s+to\s+\d+)/, '<strong>$1</strong>'));
                    });

                    $('#table-master-user6 tbody tr').each(function() {
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

                    $('#table-master-user6 tbody tr').each(function() {
                        var statusDiv = $(this).find('td').eq(6).find('div');
                        var statusText = statusDiv.text().trim();

                        if (statusText === 'Done') {
                            statusDiv.addClass('status-done');
                        } else if (statusText === 'Ongoing') {
                            statusDiv.addClass('status-ongoing');
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
