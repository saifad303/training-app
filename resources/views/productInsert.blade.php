<div>
    @if ($errors->any())
        
    @endif
</div>

<form action="submit" method="POST">
    @csrf
    <label for="">Product Name</label>
    <input type="text" name="pname">
    <label for="">Product Description</label>
    <textarea name="pdesc" id="" cols="" rows=""></textarea>
    <button type="submit">Submit</button>
</form>