@extends('layouts.app')
@section('content')
<header class="d-flex justify-content-between align-items-center my-5" dir="rtl">
    <div class="h6 text-dark">
        <a href="/projects">المشاريع</a>
    </div>
    <div>
        <a href="/projects/create" class="btn btn-primary px-4" role="button">مشروع جديد</a>
    </div>
</header>
<section class="row text-right" dir="rtl">
    <div class="container">
        <div class="row">
            @forelse ($projects as $project)
     <div class="col-md-4 mb-4">
        <div class="card text-right" style="height: 230px">
            <div class="card-body">
                <div class="status">
                    @switch($project->status)
                        @case(1)
                            <span class="text-success">مكتمل</span>
                            @break
                        @case(2)
                            <span class="text-danger">ملغي</span>
                            @break
                        @default
                            <span class="text-warning">قيد الإنجاز</span>
                    @endswitch
                    <h5 class="font-weight-bold card-title">
                       <a href="/projects/{{ $project->id }}">{{ Str::limit($project->title, 50) }}</a>
                    </h5>

                    <div class="card-text mt-4">
                        {{ Str::limit($project->description, 150) }}
                    </div>
                </div>
            </div>
             @include('projects.footer')
        </div>
     </div>

        @empty

        <div class="align-content-center text-center">
            <p>لوحة العمل خالية من المشاريع</p>
            <div class="mt-5">
                <a href="/projects/create" class="btn btn-primary btn-lg d-inline-flex align-items-center" role="button">
                    أنشئ مشروعا جديداً الآن
                </a>
            </div>
        </div>
    </div>
    </div>

        @endforelse

</section>
@endsection
