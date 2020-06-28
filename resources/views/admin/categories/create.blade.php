@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
            @endcomponent

    </div>

<hr />

<form class="form-horizontal" action="/admin/category" method="post">
{{csrf_field() }}

    {{-- Form include --}}
    @include('admin.categories.partials.form')
</form>
@endsection
