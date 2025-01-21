<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Required meta tags -->
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
                <div align="center" style="padding-top:50px;">

                  <h1 style="color: white; font-size: 2.5em; margin-bottom: 10px;">YOUR'S COMFORT IS OUR GOAL</h1>
                  <h2 style="color: lightgray; font-size: 1.5em; margin-bottom: 30px;">
                      Providing the best real estate options tailored to your needs.
                  </h2>

                  <table style="width: 90%; margin: 20px auto; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 16px; background-color: #f9f9f9;">
                      <thead>
                          <tr style="background-color: #DAA520; color: white; text-transform: uppercase;">
                              <th style="padding: 12px; border: 1px solid #ddd;">Estate Name</th>
                              <th style="padding: 12px; border: 1px solid #ddd;">Type Number</th>
                              <th style="padding: 12px; border: 1px solid #ddd;">Housing Type</th>
                              <th style="padding: 12px; border: 1px solid #ddd;">Location</th>
                              <th style="padding: 12px; border: 1px solid #ddd;">Image Real</th>
                              <th style="padding: 12px; border: 1px solid #ddd;">Update</th>
                              <th style="padding: 12px; border: 1px solid #ddd;">Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $item)
                          <tr style="background-color: #c2b067; text-align: center;">
                              <td style="padding: 12px; border: 1px solid #ddd;">{{$item->name}}</td>
                              <td style="padding: 12px; border: 1px solid #ddd;">{{$item->typenumber}}</td>
                              <td style="padding: 12px; border: 1px solid #ddd;">{{$item->housingtype}}</td>
                              <td style="padding: 12px; border: 1px solid #ddd;">{{$item->location}}</td>
                              <td style="padding: 12px; border: 1px solid #ddd;">
                                  <img height="100" width="100" src="itemimage/{{$item->image}}" alt="Estate Image">
                              </td>
                              <td style="padding: 12px; border: 1px solid #ddd;">
                                <a href="{{url('updateitem',$item->id)}}" style="color: #007bff; text-decoration: none;">
                                    <i class="bi bi-pencil" style="font-size: 20px;"></i> <!-- Update Icon -->
                                </a>
                            </td>
                            <td style="padding: 12px; border: 1px solid #ddd;">
                                <a onclick="return confirm('Apakah Anda yakin hapus data item ini?')" href="{{url('deleteitem',$item->id)}}" style="color: #dc3545; text-decoration: none;">
                                    <i class="bi bi-trash" style="font-size: 20px;"></i> <!-- Delete Icon -->
                                </a>
                            </td>
                          </tr>
                          @endforeach
                    </table>

                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>