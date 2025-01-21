<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      label {
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
      @include('admin.sidebar')
      @include('admin.navbar')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="container" align="center" style="padding-top: 70px;">
            <h1 style="color: white; font-size: 2.5em; margin-bottom: 10px;">
              YOUR'S COMFORT IS OUR GOAL
            </h1>
            <h2 style="color: lightgray; font-size: 1.5em; margin-bottom: 30px;">
              Providing the best real estate options tailored to your needs.
            </h2>

            @if(session()->has('pesan'))
              <div class="alert alert-success">
                <strong>{{ session()->get('pesan') }}</strong>
                <button type="button" class="close" onclick="this.parentElement.style.display='none';">&times;</button>
              </div>
            @endif

            <form action="{{ url('upload_item') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div style="padding: 15px;">
                <label>Real Estate Name</label>
                <input
                  type="text"
                  style="color: black;"
                  name="realname"
                  placeholder="Write the name"
                />
              </div>

              <div style="padding: 15px;">
                <label>Type Number</label>
                <input
                  type="number"
                  style="color: black;"
                  name="typenumber"
                  placeholder="Write the type"
                />
              </div>

              <div style="padding: 15px;">
                <label>Housing Types</label>
                <select name="housingtype" style="width: 200px;">
                  <option>--Select--</option>
                  <option value="rebecca">Rebecca House</option>
                  <option value="american">American House</option>
                  <option value="rachel">Rachel House</option>
                  <option value="traditional">Traditional House</option>
                  <option value="arabic">Arabic House</option>
                </select>
              </div>

              <div style="padding: 15px;">
                <label>Location</label>
                <input
                  type="text"
                  style="color: black;"
                  name="location"
                  placeholder="Write the location"
                />
              </div>

              <div style="padding: 15px;">
                <label>Item Image</label>
                <input type="file" name="image" />
              </div>

              <div style="padding: 15px;">
                <input type="submit" class="btn btn-success" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('admin.script')
  </body>
</html>
