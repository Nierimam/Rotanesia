@extends('layouts.profile-layout')
@section('content')
    {{-- @dd($user) --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <section>
        <div id="sidebar">
            <div class="white-label">
                <img src="assets/img/logowh.png" alt="">
            </div>
            <div id="sidebar-nav">
                <ul>
                    <li class="active"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="profileupdate"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="historytr"><i class="fas fa-shopping-cart"></i> History Transaction</a></li>
                    <li><a href="toko"><i class="fa fa-home"></i> TOKO</a></li>
                    <li></li>
                    <li><a href="/" rel="stylesheet">Home</a></li>
                    <li>
                        {{-- post logout method from route --}}
                        {{-- <form action="{{ route('logout.post') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger rounded-pill"
                                style="width:190px; margin-left:30px; margin-top:420px;">Logout</button>
                        </form> --}}
                    </li>
                </ul>
            </div>

    </section>
    <section class="row" style="background-color: #eee; height: 100%;">
        <div class="container py-5 ">
            <div class=" row">
                <div class="profview col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="profileview">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            {{-- Get User Image --}}
                            {{-- if User doesn't has image return template image --}}
                            @if ($user->image == null)
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            @else
                                <img src="{{ asset('storage/' . $user->image) }}" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 150px;">
                            @endif
                            {{-- Get User Name --}}
                            {{-- <h5 class="my-3">{{ $user->name }}</h5> --}}
                            <!-- <h5 class="my-3">Surya Manurung</h5> -->
                            <p class="text-muted mb-1">{{ $user->email }}</p>
                                <p class="text-muted mb-4">{{ $user->address }}</p>

                            <!-- {{-- <h5 class="my-3">Joni Setiawan</h5>
                            <p class="text-muted mb-1">tenangaja@gmail.com</p>
                            <p class="text-muted mb-4">Babatan, Jambi, Indonesia</p> --}} -->
                            <div class="d-flex justify-content-center mb-2 ">
                                <a href="profileupdate"><button type="button" class="btn btn-danger"
                                        style="width: 22rem;">Update</button></a>
                            </div>

                        </div>

                    </div>
                    <div class="card mb-2 mb-lg-0" style="height: 1rem;">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div class="card-body">
                                        <p class="mb-2 text-center"><span class="text-danger font-italic me-1">SALDO AKUN</span>
                                        </p>
                                        <div>
                                            {{-- <p class="text-muted mb-3">Rp.{{ $user_balance }}</p> --}}
                                            <p class="text-muted mb-3 text-center">Rp. 10000</p>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
                                    <!-- <p class="text-muted mb-0">Surya Manurung</p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                    <!-- <p class="text-muted mb-0">suryamanurung@gmail.com</p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->phone }}</p>
                                    <!-- <p class="text-muted mb-0">089876767878</p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    {{-- <p class="text-muted mb-0">{{ $user->address }}</p>
                                    <p class="text-muted mb-0">Bandung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-danger font-italic me-1">JUMLAH TRANSAKSI</span>
                                    </p>
                                    <p class="mb-1" style="font-size: .77rem;">January</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">June</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-center mb-2 mt-4">
                                        <a href="historytr"><button type="button" class="btn btn-danger"
                                                style="width: 15rem;">View</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-danger font-italic me-1">HISTORY TRANSAKSI</span>
                                    </p>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">History Belanja Anda</p>
                                    </div>
                                    <div class="d-flex justify-content-center mb-2 mt-4">
                                        <a href="historytr"><button type="button" class="btn btn-danger"
                                                style="width: 15rem;">View</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
