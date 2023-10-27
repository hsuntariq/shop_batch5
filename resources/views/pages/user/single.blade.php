<x-layout>
    <x-navbar/>
    <x-flash/>
    <form action="/add-to-cart" method="POST">
        @csrf
    <div class="row">
        <div class="col-md-6">
            <img width="100%" height="400px" src="{{asset('storage/' . $item->image)}}" alt="">
            <input type="text" name="image" value="{{$item->image}}">
        </div>
        <div class="col-md-6">
            <h1>Name:{{$item->name}}</h1>
            <input type="text" name="name" value="{{$item->name}}">
            <h1>Price:{{$item->price}}</h1>
            <input type="text" name="price" value="{{$item->price}}">
            <h1>Desc:{{$item->description}}</h1>
            <input type="text" name="description" value="{{$item->description}}">
            <h1>Category:{{$item->category}}</h1>
            <input type="text" name="category" value="{{$item->category}}">
            <button class="btn btn-info w-50 d-block m-auto my-2">
                Add to cart
            </button>
        </div>
    </div>
</form>

</x-layout>