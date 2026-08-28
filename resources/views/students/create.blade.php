@extends('layouts.app')

@section('title', 'Register Student')

@section('content')
<div class="card-container">
    <h2 class="text-2xl font-bold text-white mb-6">Student Registration System</h2>

    @if ($errors->any())
        <div class="alert-error">
            <p class="font-bold mb-2">Please fix the following errors:</p>
            <ul class="list-disc pl-5 text-sm space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Personal Details -->
        <div>
            <h3 class="section-title">Personal Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="form-group">
                    <label class="form-label">Student ID *</label>
                    <input type="text" name="student_id" value="{{ old('student_id') }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">First Name *</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Middle Name</label>
                    <input type="text" name="middle_name" value="{{ old('middle_name') }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Last Name *</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Date of Birth *</label>
                    <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Gender *</label>
                    <select name="gender" class="form-input">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Academic Details -->
        <div>
            <h3 class="section-title">Contact & Academic Info</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="form-group">
                    <label class="form-label">Email Address *</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Mobile Number *</label>
                    <input type="text" name="mobile_number" value="{{ old('mobile_number') }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Program *</label>
                    <input type="text" name="program" value="{{ old('program') }}" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Year Level *</label>
                    <select name="year_level" class="form-input">
                        <option value="">Select Year Level</option>
                        <option value="1st Year" {{ old('year_level') == '1st Year' ? 'selected' : '' }}>1st Year</option>
                        <option value="2nd Year" {{ old('year_level') == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                        <option value="3rd Year" {{ old('year_level') == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                        <option value="4th Year" {{ old('year_level') == '4th Year' ? 'selected' : '' }}>4th Year</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Address & File -->
        <div>
            <h3 class="section-title">Address & Documents</h3>
            <div class="space-y-4">
                <div class="form-group">
                    <label class="form-label">Address *</label>
                    <textarea name="address" rows="3" class="form-input">{{ old('address') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Profile Picture (JPG, PNG) *</label>
                    <input type="file" name="profile_picture" class="form-file-input">
                </div>
            </div>
        </div>

        <button type="submit" class="btn-primary">
            Submit Student Registration
        </button>
    </form>
</div>
@endsection