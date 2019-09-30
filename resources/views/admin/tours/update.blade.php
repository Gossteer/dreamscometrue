@extends('layouts.admin')

@section('content')
    <link href="{{ asset('js/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="{{ asset('js/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet') }}">
    <!-- Color picker plugins css -->
    <link href="{{ asset('js/plugins/jquery-asColorPicker-master/css/asColorPicker.css') }}" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="{{ asset('js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="{{ asset('js/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{ route('tours.update',$tour) }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="put">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Name_Tours">Название <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="Name_Tours" value="{{ $tour->Name_Tours }}" placeholder="Название" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Description">Описание <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="Description" required   placeholder="Описание">{{ $tour->Description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="type_tours_id">Тип экскурсии <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control"  name="type_tours_id">
                                            <option value="{{ $tour->type_tours_id }}">{{ $tour->type_tour->Name_Type_Tours }}</option>
                                            @foreach($type_tours as $type)
                                                @if($type->id != $tour->type_tours_id)
                                                <option value="{{ $type->id }}">{{ $type->Name_Type_Tours }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Price">Цена <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="Price" value="{{ $tour->Price }}" name="Price" placeholder="Цена">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Privilegens_Price">Льготная цена
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="Privilegens_Price" value="{{ $tour->Privilegens_Price }}" name="Privilegens_Price" placeholder="Льготная цена">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Expenses">Затраты <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="Expenses" name="Expenses" value="{{ $tour->Expenses }}" placeholder="Затраты">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Amount_Place">Места <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="Amount_Place" name="Amount_Place" value="{{ $tour->Amount_Place }}" placeholder="Места">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="mdate">Дата проведения<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="2017-06-04" value="{{ $tour->Start_Date_Tours }}" id="mdate" name="Start_Date_Tours">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
