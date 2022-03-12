<div>product list</div>

<ul>
    @foreach ($products as $product)
        <li> <a href="">{{ $product }}</a> </li>
    @endforeach
</ul>