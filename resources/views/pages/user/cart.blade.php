<x-layout>
    <x-flash/>
    <x-navbar/>
    <div class="text-center display-1 hidden-info">
        My Cart
    </div>

    <form action="/order" method="POST">
    <table class="table w-75 m-auto hidden-center">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            
                @csrf
            @foreach ($my_cart as $item)
                <tr>
                    <td>{{$item->id}}
                    <input type="hidden" name="id" value="{{$item->id}}" id="">
                </td>
                    <td>{{$item->name}}
                    <input type="hidden" name="name" value="{{$item->name}}" id="">
                </td>

                    <td>{{$item->price}}
                    <input type="hidden" name="price" value="{{$item->price}}" id="">
                </td>

                    <td>{{$item->category}}
                    <input type="hidden" name="category" value="{{$item->category}}" id="">
                </td>
                    <td>
                        <img width="50px" src="{{asset('storage/' . $item->image)}}"  alt="">
                        <input type="hidden" value="{{$item->image}}" name="image" id="">

                    </td>
                    <td  class="text-center">
                        <form action="/delete/{{$item->id}}" method="POST">
                            @csrf
                        <button class="btn hidden-danger hidden-center fw-bolder">
                        <i class="bi bi-trash fw-bolder " style="cursor:pointer"></i>
                    </button>
                    </form>
                </td>

                </tr>
            @endforeach
            
            
        </tbody>
        
    </table>
    <button class="btn btn-dark w-25 d-block my-2 mx-auto">
        Place Order
    </button>
</form>
</x-layout>