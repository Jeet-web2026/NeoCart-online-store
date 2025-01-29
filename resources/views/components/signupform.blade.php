@props(['FormInputidName' => '', 'FormInputemailName' => '', 'pincode' => '', 'FormInputpasswordName' => '', 'FormId' => '', 'action' => ''])
<form class="border p-3 rounded-3 w-100 bg-light shadow" @if($FormId)id="{{ $FormId }}" @endif @if($action)action="{{ $action }}" @endif>
    @csrf
    <div class="mb-3">
        <p class="results"></p>
    </div>
    <div class="mb-3">
        <label for="{{ $FormInputidName }}" class="form-label">Name</label>
        <input type="text" class="form-control shadow-none" id="{{ $FormInputidName }}" name="{{ $FormInputidName }}">
    </div>
    <div class="mb-3">
        <label for="{{ $FormInputemailName }}" class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none" id="{{ $FormInputemailName }}" name="{{ $FormInputemailName }}">
    </div>
    <div class="mb-3">
        <label for="{{ $FormInputpasswordName }}" class="form-label">Password</label>
        <input type="password" class="form-control shadow-none" id="{{ $FormInputpasswordName }}" name="{{ $FormInputpasswordName }}">
    </div>
    <div class="mb-3">
        <label for="{{ $pincode }}" class="form-label">Pincode</label>
        <input type="text" class="form-control shadow-none" id="{{ $pincode }}" name="{{ $pincode }}">
    </div>
    <p class="mb-2 text-start">Already have an account <button type="button" id="logn_form_open" class="btn p-0 border-0 shadow-none text-primary">Login here</button></p>
    <button type="submit" class="bg-warning btn border-0 mt-3 text-light">Submit</button>
</form>