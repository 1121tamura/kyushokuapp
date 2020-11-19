@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>サイドバーはgithub?ネットの共通化を見て要改造。</h1>

@stop

@section('content')
    <p>Welcome .</p>
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="">Browser</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Engine version</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="">CSS grade</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1">Gecko</td>
                  <td style="">Firefox 1.0</td>
                  <td style="">Win 98+ / OSX.2+</td>
                  <td style="">1.7</td>
                  <td style="">A</td>
                </tr><tr role="row" class="even">
                  <td tabindex="0" class="sorting_1">Gecko</td>
                  <td style="">Firefox 1.5</td>
                  <td style="">Win 98+ / OSX.2+</td>
                  <td style="">1.8</td>
                  <td style="">A</td>
                </tr><tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1">Gecko</td>
                  <td style="">Firefox 2.0</td>
                  <td style="">Win 98+ / OSX.2+</td>
                  <td style="">1.8</td>
                  <td style="">A</td>
                </tr><tr role="row" class="even">
                  <td tabindex="0" class="sorting_1">Gecko</td>
                  <td style="">Firefox 3.0</td>
                  <td style="">Win 2k+ / OSX.3+</td>
                  <td style="">1.9</td>
                  <td style="">A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1" tabindex="0">Gecko</td>
                  <td style="">Camino 1.0</td>
                  <td style="">OSX.2+</td>
                  <td style="">1.8</td>
                  <td style="">A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1" tabindex="0">Gecko</td>
                  <td style="">Camino 1.5</td>
                  <td style="">OSX.3+</td>
                  <td style="">1.8</td>
                  <td style="">A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1" tabindex="0">Gecko</td>
                  <td style="">Netscape 7.2</td>
                  <td style="">Win 95+ / Mac OS 8.6-9.2</td>
                  <td style="">1.7</td>
                  <td style="">A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1" tabindex="0">Gecko</td>
                  <td style="">Netscape Browser 8</td>
                  <td style="">Win 98SE+</td>
                  <td style="">1.7</td>
                  <td style="">A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1" tabindex="0">Gecko</td>
                  <td style="">Netscape Navigator 9</td>
                  <td style="">Win 98+ / OSX.2+</td>
                  <td style="">1.8</td>
                  <td style="">A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1" tabindex="0">Gecko</td>
                  <td style="">Mozilla 1.0</td>
                  <td style="">Win 95+ / OSX.1+</td>
                  <td style="">1</td>
                  <td style="">A</td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1" style="">Browser</th><th rowspan="1" colspan="1" style="">Platform(s)</th><th rowspan="1" colspan="1" style="">Engine version</th><th rowspan="1" colspan="1" style="">CSS grade</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.card-body -->
          </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop