@extends('layouts.app')

@section('title', 'Student Profile')

@section('content')
<div class="card-container">
    
    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col md:flex-row items-center gap-6 mb-6">
        <img src="{{ asset('storage/' . $student->profile_picture) }}" alt="Profile Picture" class="profile-avatar">
        <div>
            <h2 class="text-2xl font-bold text-white">{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</h2>
            <p class="text-red-500 font-semibold">{{ $student->program }} — {{ $student->year_level }}</p>
            <p class="text-gray-400 text-sm">ID: {{ $student->student_id }}</p>
        </div>
    </div>

    <div class="border-t border-zinc-800 pt-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
        <div>
            <span class="form-label">Email Address</span>
            <p class="text-white font-medium mt-1">{{ $student->email }}</p>
        </div>
        <div>
            <span class="form-label">Mobile Number</span>
            <p class="text-white font-medium mt-1">{{ $student->mobile_number }}</p>
        </div>
        <div>
            <span class="form-label">Date of Birth</span>
            <p class="text-white font-medium mt-1">{{ $student->date_of_birth }}</p>
        </div>
        <div>
            <span class="form-label">Gender</span>
            <p class="text-white font-medium mt-1">{{ $student->gender }}</p>
        </div>
        <div class="col-span-1 md:col-span-2">
            <span class="form-label">Address</span>
            <p class="text-white font-medium mt-1">{{ $student->address }}</p>
        </div>
    </div>

    <div class="mt-8 text-center border-t border-zinc-800 pt-6">
        <a href="{{ route('students.create') }}" class="btn-secondary">Register Another Student</a>
    </div>
</div>
@endsection