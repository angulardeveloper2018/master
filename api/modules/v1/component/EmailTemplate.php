<?php
namespace api\modules\v1\component;
use Yii;
use yii\base\NotSupportedException;
use \yii\web\IdentityInterface;

/**
 * THis component is used for return the response for any API
 * 
 */
class EmailTemplate 
{
    public function ActivationEmailTemplate($userName,$activationLink)
    {
        $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                            <title>Account Activation Email</title>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                        </head>
                        <body style="font-family:Verdana,Helvetica;">
                            <table style="margin-left:120px">
                                <tr>
                                    <td></td>
                                    <td  width="550">
                                        <div >
                                            <table style="background: #fff;border: 1px solid #e9e9e9;border-radius: 3px;" width="100%" cellpadding="0" cellspacing="0">
                                                <tr> 
                                                    <td style="padding: 20px;">
                                                        <table  cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 20px 0;">
                                                                        <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Welcome to</h2>
                                                                        <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Bid Sigma</h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 0 20px; ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    Hello ' . $userName . ',
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    Thanks you for you registration.
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;">
                                                                    We may need to send you critical information about our service and it is important that we have an accurate email address.

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 0 20px; text-align: center;" class="content-block aligncenter">
                                                                    <a href="'.$activationLink.'" style="text-decoration: none;color: #FFF;background-color: #1ab394;border: solid #1ab394;border-width: 5px 10px;
                                                                       line-height: 2;
                                                                       font-weight: bold;
                                                                       text-align: center;
                                                                       cursor: pointer;
                                                                       display: inline-block;
                                                                       border-radius: 5px;
                                                                       text-transform: capitalize;">Confirm email address</a>
                                                                </td>
                                                            </tr>
                                                            <tr style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 40px 0;line-height: 1.6;">
                                                                <td style="padding:10px;font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;color:#fff;">
                                                                    Office Address: Sapath - III, 380054 Ahmedabad <br>
                                                                    Mailing address: Sapath - III, 0484 Ahmedabad <br>
                                                                    <a style="color:#fff !important" href=""> Email: support@kanhasoft.com</a> <span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </body>
                    </html>';
        return $content;
    }
    
    public function ResetPasswordEmailTemplate($userName,$activationLink)
    {
        $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Reset Password link</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="font-family:Verdana,Helvetica;">
        <table style="margin-left:120px">
            <tr>
                <td></td>
                <td  width="550">
                    <div >
                        <table style="background: #fff;border: 1px solid #e9e9e9;border-radius: 3px;" width="100%" cellpadding="0" cellspacing="0">
                            <tr> 
                                <td style="padding: 20px;">
                                    <table  cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 20px 0;">
                                                    <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Welcome to</h2>
                                                    <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Bid Sigma</h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 20px; ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                Hello '.$userName.',
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                You recently request to reset your account password .Please click on below button to reset you password
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;">
                                                This link will be expiring within one time.If you did not request a password reset, please ignore this email.

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 20px; text-align: center;" class="content-block aligncenter">
                                                <a href="'.$activationLink.'" style="text-decoration: none;color: #FFF;background-color: #1ab394;border: solid #1ab394;border-width: 5px 10px;
                                                   line-height: 2;
                                                   font-weight: bold;
                                                   text-align: center;
                                                   cursor: pointer;
                                                   display: inline-block;
                                                   border-radius: 5px;
                                                   text-transform: capitalize;" class="btn-primary">Reset your password</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;">
                                                Thanks

                                            </td>
                                        </tr>
                                        <tr style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 40px 0;line-height: 1.6;">
                                            <td style="padding:10px;font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;color:#fff;">
                                                Office Address: Sapath - III, 380054 Ahmedabad <br>
                                                Mailing address: Sapath - III, 0484 Ahmedabad <br>
                                                <a style="color:#fff !important" href=""> Email: support@kanhasoft.com</a> <span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
';
        return $content;
    }
    
    
    public function ActivationEmailTemplateManualUser($userName,$email,$password,$activationLink)
    {
        $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                            <title>Account Activation Email</title>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                        </head>
                        <body style="font-family:Verdana,Helvetica;">
                            <table style="margin-left:120px">
                                <tr>
                                    <td></td>
                                    <td  width="550">
                                        <div >
                                            <table style="background: #fff;border: 1px solid #e9e9e9;border-radius: 3px;" width="100%" cellpadding="0" cellspacing="0">
                                                <tr> 
                                                    <td style="padding: 20px;">
                                                        <table  cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 20px 0;">
                                                                        <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Welcome to</h2>
                                                                        <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Bid Sigma</h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 0 20px; ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    Hello ' . $userName . ',
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    Thanks you for you registration.
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;">
                                                                    We may need to send you critical information about our service and it is important that we have an accurate email address.

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 0 20px; text-align: center;" class="content-block aligncenter">
                                                                    <a href="'.$activationLink.'" style="text-decoration: none;color: #FFF;background-color: #1ab394;border: solid #1ab394;border-width: 5px 10px;
                                                                       line-height: 2;
                                                                       font-weight: bold;
                                                                       text-align: center;
                                                                       cursor: pointer;
                                                                       display: inline-block;
                                                                       border-radius: 5px;
                                                                       text-transform: capitalize;">Confirm email address</a>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    After confirmation please use below credentials to login into your account. once you login please change your password.
                                                                </td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    Email : '.$email.'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    password : '.$password.'
                                                                </td>
                                                            </tr>
                                                            <tr style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 40px 0;line-height: 1.6;">
                                                                <td style="padding:10px;font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;color:#fff;">
                                                                    Office Address: Sapath - III, 380054 Ahmedabad <br>
                                                                    Mailing address: Sapath - III, 0484 Ahmedabad <br>
                                                                    <a style="color:#fff !important" href=""> Email: support@kanhasoft.com</a> <span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </body>
                    </html>';
        return $content;
    }
    
