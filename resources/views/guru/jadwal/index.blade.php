@extends('layouts/guru')

@section('title', 'Guru CariGuru.com - Jadwal Guru')

@section ('container')


<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Guru</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">JadwalGuru</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Jadwal Guru</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id_jadwal">ID Jadwal</th>
                                        <th data-field="id_guru">ID Guru</th>
                                        <th data-field="nama" data-editable="true">Nama Guru</th>
                                        <th data-field="senin" data-editable="true">Senin</th>
                                        <th data-field="selasa" data-editable="true">Selasa</th>
                                        <th data-field="rabu">rabu</th>
                                        <th data-field="kamis" data-editable="true">Kamis</th>
                                        <th data-field="jumat" data-editable="true">Jumat</th>
                                        <th data-field="sabtu" data-editable="true">Sabtu</th>
                                        <th data-field="minggu" data-editable="true">Minggu</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>G001</td>
                                        <td>Bambang</td>
                                        <td>-</td>
                                        <td>-
                                        </td>
                                        <td>iin</td>
                                        <td>iin</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>Libur</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection