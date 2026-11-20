@extends('layouts.header_footer')

@section('title', 'Register')

@section('content')
<div class="card">
    <h2>Create an Account</h2>
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="role">Role</label>
            <select id="role" name="role" required>
                <option value="">Select Role</option>
                <option value="Admin">Admin</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Doctor">Doctor</option>
                <option value="Employee">Employee</option>
                <option value="Caregiver">Caregiver</option>
                <option value="Patient">Patient</option>
                <option value="Family Member">Family Member</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" id="name" name="name" value="" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" value="" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="" required>
        </div>

        <!-- if the Patient role is picked -->
        <div id="patient-fields" style="display: none;">
            <div class="form-group">
                <label for="family_code">Family Code</label>
                <input type="text" id="family_code" name="family_code" value="family_code">
            </div>

            <div class="form-group">
                <label for="emergency_contact">Emergency Contact</label>
                <input type="tel" id="emergency_contact" name="emergency_contact" value="emergency_contact">
            </div>

            <div class="form-group">
                <label for="emergency_contact_relation">Relation of Emergency Contact</label>
                <input type="text" id="emergency_contact_relation" name="emergency_contact_relation" value="emergency_contact_relation">
            </div>
        </div>

        <button type="submit" class="btn">Register</button>
    </form>
</div>

<script>
    const roleSelect = document.getElementById('role');
    const patientFields = document.getElementById('patient-fields');
    const patientInputs = patientFields.querySelectorAll('input');

    function togglePatientFields() {
        const isPatient = roleSelect.value === 'Patient';
        patientFields.style.display = isPatient ? 'block' : 'none';
        patientInputs.forEach(input => input.required = isPatient);
    }

    roleSelect.addEventListener('change', togglePatientFields);
    togglePatientFields();
</script>
@endsection