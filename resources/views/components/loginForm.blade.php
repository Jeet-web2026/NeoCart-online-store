@props(['FormInputidName' => '', 'FormInputemailName' => '', 'FormInputpasswordName' => ''])
<form class="border p-3 rounded-3 bg-light shadow">
    <div class="mb-3">
        <label for="{{ $FormInputidName }}" class="form-label">Name</label>
        <input type="text" class="form-control shadow-none" id="{{ $FormInputidName }}" name="{{ $FormInputidName }}">
    </div>
    <div class="mb-3">
        <label for="{{ $FormInputemailName }}" class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none" id="{{ $FormInputemailName }}" name="{{ $FormInputemailName }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="{{ $FormInputpasswordName }}" class="form-label">Password</label>
        <input type="password" class="form-control shadow-none" id="{{ $FormInputpasswordName }}" name="{{ $FormInputpasswordName }}">
    </div>
    <x-button-main btnDes="Submit" />
</form>