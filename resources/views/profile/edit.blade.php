@extends('backend.template.template')
@section('title', 'Profile')
@section('main')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
function previewProfilePhoto(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('profilePreview').src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}

   document.getElementById('deletePhotoBtn').addEventListener('click', function() {
        // Show SweetAlert confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('{{ route('profile.photo.delete') }}', {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                     location.reload();
                    }
                })
                .catch(error => {
                   
                    Swal.fire(
                        'Error!',
                        'There was an issue deleting the photo.',
                        'error'
                    );
                });
            }
        });
    });


    document.getElementById('passwordUpdateForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);

    // Clear previous errors
    form.querySelectorAll('.form-control').forEach(input => input.classList.remove('is-invalid'));
    form.querySelectorAll('.invalid-feedback').forEach(el => el.innerText = '');

    fetch("{{ route('password.update') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(async response => {
        if (!response.ok) {
            const data = await response.json();
            if (response.status === 422) {
                const errors = data.errors;
                for (const [field, messages] of Object.entries(errors)) {
                    const input = document.querySelector(`[name="${field}"]`);
                    const errorDiv = document.getElementById(`error_${field}`);
                    if (input) input.classList.add('is-invalid');
                    if (errorDiv) errorDiv.innerText = messages[0];
                }
            }
            throw new Error('Validation failed');
        }

        return response.json();
    })
    .then(data => {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Password updated successfully',
            toast: true,
            position: 'top-end',
            timer: 3000,
            showConfirmButton: false
        });
        form.reset();
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script>
@endpush