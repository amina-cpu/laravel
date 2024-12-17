<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Test Email</title>
</head>
<body>
    <h1>Test Send Email</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Button to send the email -->
    <form action="/send-email" method="GET">
        <button type="submit">Send Test Email</button>
    </form>
</body>
</html>
