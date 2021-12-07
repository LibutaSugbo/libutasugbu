<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>How to Fetch data in Laravel 8</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($host as $item)
                            <tr>
                                $host->Host_BName = $data['b_name'];
                                $host->Host_LName = $data['last_name'];
                                $host->Host_FName = $data['first_name'];
                                $host->Host_MName = $data['mid_name'];
                                $host->Host_ExtName = $data['ext_name'];
                                $host->Host_City_Muni = $data['city_mun'];
                                $host->Host_Brgy = $data['Barangay'];
                                $host->Host_Street = $data['Street'];
                                $host->Host_ZIP = $data['address2'];
                                $host->Host_ContactNum = $data['Tel_Num'];
                                $host->Host_Direction = $data['direction'];
                                $host->Host_Email = $data['email'];
                                $host->Host_Password = $data['password'];
                                $host->Host_Website = $data['Website'];
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->section }}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>