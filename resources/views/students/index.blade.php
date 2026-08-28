@extends('layouts.app')

@section('title', 'Registered Students')

@section('content')
<div class="card-container max-w-6xl">
    <div class="flex justify-between items-center mb-6 border-b border-red-900/50 pb-3">
        <h2 class="text-xl font-bold text-white uppercase tracking-wide" style="white-space: nowrap !important;">Registered Students</h2>
        <a href="{{ route('students.create') }}" class="btn-secondary text-xs" style="white-space: nowrap !important;">+ Add New Student</a>
    </div>

    <div class="overflow-x-auto w-full">
        <table class="data-table w-full">
            <thead>
                <tr>
                    <th style="white-space: nowrap !important;">Profile</th>
                    <th style="white-space: nowrap !important;">Student ID</th>
                    <th style="white-space: nowrap !important;">Name</th>
                    <th style="white-space: nowrap !important;">Program & Year</th>
                    <th style="white-space: nowrap !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                <tr>
                    <td style="white-space: nowrap !important;">
                        <img src="{{ asset('storage/' . $student->profile_picture) }}" class="w-10 h-10 rounded-full object-cover border border-red-700">
                    </td>
                    <td class="font-mono text-xs text-gray-300" style="white-space: nowrap !important;">{{ $student->student_id }}</td>
                    <td class="font-bold text-white" style="white-space: nowrap !important;">{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</td>
                    <td class="text-gray-400" style="white-space: nowrap !important;">{{ $student->program }} ({{ $student->year_level }})</td>
                    <td style="white-space: nowrap !important;">
                        <a href="{{ route('students.show', $student->id) }}" class="text-red-500 hover:text-red-400 text-xs font-bold uppercase" style="white-space: nowrap !important;">View Profile</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-500" style="white-space: nowrap !important;">No student records found in database.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection