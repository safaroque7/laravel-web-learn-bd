@csrf
<div class="mb-md-3 md-2">
    <label for="name" class="form-label"> Name </label>
    <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : null }}">
    @error('name')
        <p class="text-danger"> <small>{{ $message }}</small> </p>
    @enderror
</div>

<div class="mb-md-3 md-2">
    <label for="phone-number" class="form-label"> Phone </label>
    <input type="text" name="phone_number" id="phone-number" class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : null }}">
    @error('phone_number')
        <p class="text-danger"> <small> {{ $message }} </small> </p>
    @enderror
</div>
