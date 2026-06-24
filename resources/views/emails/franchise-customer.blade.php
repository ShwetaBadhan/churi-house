<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Franchise Application Received - Churi House</title>
</head>

<body style="margin:0;padding:0;background:#f8f5f0;font-family:Arial,Helvetica,sans-serif;">

    
    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f8f5f0;padding:30px 15px;">
        <tr>
            <td align="center">

                <table width="650" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 5px 20px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background:#960917;padding:35px 20px;">
                            <img src="https://churihouse.technocoderz.com/images/logo/logo.png" alt="Churi House"
                                style="max-width:180px;height:auto;display:block;margin-bottom:15px;">

                            <h1 style="margin:0;color:#ffffff;font-size:28px;font-weight:bold;">
                                Franchise Application Received
                            </h1>

                            <p style="margin:10px 0 0;color:#f3d6a3;font-size:16px;">
                                Thank you for your interest in partnering with Churi House
                            </p>
                        </td>
                    </tr>

                    <!-- Greeting -->
                    <tr>
                        <td style="padding:35px 40px 20px;">
                            <h2 style="margin-top:0;color:#960917;">
                                Hello {{ $franchise->name }},
                            </h2>

                            <p style="font-size:16px;line-height:1.8;color:#555;">
                                Thank you for submitting your franchise application.
                                We are excited about your interest in becoming a part of the
                                <strong>Churi House</strong> family.
                            </p>

                            <p style="font-size:16px;line-height:1.8;color:#555;">
                                Our team has received your enquiry and will review the details shortly.
                                If your profile matches our current expansion plans, a representative
                                will get in touch with you.
                            </p>
                        </td>
                    </tr>

                    <!-- Application Details -->
                    <tr>
                        <td style="padding:0 40px 30px;">
                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="background:#faf7f2;border:1px solid #e8dfd4;border-radius:10px;">

                                <tr>
                                    <td colspan="2"
                                        style="background:#960917;color:#fff;padding:15px 20px;font-size:18px;font-weight:bold;">
                                        Your Application Details
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Name</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $franchise->name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Email</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $franchise->email }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Phone</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $franchise->phone }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Preferred Location</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $franchise->location ?? 'N/A' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Address</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $franchise->address ?? 'N/A' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        <strong>Franchise Type</strong>
                                    </td>
                                    <td style="padding:15px 20px;border-bottom:1px solid #eee;">
                                        {{ $franchise->type ?? 'N/A' }}
                                    </td>
                                </tr>

                                @if($franchise->message)
                                    <tr>
                                        <td style="padding:15px 20px;">
                                            <strong>Message</strong>
                                        </td>
                                        <td style="padding:15px 20px;">
                                            {{ $franchise->message }}
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
                                We appreciate your interest in growing with Churi House.
                                Our team will contact you if additional information is required.
                            </p>

                            <p style="font-size:15px;line-height:1.8;color:#555;">
                                Thank you for considering Churi House as your business partner.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background:#960917;padding:25px;color:#ffffff;">
                            <h3 style="margin:0 0 10px;">
                                Churi House
                            </h3>

                            <p style="margin:0;color:#f3d6a3;font-size:14px;">
                                Timeless Elegance • Trusted Partnership • Growing Together
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