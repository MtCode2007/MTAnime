@extends('layouts.base')

@section('content')
<div class="box-head mb-3">
    <h3>الحلقات</h3>
</div>
<div class="table-responsive">
    <table class="table cart-table">
        <thead>
            <tr class="table-head">
                <th scope="col">Episoide</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($episoides as $item)
                <tr>
                <td>
                    <p>{{$item->num}}</p>
                </td>
                <td>
                    <p class="m-0">{{$item->status}}</p>
                </td>
                <td>
                    <p class="fs-6 m-0">{{$item->date}}</p>
                </td>

                <td>
                    <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Watch</a>
                        <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold"><i class="fa fa-download" aria-hidden="true"></i></a>
                </td>
            </tr>
            @empty
                لا يوجد حلقات حتى الان
            @endforelse
            
        </tbody>
    </table>
</div>
@endsection