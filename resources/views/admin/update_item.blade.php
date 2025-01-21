<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;
    }

    .alert {
        max-width: 600px;
        margin: 20px auto;
        padding: 15px;
        border-radius: 5px;
        background-color: #d4edda;
        color: #155724;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        position: relative;
      }
      .alert .close {
        position: absolute;
        top: 5px;
        right: 15px;
        background: none;
        border: none;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
      }

    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('pesan'))
              <div class="alert alert-success">
                <strong>{{ session()->get('pesan') }}</strong>
                <button type="button" class="close" onclick="this.parentElement.style.display='none';">&times;</button>
              </div>
            @endif

                <div class="container" align="center" style="padding: 50px;">

                    <form action="{{ url('edititem',$data->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div style="padding:15px;">
                            <label>Real Estate Name</label>
                            <input type="text" style="color: black" name="realname" value="{{ $data->name }}">
                        </div>

                        <div style="padding:15px;">
                            <label>Type Number</label>
                            <input type="number" style="color: black" name="typenumber" value="{{ $data->typenumber }}">
                        </div>

                        <div style="padding:15px;">
                            <label>Housing Types</label>
                            <select name="housingtype" style=" width:200px;" name="housingtype" value="{{ $data->housingtype }}">
                                <option>--Select--</option>
                                <option value="rebecca">Rebecca House</option>
                                <option value="american">American House</option>
                                <option value="rachel">Rachel House</option>
                                <option value="traditional">Traditional House</option>
                                <option value="arabic">Arabic House</option>
                            </select>
                        </div>

                        <div style="padding:15px;">
                            <label>Location</label>
                            <input type="text" style="color: black" name="location" value="{{ $data->location }}">
                        </div>

                        <div style="padding:15px;">
                            <label>Old Image</label>
                            <img height="i50" width="150" src="itemimage/{{$data->image}}">
                        
                        </div>

                        <div style="padding:15px;">
                            <label>Change Image</label>
                            <input type="file" name="image">
                        </div>

                        <div style="padding:15px;">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>