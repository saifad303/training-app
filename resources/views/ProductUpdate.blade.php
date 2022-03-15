<div>
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <div>{{ $err }}</div>
        @endforeach
    @endif
</div>

<br>
<br>
<br>
<br>
<br>

<h2>Product Update</h2>

<form action="update" method="POST">
    @csrf
    {{ method_field("put") }}
    <label for="">Product Name</label>
    <br>
    <input type="text" name="pname">
    <br>
    <span>
        @error('pname')
            {{ $message }}
        @enderror
    </span>
    <br>
    <br>
    <label for="">Product Description</label>
    <br>
    <textarea name="pdesc" id="" cols="" rows=""></textarea>
    @error('pdesc')
        <div>{{ $message }}</div>
    @enderror
    <button type="submit">Submit</button>
</form>