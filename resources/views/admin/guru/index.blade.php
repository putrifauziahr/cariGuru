@extends('layouts/admin')

@section('title', 'AdminCariGuru.com - Data Guru')

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
                                <li><span class="bread-blod">Data Guru</span>
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
                            <h1>Data Guru</h1>
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
                                        <th data-field="id_guru">ID</th>
                                        <th data-field="password" data-editable="true">Password </th>
                                        <th data-field="nama" data-editable="true">Nama </th>
                                        <th data-field="TTL" data-editable="true">Tempat/Tanggal/Lahir</th>
                                        <th data-field="alamat" data-editable="true">Alamat</th>
                                        <th data-field="email">Email</th>
                                        <th data-field="pendidikan" data-editable="true">Pendidikan</th>
                                        <th data-field="bidang_keahlian" data-editable="true">Bidang Keahlian</th>
                                        <th data-field="sertifikasi_keahlian" data-editable="true">Sertifikasi Keahlian </th>
                                        <th data-field="kontak" data-editable="true">Kontak</th>
                                        <th data-field="foto" data-editable="true">Foto</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>Bambang123</td>
                                        <td>Bambang Pamungkas</td>
                                        <td>Indramayu, 15 Januari 2000</td>
                                        <td>Indramayu</td>
                                        <td>Bambang@gmail.com</td>
                                        <td>S1 Pendidikan Bahasa Inggris</td>
                                        <td>Bahasa Inggris</td>
                                        <td>Bahasa Inggris</td>
                                        <td>0895411597593</td>
                                        <td>Image</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>Graphic Design</td>
                                        <td>fox@itpark.com</td>
                                        <td>+8801762067304</td>
                                        <td class="datatable-ct"><span class="pie">230/360</span>
                                        </td>
                                        <td>70%</td>
                                        <td>fab 2, 2017</td>
                                        <td>$8756</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr> -->
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