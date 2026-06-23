```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reservation Confirmation - Churi House</title>
</head>

<body style="margin:0;padding:0;background:#f8f5f0;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f8f5f0;padding:30px 15px;">
        <tr>
            <td align="center">

                <table width="650" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 5px 20px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background:#960917;padding:35px 20px;">
                            <img src="https://churihouse.technocoderz.com/images/logo/logo.png"
                                alt="Churi House"
                                style="max-width:180px;height:auto;display:block;margin-bottom:15px;">

                            <h1 style="margin:0;color:#ffffff;font-size:28px;font-weight:bold;">
                                Reservation Confirmed
                            </h1>

                            <p style="margin:10px 0 0;color:#f3d6a3;font-size:16px;">
                                Thank you for choosing Churi House
                            </p>
                        </td>
                    </tr>

                    <!-- Greeting -->
                    <tr>
                        <td style="padding:35px 40px 20px;">
                            <h2 style="margin-top:0;color:#960917;">
                                Hello {{ $reservation->name }},
                            </h2>

                            <p style="font-size:16px;line-height:1.8;color:#555;">
                                We're delighted to confirm your table reservation at
                                <strong>Churi House Restaurant</strong>.
                                We look forward to serving you an unforgettable dining experience.
                            </p>
                        </td>
                    </tr>

                    <!-- Reservation Details -->
                    <tr>
                        <td style="padding:0 40px 30px;">
                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="background:#faf7f2;border:1px solid #e8dfd4;border-radius:10px;">

                                <tr>
                                    <td colspan="2"
                                        style="background:#960917;color:#fff;padding:15px 20px;font-size:18px;font-weight:bold;">
                                        Reservation Details
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Name</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $reservation->name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Email</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $reservation->email }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Phone</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $reservation->phone }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Date</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ \Carbon\Carbon::parse($reservation->date)->format('d M Y') }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Time</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $reservation->time }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Guests</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $reservation->guests }}
                                    </td>
                                </tr>

                                @if($reservation->message)
                                <tr>
                                    <td style="padding:15px 20px;">
                                        <strong>Special Request</strong>
                                    </td>
                                    <td style="padding:15px 20px;">
                                        {{ $reservation->message }}
                                    </td>
                                </tr>
                                @endif

                            </table>
                        </td>
                    </tr>

                    <!-- Note -->
                    <tr>
                        <td style="padding:0 40px 30px;">
                            <p style="font-size:15px;line-height:1.8;color:#555;">
                                If you need to modify or cancel your reservation,
                                please contact us in advance.
                            </p>

                            <p style="font-size:15px;line-height:1.8;color:#555;">
                                We can't wait to welcome you and your guests.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background:#960917;padding:25px;color:#ffffff;">
                            <h3 style="margin:0 0 10px;">
                                Churi House Restaurant
                            </h3>

                            <p style="margin:0;color:#f3d6a3;font-size:14px;">
                                Authentic Flavors • Warm Hospitality • Memorable Dining
                            </p>

                            <p style="margin-top:15px;font-size:12px;color:#d8c2a0;">
                                © {{ date('Y') }} Churi House. All Rights Reserved.
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
```
