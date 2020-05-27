<!DOCtype>
<html>
<body>
    <h5>Dear {{ $contactMessage->name }}</h5>
    <p>I hope this mail finds you well.</p>

    <pre>{{ $reply }}</pre>

    <p>Best Regards,</p>
    <p>{{ $adminName }}</p>
</body>
</html>



