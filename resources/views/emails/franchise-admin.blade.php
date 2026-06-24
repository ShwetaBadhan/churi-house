<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>New Franchise Request Received</title>
</head>

<body style="margin:0;padding:20px;background:#f5f5f5;font-family:Arial,sans-serif;">

    
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="650" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:10px;overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background:#960917;padding:25px;">
                            <img src="https://churihouse.technocoderz.com/images/logo/logo.png" alt="Churi House"
                                style="max-width:160px;">
                        </td>
                    </tr>

                    <!-- Title -->
                    <tr>
                        <td style="padding:30px;">
                            <h2 style="margin-top:0;color:#960917;">
                                New Franchise Application Received
                            </h2>

                            <p style="color:#555;">
                                A new franchise enquiry has been submitted through the Churi House website.
                            </p>

                            <table width="100%" cellpadding="12" cellspacing="0"
                                style="border-collapse:collapse;margin-top:20px;">

                                <tr style="background:#f8f8f8;">
                                    <td><strong>Name</strong></td>
                                    <td>{{ $franchise->name }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td>{{ $franchise->email }}</td>
                                </tr>

                                <tr style="background:#f8f8f8;">
                                    <td><strong>Phone</strong></td>
                                    <td>{{ $franchise->phone }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Preferred Location</strong></td>
                                    <td>{{ $franchise->location ?? 'N/A' }}</td>
                                </tr>

                                <tr style="background:#f8f8f8;">
                                    <td><strong>Address</strong></td>
                                    <td>{{ $franchise->address ?? 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Franchise Type</strong></td>
                                    <td>{{ $franchise->type ?? 'N/A' }}</td>
                                </tr>

                                <tr style="background:#f8f8f8;">
                                    <td><strong>Message</strong></td>
                                    <td>{{ $franchise->message ?? 'N/A' }}</td>
                                </tr>

                               

                                <tr style="background:#f8f8f8;">
                                    <td><strong>Submitted On</strong></td>
                                    <td>{{ $franchise->created_at->format('d M Y, h:i A') }}</td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
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