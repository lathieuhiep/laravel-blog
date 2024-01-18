<div class="item-control">
    <label for="name" class="form-label">
        Tên <span class="required">(*)</span>
    </label>

    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required>

    @error('name')
    <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="item-control">
    <label for="email" class="form-label">
        Email <span class="required">(*)</span>
    </label>

    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required>

    @error('email')
    <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="item-control">
    <label for="roles" class="form-label">
        Quyền <span class="required">(*)</span>
    </label>

    <select id="roles" class="form-select form-control" name="roles">
        <option selected>Chọn quyền</option>
        @foreach($roles as $role)
            <option value="{{ $role->id }}">{{ $role->display_name }}</option>
        @endforeach
    </select>

    @error('roles')
    <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="item-control">
    <label for="password" class="form-label">
        Mật khẩu <span class="required">(*)</span>
    </label>

    <input id="password" class="form-control" type="password" name="password" required>

    @error('password')
    <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="item-control">
    <label for="password-confirmation" class="form-label">
        Xác nhận mật khẩu <span class="required">(*)</span>
    </label>

    <input id="password-confirmation" class="form-control" type="password" name="password_confirmation" required>
</div>

<div class="item-control">
    <button type="submit" class="btn btn-primary">Thêm</button>
</div>
