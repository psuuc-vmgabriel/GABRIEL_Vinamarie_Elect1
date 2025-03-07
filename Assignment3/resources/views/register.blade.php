<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<body class="bg-light">
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card shadow-lg">
    <div class="card-body">
    <h3 class="text-center mb-4">Registration Form</h3>
        <form action="{{ route('register.submit') }}" method="POST">
         @csrf
        <h5>| Personal Information</h5>
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
            @error('first_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
            @error('last_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Sex:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="male" value="male" {{ old('sex') == 'male' ? 'checked' : '' }}>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="female" value="female" {{ old('sex') == 'female' ? 'checked' : '' }}>
                <label class="form-check-label" for="female">Female</label>
            </div>
            @error('sex')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mobile_phone" class="form-label">Mobile Phone:</label>
            <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="0998-xxx-xxx or 0999-xxx-xxx or 0920-xxx-xxx" value="{{ old('mobile_phone') }}">
            @error('mobile_phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tel_no" class="form-label">Tel No.:</label>
            <input type="text" class="form-control" id="tel_no" name="tel_no" value="{{ old('tel_no') }}">
            @error('tel_no')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="birthdate" class="form-label">Birthdate:</label>
            <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="yyyy-mm-dd" value="{{ old('birthdate') }}">
            @error('birthdate')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="3">{{ old('address') }}</textarea>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="website" class="form-label">Website:</label>
            <input type="url" class="form-control" id="website" name="website" value="{{ old('website') }}">
            @error('website')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create User</button> 
                        
    
    
    </form>
        </div>
             </div>
                </div>
                    </div>
                        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
