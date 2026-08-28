@extends('layouts.app')

@section('title', 'New Registration')

@section('content')
    <div class="max-w-3xl mx-auto">

        <div class="mb-8">
            <p class="text-[11px] uppercase tracking-[0.14em] font-semibold text-[#71717A] mb-1.5">Form 01 — Enrollment</p>
            <h1 class="text-3xl font-bold text-[#09090B] tracking-tight">Student Registration</h1>
            <p class="text-sm text-[#71717A] mt-2">Fields marked with <span class="text-[#09090B] font-semibold">*</span> are required.</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-2xl border border-[#E4E4E7] bg-[#F8F9FA] px-5 py-4">
                <p class="flex items-center gap-2 font-semibold text-sm text-[#09090B] mb-2">
                    <span class="inline-block h-1.5 w-1.5 rounded-full bg-[#09090B]"></span>
                    We couldn't save this registration
                </p>
                <ul class="text-sm text-[#71717A] space-y-1 pl-3.5">
                    @foreach ($errors->all() as $error)
                        <li class="list-disc marker:text-[#71717A]">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data"
              class="bg-white rounded-2xl border border-[#E4E4E7] p-8 sm:p-10 space-y-10">
            @csrf

            {{-- Section: Identity --}}
            <fieldset>
                <legend class="w-full flex items-baseline gap-2 pb-3 mb-6 border-b border-[#E4E4E7]">
                    <span class="text-[11px] font-semibold text-[#A1A1AA]">01</span>
                    <span class="text-[11px] uppercase tracking-[0.14em] font-semibold text-[#71717A]">Identity</span>
                </legend>

                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label for="student_id" class="block text-xs font-semibold text-[#09090B] mb-1.5">Student ID <span class="text-[#71717A]">*</span></label>
                        <input type="text" id="student_id" name="student_id" value="{{ old('student_id') }}"
                               class="w-full rounded-xl border {{ $errors->has('student_id') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] placeholder:text-[#A1A1AA] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                        @error('student_id') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-xs font-semibold text-[#09090B] mb-1.5">Email Address <span class="text-[#71717A]">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               class="w-full rounded-xl border {{ $errors->has('email') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] placeholder:text-[#A1A1AA] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                        @error('email') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid sm:grid-cols-3 gap-6 mt-6">
                    <div>
                        <label for="first_name" class="block text-xs font-semibold text-[#09090B] mb-1.5">First Name <span class="text-[#71717A]">*</span></label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                               class="w-full rounded-xl border {{ $errors->has('first_name') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                        @error('first_name') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="middle_name" class="block text-xs font-semibold text-[#09090B] mb-1.5">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}"
                               class="w-full rounded-xl border border-[#E4E4E7] bg-white px-4 py-2.5 text-sm text-[#09090B] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                    </div>
                    <div>
                        <label for="last_name" class="block text-xs font-semibold text-[#09090B] mb-1.5">Last Name <span class="text-[#71717A]">*</span></label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                               class="w-full rounded-xl border {{ $errors->has('last_name') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                        @error('last_name') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid sm:grid-cols-3 gap-6 mt-6">
                    <div>
                        <label for="mobile_number" class="block text-xs font-semibold text-[#09090B] mb-1.5">Mobile Number <span class="text-[#71717A]">*</span></label>
                        <input type="text" inputmode="numeric" id="mobile_number" name="mobile_number" value="{{ old('mobile_number') }}"
                               placeholder="09XXXXXXXXX"
                               class="w-full rounded-xl border {{ $errors->has('mobile_number') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] placeholder:text-[#A1A1AA] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                        @error('mobile_number') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="date_of_birth" class="block text-xs font-semibold text-[#09090B] mb-1.5">Date of Birth <span class="text-[#71717A]">*</span></label>
                        <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}"
                               class="w-full rounded-xl border {{ $errors->has('date_of_birth') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                        @error('date_of_birth') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="gender" class="block text-xs font-semibold text-[#09090B] mb-1.5">Gender <span class="text-[#71717A]">*</span></label>
                        <select id="gender" name="gender"
                                class="w-full rounded-xl border {{ $errors->has('gender') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                            <option value="">Select…</option>
                            <option value="Male" @selected(old('gender') === 'Male')>Male</option>
                            <option value="Female" @selected(old('gender') === 'Female')>Female</option>
                        </select>
                        @error('gender') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                </div>
            </fieldset>

            {{-- Section: Academic Info --}}
            <fieldset>
                <legend class="w-full flex items-baseline gap-2 pb-3 mb-6 border-b border-[#E4E4E7]">
                    <span class="text-[11px] font-semibold text-[#A1A1AA]">02</span>
                    <span class="text-[11px] uppercase tracking-[0.14em] font-semibold text-[#71717A]">Academic Information</span>
                </legend>

                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label for="program" class="block text-xs font-semibold text-[#09090B] mb-1.5">Program <span class="text-[#71717A]">*</span></label>
                        <select id="program" name="program"
                                class="w-full rounded-xl border {{ $errors->has('program') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                            <option value="">Select…</option>
                            @foreach (['BS Information Technology', 'BS Computer Science', 'BS Information Systems', 'Associate in Computer Technology'] as $prog)
                                <option value="{{ $prog }}" @selected(old('program') === $prog)>{{ $prog }}</option>
                            @endforeach
                        </select>
                        @error('program') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="year_level" class="block text-xs font-semibold text-[#09090B] mb-1.5">Year Level <span class="text-[#71717A]">*</span></label>
                        <select id="year_level" name="year_level"
                                class="w-full rounded-xl border {{ $errors->has('year_level') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">
                            <option value="">Select…</option>
                            @foreach (['1st Year', '2nd Year', '3rd Year', '4th Year'] as $yr)
                                <option value="{{ $yr }}" @selected(old('year_level') === $yr)>{{ $yr }}</option>
                            @endforeach
                        </select>
                        @error('year_level') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <label for="address" class="block text-xs font-semibold text-[#09090B] mb-1.5">Address <span class="text-[#71717A]">*</span></label>
                    <textarea id="address" name="address" rows="3"
                              class="w-full rounded-xl border {{ $errors->has('address') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] focus:outline-none focus:ring-2 focus:ring-[#09090B] focus:border-[#09090B] transition">{{ old('address') }}</textarea>
                    @error('address') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
                </div>
            </fieldset>

            {{-- Section: Profile Picture --}}
            <fieldset>
                <legend class="w-full flex items-baseline gap-2 pb-3 mb-6 border-b border-[#E4E4E7]">
                    <span class="text-[11px] font-semibold text-[#A1A1AA]">03</span>
                    <span class="text-[11px] uppercase tracking-[0.14em] font-semibold text-[#71717A]">Profile Picture</span>
                </legend>

                <label for="profile_picture" class="block text-xs font-semibold text-[#09090B] mb-1.5">Upload Photo (JPG/PNG, max 2MB) <span class="text-[#71717A]">*</span></label>

                <div class="flex items-center gap-5">
                    <div id="preview-wrap" class="hidden h-16 w-16 shrink-0 rounded-full overflow-hidden border border-[#E4E4E7] bg-[#F8F9FA]">
                        <img id="preview" src="" alt="Preview" class="h-full w-full object-cover">
                    </div>
                    <input type="file" id="profile_picture" name="profile_picture" accept="image/png, image/jpeg"
                           onchange="previewImage(event)"
                           class="w-full rounded-xl border {{ $errors->has('profile_picture') ? 'border-[#09090B] border-2' : 'border-[#E4E4E7]' }} bg-white px-4 py-2.5 text-sm text-[#09090B] file:mr-4 file:rounded-full file:border-0 file:bg-[#09090B] file:text-white file:text-xs file:font-semibold file:px-4 file:py-2 file:cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#09090B] transition">
                </div>
                @error('profile_picture') <p class="text-xs mt-1.5 text-[#09090B] font-medium">{{ $message }}</p> @enderror
            </fieldset>

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('students.index') }}"
                   class="px-6 py-2.5 rounded-full text-sm font-semibold text-[#09090B] border border-[#E4E4E7] hover:border-[#09090B] transition">Cancel</a>
                <button type="submit"
                        class="px-6 py-2.5 rounded-full text-sm font-semibold text-white bg-[#09090B] hover:bg-[#27272A] transition">Submit Registration</button>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const img = document.getElementById('preview');
            const wrap = document.getElementById('preview-wrap');
            if (file) {
                img.src = URL.createObjectURL(file);
                wrap.classList.remove('hidden');
            } else {
                wrap.classList.add('hidden');
            }
        }
    </script>
@endsection