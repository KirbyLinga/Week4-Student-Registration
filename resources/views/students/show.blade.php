@extends('layouts.app')

@section('title', 'Student Profile')

@section('content')
    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <p class="text-[11px] uppercase tracking-[0.14em] font-semibold text-[#71717A] mb-1.5">Registration Confirmed</p>
            <h1 class="text-3xl font-bold text-[#09090B] tracking-tight">Student Profile</h1>
        </div>

        <div class="bg-white rounded-2xl border border-[#E4E4E7] overflow-hidden">
            <div class="p-8 sm:p-10 flex flex-col sm:flex-row gap-8 items-start bg-[#F8F9FA] border-b border-[#E4E4E7]">
                <img src="{{ $student->profile_picture_url }}" alt="{{ $student->full_name }}"
                     class="h-28 w-28 rounded-full object-cover border-2 border-[#09090B]">

                <div class="flex-1">
                    <h2 class="text-2xl font-bold text-[#09090B] tracking-tight">{{ $student->full_name }}</h2>
                    <p class="font-mono text-xs mt-2 inline-block bg-white border border-[#E4E4E7] text-[#09090B] px-2.5 py-1 rounded-full">{{ $student->student_id }}</p>
                    <p class="text-sm text-[#71717A] mt-3">{{ $student->program }} &middot; {{ $student->year_level }}</p>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-x-8 gap-y-6 p-8 sm:p-10">
                <div>
                    <p class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A]">Email Address</p>
                    <p class="text-sm mt-1.5 text-[#09090B]">{{ $student->email }}</p>
                </div>
                <div>
                    <p class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A]">Mobile Number</p>
                    <p class="text-sm mt-1.5 text-[#09090B]">{{ $student->mobile_number }}</p>
                </div>
                <div>
                    <p class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A]">Date of Birth</p>
                    <p class="text-sm mt-1.5 text-[#09090B]">{{ $student->date_of_birth->format('F d, Y') }}</p>
                </div>
                <div>
                    <p class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A]">Gender</p>
                    <p class="text-sm mt-1.5 text-[#09090B]">{{ $student->gender }}</p>
                </div>
                <div class="sm:col-span-2">
                    <p class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A]">Address</p>
                    <p class="text-sm mt-1.5 text-[#09090B]">{{ $student->address }}</p>
                </div>
                <div>
                    <p class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A]">Registered On</p>
                    <p class="text-sm mt-1.5 text-[#09090B]">{{ $student->created_at->format('F d, Y g:i A') }}</p>
                </div>
            </div>
        </div>

        <div class="mt-6 flex gap-3">
            <a href="{{ route('students.index') }}"
               class="px-6 py-2.5 rounded-full text-sm font-semibold text-[#09090B] border border-[#E4E4E7] hover:border-[#09090B] transition">Back to Registry</a>
            <a href="{{ route('students.create') }}"
               class="px-6 py-2.5 rounded-full text-sm font-semibold text-white bg-[#09090B] hover:bg-[#27272A] transition">Register Another Student</a>
        </div>
    </div>
@endsection