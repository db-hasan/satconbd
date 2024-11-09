<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission</title>
</head>

<body>
    <p><strong>Client Name:</strong> {{ $user['name'] }}</p>
    <p><strong>Phone Number :</strong> {{ $user['number'] }}</p>
    <p><strong>Client Type :</strong> {{ $user['type'] }}</p>
    <p><strong>Message :</strong> {{ $user['message'] }}</p>
</body>

</html>