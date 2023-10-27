<x-layout>
    <x-navbar/>
    <x-slider/>

    <div class="row container mt-4 mx-auto">
        @foreach ($products as $item)
            <div class="col-md-3">
                <div class="card">
                    <img width="100%" src="{{asset('storage/' . $item->image)}}" alt="">
                    <h4>Name:{{$item->name}}</h4>
                    <h4>Price:{{$item->price}}</h4>
                    <a href='/view-product/{{$item->id}}' class="btn btn-info w-100 my-2">
                        View details
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>