    public function ActivationEmailTemplateAdminUser($userName,$email,$password,$activationLink)
    {
        $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                            <title>Account Activation Email</title>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                        </head>
                        <body style="font-family:Verdana,Helvetica;">
                            <table style="margin-left:120px">
                                <tr>
                                    <td></td>
                                    <td  width="550">
                                        <div >
                                            <table style="background: #fff;border: 1px solid #e9e9e9;border-radius: 3px;" width="100%" cellpadding="0" cellspacing="0">
                                                <tr> 
                                                    <td style="padding: 20px;">
                                                        <table  cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 20px 0;">
                                                                        <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Welcome to</h2>
                                                                        <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Bid Sigma</h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 0 20px; ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    Hello ' . $userName . ',
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    You have beed added to bidsigma admin user please use below link to access admin panel and below there is your credential which you can use to login
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style="padding: 0 0 20px; text-align: center;" class="content-block aligncenter">
                                                                    <a href="'.$activationLink.'" style="text-decoration: none;color: #FFF;background-color: #1ab394;border: solid #1ab394;border-width: 5px 10px;
                                                                       line-height: 2;
                                                                       font-weight: bold;
                                                                       text-align: center;
                                                                       cursor: pointer;
                                                                       display: inline-block;
                                                                       border-radius: 5px;
                                                                       text-transform: capitalize;">Confirm email address</a>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    After confirmation please use below credentials to login into your account. once you login please change your password.
                                                                </td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    Email : '.$email.'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    password : '.$password.'
                                                                </td>
                                                            </tr>
                                                            <tr style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 40px 0;line-height: 1.6;">
                                                                <td style="padding:10px;font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;color:#fff;">
                                                                    Office Address: Sapath - III, 380054 Ahmedabad <br>
                                                                    Mailing address: Sapath - III, 0484 Ahmedabad <br>
                                                                    <a style="color:#fff !important" href=""> Email: support@kanhasoft.com</a> <span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </body>
                    </html>';
        return $content;
    }
    
    public function ShareProjectEmailTemplate($email,$message,$projectLink)
    {
        $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                            <title>Shared Project Details</title>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                        </head>
                        <body style="font-family:Verdana,Helvetica;">
                            <table style="margin-left:120px">
                                <tr>
                                    <td></td>
                                    <td  width="550">
                                        <div >
                                            <table style="background: #fff;border: 1px solid #e9e9e9;border-radius: 3px;" width="100%" cellpadding="0" cellspacing="0">
                                                <tr> 
                                                    <td style="padding: 20px;">
                                                        <table  cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 20px 0;">
                                                                        <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Welcome to</h2>
                                                                        <h2 style="color:#fff;font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;margin: 0px;font-weight: 800;">Bid Sigma</h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 0 20px; ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;" >
                                                                    Hello ' . $email . ',
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;">
                                                                    <p>'.$message.'</p>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;padding: 0 0 20px;line-height: 1.6;text-align: justify;">
                                                                    to view the project details please click on below Project Details button.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 0 20px; text-align: center;" class="content-block aligncenter">
                                                                    <a href="'.$projectLink.'" style="text-decoration: none;color: #FFF;background-color: #1ab394;border: solid #1ab394;border-width: 5px 10px;
                                                                       line-height: 2;
                                                                       font-weight: bold;
                                                                       text-align: center;
                                                                       cursor: pointer;
                                                                       display: inline-block;
                                                                       border-radius: 5px;
                                                                       text-transform: capitalize;">Project Details</a>
                                                                </td>
                                                            </tr>
                                                            <tr style="margin-bottom: 20px;width: 100%;background-color:#1ab394;color:#fff;text-align:center;padding: 10px 0 40px 0;line-height: 1.6;">
                                                                <td style="padding:10px;font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;font-size: 14px;color:#fff;">
                                                                    Office Address: Sapath - III, 380054 Ahmedabad <br>
                                                                    Mailing address: Sapath - III, 0484 Ahmedabad <br>
                                                                    <a style="color:#fff !important" href=""> Email: support@kanhasoft.com</a> <span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </body>
                    </html>';
        return $content;
    }
}
