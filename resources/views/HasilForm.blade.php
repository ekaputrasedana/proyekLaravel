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

    <title>Data Terinput</title>
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
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Form">Tugas Javascript</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Data Terinput</a>
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
                        <h3 class="h2 text-black mb-0">FORMULIR DATA DIRI</h3><br>
                        <table class="table table-white">
                            <thead>
                                <tr>
                                    <th class="text center">No</th>
                                    <th class="text center">First Name</th>
                                    <th class="text center">Email</th>
                                    <th class="text center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text center">
                                @foreach ($data as $person)
                                    <tr>
                                        <th>{{  $loop->iteration }}</th>
                                        <td>{{  $person->firstName }}</td>
                                        <td>{{  $person->email }}</td>
                                        <td>
                                            <form action="DetailPersonData/{{ $person->id }}" method="GET" class="d-inline"><button class="btn btn-primary btn-sm">Detail</button>
                                            </form>
                                            <form action="Person/{{ $person->id }}" method="GET" class="d-inline"><button class="btn btn-primary btn-sm">Detail</button>
                                            </form>
                                            <form action="DetailPersonData/{{ $person->id }}" method="GET" class="d-inline"><button class="btn btn-primary btn-sm">Detail</button>
                                            </form>
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
</body>

</html>