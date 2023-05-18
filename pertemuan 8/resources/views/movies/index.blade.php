@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Poster</th>
                        <th>Genre</th>
                        <th>Negara</th>
                        <th>Tahun</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Poster</th>
                        <th>Genre</th>
                        <th>Negara</th>
                        <th>Tahun</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sherina</td>
                        <img src="https://upload.wikimedia.org/wikipedia/en/0/09/Petualangan_Sherina.jpg" alt="">
                        <td>Drama</td>
                        <td>Indonesian</td>
                        <td>2017</td>2
                        <td>7.8</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Black Adam</td>
                        <img src="https://cdn.cgv.id/uploads/movie/compressed/22020200.jpg" alt="">
                        <td>Adventure</td>
                        <td>Amerika Serikat</td>
                        <td>2022</td>
                        <td>7.1</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Athena</td>
                        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQsPClS6v0aKmxHauTEP4eyhQyjTbTRey9FiYRAsUbPxxbOh5Ns" alt="">
                        <td>Action</td>
                        <td>prancis</td>
                        <td>2022</td>
                        <td>7.8</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Puss in Boots</td>
                        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSxzo27Wh1Dt2jaZl-fhdjhc9USMPSF9MUT0FQ9VSFQlpnMTJSt" alt="">
                        <td>Comedy</td>
                        <td>Amerika Serikat</td>
                        <td>2011</td>
                        <td>9.5</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Kimetsu no Yaiba</td>
                        <img src="https://cdn1-production-images-kly.akamaized.net/bwxYAvAVjrG19p1Xzw65LWS5484=/640x853/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3341390/original/009364000_1609905428-Demon_Slayer_6.jpg" alt="">
                        <td>Animasi</td>
                        <td>Japan</td>
                        <td>2021</td>
                        <td>8.7</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection