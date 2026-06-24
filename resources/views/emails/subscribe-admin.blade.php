<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>New Newsletter Subscription</title>
</head>

<body style="font-family:Arial,sans-serif;background:#f5f5f5;padding:20px;">

    
    <div style="max-width:600px;margin:auto;background:#fff;border-radius:10px;overflow:hidden;">

        <div style="background:#960917;padding:20px;text-align:center;">
            <img src="https://churihouse.technocoderz.com/images/logo/logo.png" alt="Churi House"
                style="max-width:160px;">
        </div>

        <div style="padding:30px;">
            <h2 style="color:#960917;">New Newsletter Subscription</h2>

            <p>A new user has subscribed to the Churi House newsletter.</p>

            <table width="100%" cellpadding="10" cellspacing="0" style="margin-top:20px;">
                <tr style="background:#f8f8f8;">
                    <td><strong>Email</strong></td>
                    <td>{{ $subscriber->email }}</td>
                </tr>

                <tr>
                    <td><strong>Subscribed On</strong></td>
                    <td>{{ $subscriber->created_at->format('d M Y, h:i A') }}</td>
                </tr>
            </table>
        </div>

    </div>
    

</body>

</html>