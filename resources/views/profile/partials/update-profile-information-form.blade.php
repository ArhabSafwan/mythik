<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" id="profileupdate" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

    <div class="mb-4 text-center">
        <label for="photo-upload" class="d-inline-block position-relative" style="cursor: pointer;">
            <img
                src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-avatar.png') }}"
                alt="Profile Photo"
                id="profilePreview"
                class="rounded-circle border"
                style="width: 120px; height: 120px; object-fit: cover;"
            >
        <div class="position-absolute bottom-0 end-0 bg-light border rounded-circle p-1 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gray" class="bi bi-camera" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M5.25 1a.75.75 0 0 0-.75.75V2H3.5A1.5 1.5 0 0 0 2 3.5v9A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 12.5 2H11.5v-.25a.75.75 0 0 0-.75-.75h-5.5zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
            </div>
        </label>

        <input 
            type="file" 
            id="photo-upload" 
            name="photo" 
            class="d-none @error('photo') is-invalid @enderror"
            accept="image/*"
            onchange="previewProfilePhoto(this)"
        >
         @if ($user->photo)
        <button  id ="deletePhotoBtn" type="button" class="btn btn-sm btn-danger rounded-circle p-1" title="Delete Photo">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 5h4a.5.5 0 0 1 .5.5V6h-5v-.5zm1 1h3v6a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-6zM11.5 4a.5.5 0 0 1 .5.5V5H4v-.5a.5.5 0 0 1 .5-.5h7zM14 5v1a1 1 0 0 1-1 1h-1v6.5a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 13.5V7H3a1 1 0 0 1-1-1V5h12z" />
            </svg>
        </button>
@endif
    @error('photo')
        <div class="invalid-feedback d-block">
            {{ $message }}
        </div>
    @enderror
</div>
       <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input 
            type="text" 
            class="form-control @error('name') is-invalid @enderror" 
            id="name" 
            name="name" 
            value="{{ old('name', $user->name) }}" 
            required 
            autocomplete="name" 
            autofocus
        >
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="user_name" class="form-label">User Name</label>
        <input 
            type="text" 
            class="form-control @error('user_name') is-invalid @enderror" 
            id="user_name" 
            name="user_name" 
            value="{{ old('user_name ', $user->user_name ) }}" 
            required 
            autofocus
        >
        @error('user_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input
        type="email"
        class="form-control @error('email') is-invalid @enderror"
        id="email"
        name="email"
        value="{{ old('email', $user->email) }}"
        required
    >
    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input
        type="number"
        class="form-control @error('phone') is-invalid @enderror"
        id="phone"
        name="phone"
        value="{{ old('phone', $user->phone) }}"
    >
    @error('phone')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
   


    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <div class="mt-2">
            <p class="text-muted small">
                {{ __('Your email address is unverified.') }}
                <button
                    form="send-verification"
                    class="btn btn-link p-0 align-baseline text-decoration-underline"
                >
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </p>

            @if (session('status') === 'verification-link-sent')
                <p class="mt-2 text-success small">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
            @endif
        </div>
    @endif
</div>

<div class="d-flex align-items-center gap-3">
    <button type="submit" class="btn btn-primary">
        {{ __('Save') }}
    </button>

    @if (session('status') === 'profile-updated')
        <p class="text-muted small mb-0">
            {{ __('Saved.') }}
        </p>
    @endif
</div>
    </form>
</section>
