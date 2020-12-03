@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card teamFollow my-5">
                            <form method="POST" action="">
                                <div class="card-header">
                                    <h3 class="card-title font-weight-bold">Daily Follow Up (Hotel)</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered checkAll-table table-responsive">
                                            <thead>
                                            <tr>
                                                <th><button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                                    </button></th>
                                                <th style="width: 10px">ID</th>
                                                <th>Name</th>
                                                <th>Temperature</th>
                                                <th>Resp. s&s Y\N</th>
                                                <th>Other resp. s&s</th>
                                                <th>Cardiac S&S</th>
                                                <th>Other specify</th>
                                                <th>Suspected Covid-19 Y\N</th>
                                                <th style="width: 40px">Referral Y\N</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for ($i = 0; $i < 5; $i++)
                                                <tr>
                                                    <td>
                                                        <div class="icheck-primary">
                                                            <input type="checkbox" value="" id="check{{$i}}" class="w-100">
                                                            <label for="check{{$i}}"></label>
                                                        </div>
                                                    </td>
                                                    <td>1.</td>
                                                    <td>Adam</td>
                                                    <td>
                                                        <div class="switch-btn-toggle btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn bg-olive-n active">
                                                                <input type="radio" name="options" id="option1{{$i}}" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn bg-olive-d">
                                                                <input type="radio" name="options" id="option2{{$i}}" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn-toggle btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn bg-olive-n active">
                                                                <input type="radio" name="options" id="option3{{$i}}" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn bg-olive-d">
                                                                <input type="radio" name="options" id="option4{{$i}}" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="switch-btn-toggle btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn bg-olive-n active">
                                                                <input type="radio" name="options" id="option1{{$i}}" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn bg-olive-d">
                                                                <input type="radio" name="options" id="option2{{$i}}" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn-toggle btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn bg-olive-n active">
                                                                <input type="radio" name="options" id="option1{{$i}}" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn bg-olive-d">
                                                                <input type="radio" name="options" id="option2{{$i}}" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn-toggle btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn bg-olive-n active">
                                                                <input type="radio" name="options" id="option1{{$i}}" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn bg-olive-d">
                                                                <input type="radio" name="options" id="option2{{$i}}" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="switch-btn-toggle btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn bg-olive-n active">
                                                                <input type="radio" name="options" id="option1{{$i}}" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn bg-olive-d">
                                                                <input type="radio" name="options" id="option2{{$i}}" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group mt-2 d-flex flex-row justify-content-center">
                                                            <a href="" class="btn btn-danger btn-sm w-100 mr-1">SMS</a>
                                                            <a href="" class="btn btn-danger btn-sm w-100">Call</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endfor


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
            </div>
        </section>
    </div>



@endsection
