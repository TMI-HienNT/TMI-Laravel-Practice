@extends('layout')
@section('content')
    <form id="brandCreateForm">
        @csrf
        <input type="text" name="brand_name">
        <button type="submit">Submit</button>
    </form>

    <div id="responseMessage"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function (e) {
            $('#brandCreateForm').submit(function (e) {
                e.preventDefault();

                var dataForm = $(this).serialize();

                $.ajax({
                    url: '{{route('brands.store')}}',
                    method: 'POST',
                    data: dataForm,
                    success: function (response){
                        $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                    },
                    error: function (response) {
                        $('#responseMessage').html('<div class="alert alert-danger">' + response.message + '</div>');
                    }
                });
            });
        });
    </script>
@endsection
