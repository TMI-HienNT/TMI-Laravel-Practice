@extends('layout')

@section('content')
    <!-- Form Update Brand -->
    <form id="brandUpdateForm">
        @csrf
        @method('PUT')
        <input type="text" name="brand_old_name" placeholder="{{$brand->name}}">
        <button type="submit">Edit</button>
    </form>

    <!-- Thông báo lỗi nếu có -->
    <div id="responseMessage"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#brandUpdateForm').submit(function(e) {
                e.preventDefault();  // Ngừng form submit mặc định

                var formData = $(this).serialize();  // Lấy dữ liệu từ form

                $.ajax({
                    url: '{{ route('brands.update', ['brand' => $brand->id]) }}',  // URL của form
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        // Hiển thị thông báo khi thành công
                        $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                        console.log(response.message);
                    },
                    error: function(response) {
                        // Hiển thị lỗi nếu có
                        $('#responseMessage').html('<div class="alert alert-danger">There was an error. Please try again.</div>');
                        console.log(response.message);
                    }
                });
            });
        });
    </script>
@endsection
