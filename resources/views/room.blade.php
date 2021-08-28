
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hotel Reservation System</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrapmin.css') }}">
        <link rel="stylesheet" href="{{ asset('css/available-rooms.css') }}">
        <script src="{{ asset('js/bootstrapmin.js') }}"></script>
    </head>
    <body>
       

        <div class="header">
            <h1>Available Rooms</h1>
            <p>from <span></span> to <span></span></p>
        </div>

        <div class="container" style="margin-bottom: 50px">
            
                    <div class='card w-100' style='margin-bottom: 20px'>The is no available Room!</div>
              
            
            <a href="<%= request.getContextPath()%>"><button class="btn btn-secondary" style="display: block; float: right; margin-bottom: 15px">Back to Home</button></a>

           
                <div class="card w-100" style="margin-bottom: 20px">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h5 class="card-title">Room for adult</h5>
                        <p class="card-text"></p>
                        <p class="card-text">Price:  DZD</p>
                        <form action="AvailableRooms" method="GET">
                            <input type="hidden" name="roomId" value="" />
                            <input type="hidden" name="price" value="" />
                            <input type="hidden" name="checkInDate" value="" />
                            <input type="hidden" name="checkOutDate" value="" />
                            <input type="submit" class="btn btn-success" value="I'll Reserve">
                        </form>
                    </div>
                </div>
            
        </div>
    </body>
</html>
