@include('header')
@include('navbar')
<div class="container">
<h2>{{__('Бизнинг Мижозларимиз')}}</h2>
<table class="table table-bordered table-hover">
    <tr>
        <th>№</th>
        <th>To'liq ismi</th>
        <th>Millati</th>
        <th>Yashash joyi</th>
        <th>Tel</th>
    </tr>
    @foreach($clients as $client)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td><a href="{{route('clients.show', ['client'=>$client->id])}}">{{$client->fullName}}</a></td>
        <td>{{$client->fullName}}</td>
        <td>{{$client->country}}</td>
        <td>{{$client->phone}}</td>

    </tr>
    @endforeach
</table>
</div>
@include('footer')