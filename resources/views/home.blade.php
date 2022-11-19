@extends('layouts.app')

@section('content')
 <section class="section">
    <div class="section-header">
    <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
            <div class="card-icon bg-info">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Total Guru</h4>
                </div>
                <div class="card-body">
                10
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Total Wali Kelas</h4>
                </div>
                <div class="card-body">
                5
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-user-friends"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Total Siswa</h4>
                </div>
                <div class="card-body">
                1,201
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-address-book"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                <h4>Total Jurusan</h4>
                </div>
                <div class="card-body">
                5
                </div>
            </div>
            </div>
        </div>                  
    </div>
</section>
@endsection
