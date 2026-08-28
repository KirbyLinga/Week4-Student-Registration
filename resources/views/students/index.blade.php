@extends('layouts.app')

@section('title', 'Registry')

@section('content')
    <div class="flex items-end justify-between mb-8 flex-wrap gap-4">
        <div>
            <p class="text-[11px] uppercase tracking-[0.14em] font-semibold text-[#71717A] mb-1.5">Master List</p>
            <h1 class="text-3xl font-bold text-[#09090B] tracking-tight">Registered Students</h1>
        </div>
        <a href="{{ route('students.create') }}"
           class="px-6 py-2.5 rounded-full text-sm font-semibold text-white bg-[#09090B] hover:bg-[#27272A] transition">+ New Registration</a>
    </div>

    @if ($students->isEmpty())
        <div class="bg-[#F8F9FA] rounded-2xl border border-[#E4E4E7] p-16 text-center">
            <div class="mx-auto mb-5 h-12 w-12 rounded-full border border-[#E4E4E7] bg-white flex items-center justify-center">
                <span class="text-xl font-semibold text-[#09090B]">+</span>
            </div>
            <p class="text-xl font-bold text-[#09090B] mb-2">No students registered yet</p>
            <p class="text-sm text-[#71717A] mb-6">Start the digital registration process to add the first entry.</p>
            <a href="{{ route('students.create') }}"
               class="inline-block px-6 py-2.5 rounded-full text-sm font-semibold text-white bg-[#09090B] hover:bg-[#27272A] transition">Register a Student</a>
        </div>
    @else
        {{-- Stat strip --}}
        <div class="mb-6">
            <div class="inline-flex items-baseline gap-2 bg-[#F8F9FA] border border-[#E4E4E7] rounded-2xl px-6 py-4">
                <span class="text-3xl font-bold text-[#09090B] tabular-nums">{{ $students->total() }}</span>
                <span class="text-[11px] uppercase tracking-[0.14em] font-semibold text-[#71717A]">Total Registered</span>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-[#E4E4E7] overflow-hidden">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left bg-[#F8F9FA] border-b border-[#E4E4E7]">
                        <th class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A] px-5 py-3.5">Photo</th>
                        <th class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A] px-5 py-3.5">Student ID</th>
                        <th class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A] px-5 py-3.5">Name</th>
                        <th class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A] px-5 py-3.5">Program</th>
                        <th class="text-[11px] uppercase tracking-[0.1em] font-semibold text-[#71717A] px-5 py-3.5">Year Level</th>
                        <th class="px-5 py-3.5"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="border-b border-[#E4E4E7] last:border-0 hover:bg-[#F8F9FA] transition">
                            <td class="px-5 py-3.5">
                                <img src="{{ $student->profile_picture_url }}" alt="{{ $student->full_name }}"
                                     class="h-10 w-10 rounded-full object-cover border border-[#E4E4E7]">
                            </td>
                            <td class="px-5 py-3.5 font-mono text-[#09090B]">{{ $student->student_id }}</td>
                            <td class="px-5 py-3.5 font-medium text-[#09090B]">{{ $student->full_name }}</td>
                            <td class="px-5 py-3.5">
                                <span class="inline-block bg-[#F8F9FA] border border-[#E4E4E7] text-[#09090B] text-xs font-medium px-2.5 py-1 rounded-full">{{ $student->program }}</span>
                            </td>
                            <td class="px-5 py-3.5">
                                <span class="inline-block bg-[#F8F9FA] border border-[#E4E4E7] text-[#09090B] text-xs font-medium px-2.5 py-1 rounded-full">{{ $student->year_level }}</span>
                            </td>
                            <td class="px-5 py-3.5 text-right">
                                <a href="{{ route('students.show', $student->id) }}"
                                   class="text-sm font-semibold text-[#09090B] hover:text-[#71717A] transition">View →</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 text-sm text-[#71717A]">{{ $students->links() }}</div>
    @endif
@endsection