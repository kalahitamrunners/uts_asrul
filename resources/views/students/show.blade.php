@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Student Details</h1>
            <div>
                <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>NIS:</th>
                        <td>{{ $student->nis }}</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>{{ $student->nama }}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{ $student->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth:</th>
                        <td>{{ $student->tanggal_lahir->format('d/m/Y') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection 