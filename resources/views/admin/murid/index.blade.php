@extends('layouts/admin')

@section('title', 'AdminCariGuru.com - Data Murid')

@section ('container')


<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
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
                                <li><a href="#">Admin</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Data Murid</span>
                                </li>
                            </ul>
                        </div>
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
                            <h1>Data Murid</h1>
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
                                        <th data-field="id_murid">ID</th>
                                        <th data-field="nama" data-editable="true">Nama</th>
                                        <th data-field="password" data-editable="true">Password</th>
                                        <th data-field="ttl">Tampat/Tanggal/Lahir</th>
                                        <th data-field="email" data-editable="true">email</th>
                                        <th data-field="pendidikan" data-editable="true">Pendidikan</th>
                                        <th data-field="kelas" data-editable="true">Kelas</th>
                                        <th data-field="alamat" data-editable="true">Alamat</th>
                                        <th data-field="foto" data-editable="true">Foto</th>
                                        <th data-field="kontak" data-editable="true">Kontak</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>iin</td>
                                        <td>iinbaelah</td>
                                        <td>Indramayu, 29 November 2010</td>
                                        <td>iinasnawiyah@gmail.com</td>
                                        <td>SD</td>
                                        <td>5</td>
                                        <td>Indramayu</td>
                                        <td>imgage</td>
                                        <td>089765456764</td>
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