<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Edit Data</title>
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Personal Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Edit Data</a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <div class="container center-containform">
        <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
            <div class="col-lg-12 mb-1 mb-sm-1">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-6">
                    <div class="col-lg-6 px-xl-10">
                        <h3 class="h2 text-black mb-0">EDIT FORMULIR</h3><br>
                        <div class="row justify-content-center mb-5">
                            <div class="col-md-50">
                            <div class="container mt-5">
                                <form method="post" action="/UpdatePersonData" name="submit-to-google-sheet">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-12">
                                        <label for="inputFirstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="inputFirstName" id="inputFirstName"
                                            value="{{ $data->firstName }}" />
                                    </div>
                                    <div class="col-12">
                                        <label for="inputLastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="inputLastName" id="inputLastName"
                                        value="{{ $data->lastName }}" />
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="inputAddress" id="inputAddress"
                                        value="{{ $data->Address }}" />
                                    </div>
                                    <div class="col-12">
                                        <label for="inputDateOfBirth" class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" name="inputDateOfBirth" id="inputDateOfBirth"
                                        value="{{ $data->dateOfBirth }}" />
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" value="{{ $data->email }}" />
                                    </div>
                                    <div>
                                        <div>
                                            <label for="inputGender" class="form-label">Gender</label>
                                        </div>
                                        <div class="mb-2 mb-xl-3 display-28 radio-group">
                                            <input type="radio" id="Male" name="inputGender" value="Male" @if ( $data -> gender == 'Male') {{ "checked" }} @endif required>
                                            <label for="Male">Male</label>
                                            <input type="radio" id="Female" name="inputGender" value="Female" @if ( $data -> gender == 'Female') {{ "checked" }} @endif required>
                                            <label for="Female">Female</label>
                                            <input type="radio" id="Others" name="inputGender" value="Others" @if ( $data -> gender == 'Others') {{ "checked" }} @endif required>
                                            <label for="Others">Others</label>
                                        </div>
        
                                        <div class="col-12">
                                            <label for="inputReligion" class="form-label">Religion</label>
                                            <select name="inputReligion" id="inputReligion" class="form-select" required>
                                                <option selected>Choose..</option>
                                                <option>Hindu</option>
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Buddha</option>
                                                <option>Katolik</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="inputState" class="form-label">Status</label>
                                        </div>
                                        <div class="mb-2 mb-xl-3 display-28 radio-group">
                                            <input type="radio" id="Married" name="inputState" value="Married" @if ( $data -> status == 'Married') {{ "checked" }} @endif required>
                                            <label for="Married">Married</label>
                                            <input type="radio" id="NotMarried" name="inputState" value="NotMarried" @if ( $data -> status == 'NotMarried') {{ "checked" }} @endif required>
                                            <label for="NotMarried">Not Married</label>
                                            <input type="radio" id="Other" name="inputState" value="Other" @if ( $data -> status == 'Other') {{ "checked" }} @endif required>
                                            <label for="Other">Others</label>
                                        </div>
                                        <div>
                                            <label for="inputjob" class="form-label">Current Job</label>
                                        </div>
                                        <div class="mb-2 mb-xl-3 display-28 checkbox-group">
                                            <input type="checkbox" id="Student" name="inputjob" value="Student" @if ( $data -> job == 'Student') {{ "checked" }} @endif required>
                                            <label for="Student">Student</label>
                                            <input type="checkbox" id="Goverment" name="inputjob" value="Goverment" @if ( $data -> job == 'Goverment') {{ "checked" }} @endif required>
                                            <label for="Goverment">Goverment</label>
                                            <input type="checkbox" id="Private" name="inputjob" value="Private" @if ( $data -> job == 'Private') {{ "checked" }} @endif required>
                                            <label for="Private">Private</label>
                                            <input type="checkbox" id="others" name="inputjob" value="others" @if ( $data -> job == 'others') {{ "checked" }} @endif required>
                                            <label for="others">Others</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="inputPersonalTerms"
                                                id="inputPersonalTerms" @if ( $data -> terms == 'on') {{ "checked" }} @endif required>
                                            <label class="form-check-label" for="inputPersonalTerms">I Agree with personal
                                                terms</label>
                                        </div>
                                        <div>
                                            <button class="w-100 btn btn-primary btn-kirim" type="submit">Submit</button>
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>