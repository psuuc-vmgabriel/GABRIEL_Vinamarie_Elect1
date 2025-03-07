@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card">
        <div class="card-header text-left">
            <h4>| Registration Result</h4>
        </div>
        <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">Sex</th>
                            <th class="text-center">Mobile Phone</th>
                            <th class="text-center">Tel No.</th>
                            <th class="text-center">Birthdate</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Website</th>
                        
                        </tr>
                        <tr>
                            <td class="text-center">{{ $data['first_name'] }}</td>
                            <td class="text-center">{{ $data['last_name'] }}</td>
                            <td class="text-center">{{ ucfirst($data['sex']) }}</td>
                            <td class="text-center">{{ $data['mobile_phone'] }}</td>
                            <td class="text-center">{{ $data['tel_no'] }}</td>
                            <td class="text-center">{{ $data['birthdate'] }}</td>
                            <td class="text-center">{{ $data['address'] }}</td>
                            <td class="text-center">{{ $data['email'] }}</td>
                            <td class="text-center">{{ $data['website'] }}</td>
                          
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
