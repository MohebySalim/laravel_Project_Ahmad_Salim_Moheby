
<!DOCTYPE html>
<html lang="AF" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        table, td, div, h1, p {font-family: Arial, sans-serif;}
    </style>
</head>
<body style="margin:0;padding:0;">
<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
        <td align="center" style="padding:0;">
            <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:#A42A3C;">
                        <img src="https://safety-committee.org/images/home/logo2.png" alt="" width="300" style="height:auto;display:block;" />
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding:18px 0 5px 0;background:#3F1317; color: #fff;">
                        <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Case Managment System</h1>
                    </td>
                </tr>
                @if($clintData['description'] == null)
                <tr>
                    <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                            <tr>
                                <td style="padding:15px 0 20px 0;color:#153643; text-align: right; font-weight: bold;">
                                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">متقاضی محترم! </h1>
                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                        سپاسگزاریم از اینکه قضیه خود را با کمیته مصونیت خبرنگاران افغان ثبت نمودید. در صورت نیاز، دیپاتمنت قضایای کمیته برای معلومات بیشتر با شما به تماس خواهد شد.
                                        برای معلومات در مورد پیشرفت و وضعیت قضیه تان به لینک ذیل مراجعه نموده و شماره قضیه و رمز ورد تان را وارد نمایید</p>
                                </td>
                            <tr>
                            <tr>
                                <td style="padding:15px 0 20px 0;color:#153643; text-align: right; font-weight: bold; border-top:1px solid #ccc;">
                                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">ښاغلیه او اغلې!</h1>
                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                        له افغان خبریالانو خوندیتوب کمېټې سره مو د قضیې د ثبت له امله مننه. د اړتیا پر مهال به د کمېټې د قضیو ډیپارټمنټ د لا زیاتو مالوماتو په موخه له تاسي سره په اړیکه کې شي.
                                        د خپلې قضیې د وضعیت او پرمختګ د معلومولو په موخه لاندې لینک ته مراجعه وکړئ او د قضیې ګڼه او پاسورډ مو دننه کړئ
                                    </p>
                                </td>
                            <tr>
                            <tr>
                                <td style="padding:15px 0 20px 0;color:#153643; border-top:1px solid #ccc;">
                                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Dear Applicant!</h1>
                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                        Thank you for registering your case with AJSC. If needed, AJSC Case Department will contact you for further information.
                                        Please use the Case Number and Password listed below to check your case processing and statues by clicking Check Your Case Status button.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding:18px 10px 5px 10px;background:#D8D8D8; color: #861B30; display: flex;justify-content: space-between;">
                                    <h3 style="font-size:15px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Password: {{ $clintData['n_id'] }}</h3>
                                    <h3 style="font-size:15px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Case Number: AJSC-00{{ $clintData['code'] }}</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @else
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:15px 0 20px 0;color:#153643; text-align: right; font-weight: bold;">
                                        <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">متقاضی محترم قضیه شما دنبال گردیده! </h1>
                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            {{ $clintData['description'] }}
                                        </p>
                                        <br>
                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            {{ $clintData['committe'] }}
                                        </p>
                                        <br>
                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            {{ $clintData['government'] }}
                                        </p>
                                        <br>
                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            {{ $clintData['judical'] }}
                                        </p>
                                        <br>
                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            {{ $clintData['legal'] }}
                                        </p>
                                        <br>
                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            {{ $clintData['conclusion'] }}
                                        </p>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endif
                <tr>
                    <td align="center" style="padding:18px 10px 5px 10px;background:#D8D8D8; color:#fff;">
                        <!--add the URL here-->
                        <a href="#" style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif; background: #861B30; padding: 15px 0px 15px 0px;width: 65%;">Check Your Case Status</a>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding:18px 10px 5px 10px;background:#3F1317; color: #3F1317;">
                        <h3 style="font-size:25px;margin:0 0 20px 0;font-family:Arial,sans-serif;color: #fff;font-weight: normal; padding: 15px 0px 15px 0px;">Knowing the Truth is Protecting the Truth</h3>
                    </td>
                </tr>
                <tr>
                    <td style="padding:30px;background:#A42A3C;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                            <tr>
                                <td style="padding:0;width:50%;" align="right">
                                    <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                                        <tr>
                                            <td style="padding:0 0 0 10px;width:38px;">
                                                <a href="http://www.twitter.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/tw_1.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                                            </td>
                                            <td style="padding:0 0 0 10px;width:38px;">
                                                <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="padding:0;width:50%;" align="left">
                                    <img src="https://safety-committee.org/images/home/logo2.png" alt="" width="300" style="height:auto;display:block;" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
