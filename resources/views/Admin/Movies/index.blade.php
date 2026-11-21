@extends('Admin.layouts.master')


@section('content')


    <!-- Browser Default -->
    <div class="col-md mb-4 mb-md-0">
        <div class="card">
            <h5 class="card-header">  اضافه کردن  فیلم</h5>
            <div class="card-body">
                    <div class="card">
                        <h5 class="card-header">  لیست فیلم ها</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>نام فیلم</th>
                                    <th>دسته بندی</th>
                                    <th> عملیات</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach($movies as $movie)
                                    <tr>

                                        <td>
                                            <span class="fw-medium"> {{$movie->id}}</span>

                                            <i class="ti ti-brand-angular ti-lg text-danger me-3"></i>
                                            <span class="fw-medium"> {{$movie->title}}</span>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">{{$movie->category->name}}</span></td>
                                        <td>
                                            <a href="{{route("movie.edit" , $movie->id)}}" class="btn btn-primary">ویرایش</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- /Browser Default -->




@endsection
