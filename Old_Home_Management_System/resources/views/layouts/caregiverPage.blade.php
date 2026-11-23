@extends('layouts.header_footer')

@section('title', 'Caregiver Dashboard')

@section('content')
<div class="card">
    <h2>Welcome to your Dashboard</h2>
    <p style="color: var(--text-muted); margin-bottom: 1rem;">List of Patients Duty Today</p>

    <form action="/caregiver/logs" method="POST">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Morning Medicine</th>
                    <th>Afternoon Medicine</th>
                    <th>Night Medicine</th>
                    <th>Breakfast</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                </tr>
            </thead>
            <tbody>
                <!-- @forelse($patients ?? [] as $patient) -->
                    <tr>
                        <td>{{ $patient->FirstName }} {{ $patient->LastName }}</td>
                        <td><input type="checkbox" name="logs[{{ $patient->PatientID }}][morning_med]" value="1" {{ $patient->MorningMedTaken ? 'checked' : '' }}></td>
                        <td><input type="checkbox" name="logs[{{ $patient->PatientID }}][afternoon_med]" value="1" {{ $patient->AfternoonMedTaken ? 'checked' : '' }}></td>
                        <td><input type="checkbox" name="logs[{{ $patient->PatientID }}][night_med]" value="1" {{ $patient->NightMedTaken ? 'checked' : '' }}></td>
                        <td><input type="checkbox" name="logs[{{ $patient->PatientID }}][breakfast]" value="1" {{ $patient->Breakfast ? 'checked' : '' }}></td>
                        <td><input type="checkbox" name="logs[{{ $patient->PatientID }}][lunch]" value="1" {{ $patient->Lunch ? 'checked' : '' }}></td>
                        <td><input type="checkbox" name="logs[{{ $patient->PatientID }}][dinner]" value="1" {{ $patient->Dinner ? 'checked' : '' }}></td>
                    </tr>
                <!-- @empty -->
                    <tr>
                        <td>Sample Patient</td>
                        <td><input type="checkbox" name="sample[morning_med]" value="1"></td>
                        <td><input type="checkbox" name="sample[afternoon_med]" value="1"></td>
                        <td><input type="checkbox" name="sample[night_med]" value="1"></td>
                        <td><input type="checkbox" name="sample[breakfast]" value="1"></td>
                        <td><input type="checkbox" name="sample[lunch]" value="1"></td>
                        <td><input type="checkbox" name="sample[dinner]" value="1"></td>
                    </tr>
                <!-- @endforelse -->
            </tbody>
        </table>

        <div style="margin-top: 1.5rem;">
            <button type="submit" class="btn">Save Daily Checklist</button>
        </div>
    </form>
</div>
@endsection