<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Queue Job</title>
</head>
<body>
    @php
        $startingDate = date('d/m/Y');
        $endingDate = date('d/m/Y', strtotime('+1 month'));
    @endphp
    <h2>Dear {{ $event->user->name }},</h2>
  <p>We are thrilled to confirm that your subscription to our <strong>{{ $event->package->title }}</strong> internet package has been successfully activated!</p>
  <p>Here are the details of your subscription:</p>
  <ul>
    <li><strong>Package Name:</strong> {{ $event->package->title }}</li>
    <li><strong>Speed:</strong> {{ $event->package->mbps }} Mbps</li>
    <li><strong>Validity:</strong> 1 Month</li>
    <li><strong>Cost:</strong> {{ $event->package->price }}</li>
    <li><strong>Starting Date:</strong> {{ $startingDate }}</li>
    <li><strong>Ending Date:</strong> {{ $endingDate }}</li>
  </ul>
  <p>Thank you for choosing us for your internet needs. Should you have any questions or need assistance, feel free to contact our customer support team anytime.</p>
  <p>Happy browsing!</p>
  <p>Best regards,<br>Naim Howlader<br>Branch Manager<br>HomeInternet</p>
</body>
</html>
