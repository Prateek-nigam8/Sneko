<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h2 {
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> {{ $details['name'] }}</p>
        <p><strong>Email:</strong> {{ $details['email'] }}</p>
        <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
        <p><strong>Subject:</strong> {{ $details['subject'] }}</p>
        <p><strong>Message:</strong> {{ $details['message'] }}</p>
    </div>
</body>
</html>