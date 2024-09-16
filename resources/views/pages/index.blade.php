@extends('layouts.layout')
@section('content')
    <div class="page-body">
        <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
            <div class="card card-md">
                <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3 class="h1">Some text goes here</h3>
                        <div class="markdown text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aliquid necessitatibus minima exercitationem cum, hic amet quis tempore fugiat doloribus odio alias repudiandae atque autem in natus ab. Voluptates, iure.
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-primary" target="_blank" rel="noopener">Go somewhere</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                Search for Jobs
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <a href="#" class="btn btn-primary">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                Post a job
                </a>
            </div>
            </div>
        </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
        <div class="container-xl">
            <div class="row g-4">
            <div class="col-12">
                <div class="row row-cards">
                    <div class="space-y">
                        @foreach ($vacancies as $vacancy)
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-auto">
                                    <div class="card-body">
                                        <div class="avatar avatar-md" style="background-image: url({{ $vacancy->image }})"></div>
                                    </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body ps-0">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="mb-0"><a href="#">{{ $vacancy->title }}</a></h3>
                                                </div>
                                                <div class="col-auto fs-h3 text-green">${{ $vacancy->salary }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mt-3 list-inline list-inline-dots mb-0 text-muted">
                                                        <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/building-community -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" /><line x1="13" y1="7" x2="13" y2="7.01" /><line x1="17" y1="7" x2="17" y2="7.01" /><line x1="17" y1="11" x2="17" y2="11.01" /><line x1="17" y1="15" x2="17" y2="15.01" /></svg>
                                                            {{ $vacancy->company }}
                                                        </div>
                                                        <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/license -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11" /><line x1="9" y1="7" x2="13" y2="7" /><line x1="9" y1="11" x2="13" y2="11" /></svg>
                                                            {{ $vacancy->type }}
                                                        </div>
                                                        <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="11" r="3" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                                                            {{ $vacancy->place }}
                                                        </div>
                                                        <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-status-change"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M6 12v-2a6 6 0 1 1 12 0v2"></path><path d="M15 9l3 3l3 -3"></path></svg>                                                            Status:{{ $vacancy->status }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="mt-3 badges">
                                                        <a href="#" class="badge badge-outline text-muted border fw-normal badge-pill">Apply until:{{ \Carbon\Carbon::parse($vacancy->closing_time)->format('d-m-Y') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                </div>

                <div class="container-xl">
                    <div class="row row-cards ">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-body">
                            <ul class="pagination ">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
                                </a>
                            </li>
                            </ul>
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
@endsection
