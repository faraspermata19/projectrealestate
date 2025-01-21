<!DOCTYPE html>
<html lang="en">
  <head>
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
                <div align="center" style="padding-top: 50px;">

                    <h1 style="color: white; font-size: 2.5em; margin-bottom: 10px;">YOUR'S COMFORT IS OUR GOAL</h1>
                    <h2 style="color: lightgray; font-size: 1.5em; margin-bottom: 30px;">
                        Providing the best real estate options tailored to your needs.
                    </h2>

                    <table style="width: 90%; margin: 20px auto; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 16px; background-color: #f9f9f9;">
                        <thead>
                            <tr style="background-color: #DAA520; color: white; text-transform: uppercase;">
                                <th style="padding: 12px; border: 1px solid #ddd;">Nama Customer</th>
                                <th style="padding: 12px; border: 1px solid #ddd;">Email</th>
                                <th style="padding: 12px; border: 1px solid #ddd;">Phone</th>
                                <th style="padding: 12px; border: 1px solid #ddd;">Real Estate Items</th>
                                <th style="padding: 12px; border: 1px solid #ddd;">Date</th>
                                <th style="padding: 12px; border: 1px solid #ddd;">Pesan</th>
                                <th style="padding: 12px; border: 1px solid #ddd;">Status</th>
                                <th style="padding: 12px; border: 1px solid #ddd;">Terima</th>
                                <th style="padding: 12px; border: 1px solid #ddd;">Tolak</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $appoint)
                            <tr style="text-align: center; background-color: #c2b067;">
                                <td style="padding: 12px; border: 1px solid #ddd;">{{$appoint->nameuser}}</td>
                                <td style="padding: 12px; border: 1px solid #ddd;">{{$appoint->email}}</td>
                                <td style="padding: 12px; border: 1px solid #ddd;">{{$appoint->phone}}</td>
                                <td style="padding: 12px; border: 1px solid #ddd;">{{$appoint->realestateitem}}</td>
                                <td style="padding: 12px; border: 1px solid #ddd;">{{$appoint->date}}</td>
                                <td style="padding: 12px; border: 1px solid #ddd;">{{$appoint->message}}</td>
                                <td style="padding: 12px; border: 1px solid #ddd;">{{$appoint->status}}</td>
                                <td style="padding: 12px; border: 1px solid #ddd;">
                                    <a style="background-color: #28a745; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px;" href="{{url('diterima',$appoint->id)}}">Terima</a>
                                </td>
                                <td style="padding: 12px; border: 1px solid #ddd;">
                                    <a style="background-color: #dc3545; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px;" href="{{url('ditolak',$appoint->id)}}">Tolak</a>
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