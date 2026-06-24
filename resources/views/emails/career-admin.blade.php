<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>New Career Application Received</title>
</head>

<body style="margin:0;padding:20px;background:#f5f5f5;font-family:Arial,sans-serif;">


    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="650" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:10px;overflow:hidden;">

                    <tr>
                        <td align="center" style="background:#960917;padding:25px;">
                            <img src="https://churihouse.technocoderz.com/images/logo/logo.png" alt="Churi House"
                                style="max-width:160px;">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:30px;">
                            <h2 style="margin-top:0;color:#960917;">
                                New Career Application Received
                            </h2>

                            <p style="color:#555;">
                                A new career application has been submitted through the Churi House website.
                            </p>

                            <table width="100%" cellpadding="12" cellspacing="0"
                                style="border-collapse:collapse;margin-top:20px;">

                                <tr style="background:#f8f8f8;">
                                    <td><strong>Name</strong></td>
                                    <td>{{ $career->name }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td>{{ $career->email }}</td>
                                </tr>

                                <tr style="background:#f8f8f8;">
                                    <td><strong>Phone</strong></td>
                                    <td>{{ $career->phone }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Position Applied For</strong></td>
                                    <td>{{ $career->position }}</td>
                                </tr>

                                <tr style="background:#f8f8f8;">
                                    <td><strong>Experience</strong></td>
                                    <td>{{ $career->experience }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Location</strong></td>
                                    <td>{{ $career->location }}</td>
                                </tr>

                                
                                <tr>
                                    <td><strong>Submitted On</strong></td>
                                    <td>{{ $career->created_at->format('d M Y, h:i A') }}</td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="background:#f8f8f8;padding:20px;color:#777;font-size:13px;">
                            This is an automated notification from the Churi House website.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>


</body>

</html>