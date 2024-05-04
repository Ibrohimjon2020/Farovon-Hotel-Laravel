@include('header')
@include('navbar')
<div class="container my-2">
    <h2>{{$client->fullName}}ning ma'lumotlari.</h2>
    <p>Tel: {{$client->phone}}, Mamlakati: {{$client->country}}</p>
    <hr>
    <h4>Qachon bizda mexmon bo'lgan</h4>
    <div class="row">
        @foreach($client->comments as $comment)
        <div class="com-md-12">
            <div class="card shadow-lg rounded-lg border-1 my-2 px-3">
                <p>{{$comment->comment}}</p>
                <p>Baho: {{$comment->rate}} <small class="fa fa-star text-primary"></small></p>
                <p class="text-primary">Status {{$comment->is_active == 1 ? 'Active' : 'Passive'}}</p>
                <form action="{{route('comments.update', ['comment'=>$comment->id])}}" method="POST">
                @csrf
                @method('put')
                    <button class="btn btn-primary">Statusni o'zgartirish</button>
                </form>
                <p style="text-align: right;">{{$comment->created_at}}</p>
            </div>
        </div>
        @endforeach
    </div>
    <hr>
    <h4>Commentlari</h4>
    <div class="row">
        @foreach($client->comments as $comment)
        <div class="com-md-12">
            <div class="card shadow-lg rounded-lg border-1 my-2 px-3">
                <p>{{$comment->comment}}</p>
                <p>Baho: {{$comment->rate}} <small class="fa fa-star text-primary"></small></p>
                <p class="text-primary">Status {{$comment->is_active == 1 ? 'Active' : 'Passive'}}</p>
                <form action="{{route('comments.update', ['comment'=>$comment->id])}}" method="POST">
                @csrf
                @method('put')
                    <button class="btn btn-primary">Statusni o'zgartirish</button>
                </form>
                <p style="text-align: right;">{{$comment->created_at}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('footer')