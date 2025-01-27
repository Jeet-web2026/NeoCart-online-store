<form class="border p-3 rounded-3 bg-light shadow">
    <div class="mb-3">
        <label for="user-name" class="form-label">Name</label>
        <input type="text" class="form-control shadow-none" id="user-name" name="user-name">
    </div>
    <div class="mb-3">
        <label for="user-email" class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none" id="user-email" name="user-email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="user-password" class="form-label">Password</label>
        <input type="password" class="form-control shadow-none" id="user-password">
    </div>
    <x-button-main btnDes="Submit" />
</form>