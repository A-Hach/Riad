<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hotel Reservation System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrapmin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <script src="{{ asset('js/bootstrapmin.js') }}"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<body>
    
    
    <div class="header lead">
        <h1>Final Reservation</h1>
        <p>Please, fill the form for complete the reservation process.</p>
    </div>

    <div class="container">
        <div class="alert alert-info">
            <strong>Room N°: </strong>
        </div>
        <div class="alert alert-info">
            <Strong>From: </Strong><span id='checkInDate'></span><br>
            <Strong>To: </Strong><span id='checkOutDate'></span><br>
            <Strong>Number of days: </Strong><span id='dayNumbers'>10</span><br>
            <strong>Price for one night: </strong><span id='price'> DZD</span><br>
            <strong>Total price: </strong> <span id='totalPrice'>25000.0 DZD</span>
        </div>
        <form action="FinalReservation" method="POST">
            <input type="hidden" name="roomId" value="">
            <input type="hidden" name="checkInDate" value="">
            <input type="hidden" name="checkOutDate" value="">
            <h4>Stay:</h4>
            <label for="start">Start:</label>
            <input type="datetime-local"  name="start">
            <label for="end">End:</label>
            <input type="datetime-local"  name="end">
            <div class="form-group">
                <label for="fullName">Full name</label>
                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Type full name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Type your email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Type phone number">
            </div>
            <div class="form-group">
                <label for="specialRequest">Special Request</label>
                <textarea class="form-control" name="specialRequest" id="specialRequest" rows="3"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="<%= request.getContextPath() %>"><button class="btn btn-secondary" style="display: block; float: right; margin-bottom: 15px">Back to Home</button></a>
            </div>
        </form>
    </div>
            
    <script>
        // calculate total days
        var checkInDate = "",
            checkOutDate = "",
            result = document.getElementById("dayNumbers");

        var checkInDateArray = checkInDate.split("-"),
        checkInDateDays = Number.parseInt(checkInDateArray[0]) * 365 + Number.parseInt(checkInDateArray[1]) * 31 + Number.parseInt(checkInDateArray[2]),
        dateOutDate = checkOutDate.split("-"),
        checkOutDateDays = Number.parseInt(checkOutDateArray[0]) * 365 + Number.parseInt(checkOutDateArray[1]) * 31 + Number.parseInt(checkOutDateArray[2]),
        diffDays = checkOutDateDays - checkInDateDays;

        result.innerText = diffDays;
        
        // calculate total price
        var price = 0,
            totalPrice = document.getElementById("totalPrice");
        price = parseFloat(price);
        
        totalPrice.innerText = price * diffDays;
        

        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });
    </script>
</body>
</html>