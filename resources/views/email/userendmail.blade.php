<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription End Notification</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1, h2, p {
      margin: 0 0 20px 0;
    }
    .highlight {
      font-weight: bold;
      color: #007bff;
    }
    .footer {
      margin-top: 20px;
      text-align: center;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Subscription End Notification</h1>
    <p>Dear Subscriber,</p>
    <p>Your subscription with us is coming to an end. We want to thank you for being a valued member of our community. Below are the details of your subscription:</p>
    <h2>Subscription Details:</h2>
    <ul>
      <li><strong>Subscription Plan:</strong>  <span class="highlight">
        {{ $package['title'] }}
    </span></li>
      <li><strong>Subscription End Date:</strong> <span class="highlight">{{ $user->ending_date }}</span></li>
      {{-- <li><strong>Renewal Amount:</strong> <span class="highlight">{{ $event->$package['price'] }}</span></li> --}}
      <li><strong>Payment Method:</strong> <span class="highlight">Credit Card ending in XXXX</span></li>
    </ul>
    <p>If you wish to renew your subscription or have any questions regarding your subscription, please feel free to contact our support team.</p>
    <p>Thank you once again for your support!</p>
    <div class="footer">
      <p>If you have any questions, please <a href="mailto:support@example.com">contact support</a>.</p>
      <p>You are receiving this email because you are subscribed to our service. To unsubscribe, <a href="#">click here</a>.</p>
    </div>
  </div>
</body>
</html>
