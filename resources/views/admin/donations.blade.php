@extends('shared.admin.main')

@section('title', 'Donations')

@section('content')
    <div class="overlay" style="display: none">
        <div class="loader">
            <img src="{{asset('images/loader.gif')}}" alt="">
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-sm-10 col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Donations</h4>
                            <hr>
                        </div>
                        <div class="content ">
                            @php($donation = \App\Donations::paginate(10))
                            @if($donation->isNotEmpty())
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Email</th>
                                        <th>Reference</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($donation as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>&#8358 {{number_format($item->amount)}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->reference}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4 class="text-uppercase text-center">
                                    No donations have been made
                                </h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection