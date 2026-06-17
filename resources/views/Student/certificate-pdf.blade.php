<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Certificate</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            text-align: center;
            padding: 50px;
            border: 10px solid #1f2937;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 18px;
            color: #555;
        }

        .name {
            font-size: 36px;
            font-weight: bold;
            margin: 40px 0 20px;
        }

        .course {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
        }

        .details {
            margin-top: 50px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <h1>CERTIFICATE OF COMPLETION</h1>

    <p class="subtitle">PATHWISE AI-Powered E-Learning Platform</p>

    <p>This certificate is proudly presented to</p>

    <div class="name">
        {{ $certificate->student->name }}
    </div>

    <p>for successfully completing</p>

    <div class="course">
        {{ $certificate->course->title }}
    </div>

    <div class="details">
        <p>Certificate No: {{ $certificate->certificate_number }}</p>
        <p>Date Issued: {{ \Carbon\Carbon::parse($certificate->issued_date)->format('F d, Y') }}</p>
    </div>

</body>
</html>