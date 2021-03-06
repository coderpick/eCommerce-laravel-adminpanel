{{--*/ $logo = \App\CommonSettings::where('option_key','logo')->select('option_value')->first() /*--}}
<div id="main_area" style="width: 100%;height: 100%;text-align:center;background-color:#f3f3f3;font-family:roboto,sans-serif;font-size:14px;margin:0;color:#444;padding:20px;">

    <div class="top_area" style="width: 95%;height: 70%;padding-top: 5%;border-radius:5px;background-color:#ffffff;">
        <div class="header"><img src="{{asset($logo->option_value)}}" style="width: 29%;height: auto;margin: 0 auto;/*! text-align: center; */display: block;"></div>
        <div class="content">

            <h3>Click bellow button to reset your password</h3>
            <h5 style="color: red">[Your link will be expired within 60 minute ]</h5>

            <table style="width: 21%;margin: 0 auto;padding-top: 3%;color:##222;font-size:15px;line-height:25px;font-weight:bold;/*! padding:0; *//*! margin:0; *//*! background: #222; */">


                <tr>
                    <td>
                        <div style="padding:24%;text-align:center;width:10%;margin: 0 auto;margin-top: -20%;">
                            <a target="_blink" href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}" class="buybtn" style="color: #fff;text-decoration: none;font-family: Arial, sans-serif;background: -webkit-gradient(linear,left top,left bottom,color-stop(#ABD07E,0),color-stop(#ABD07E,1));background: -webkit-linear-gradient(top, #ABD07E 0%, #ABD07E 100%);background: -moz-linear-gradient(top, #ABD07E 0%, #ABD07E 100%);background: -o-linear-gradient(top, #ff8400 0%, #ff6600 100%);background: linear-gradient(top, #ff8400 0%, #ff6600 100%);padding-left: 20px;padding-right: 15px;height: 45px;display: inline-block;position: relative;border: 0px solid #5282a9;-webkit-box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8) inset, 1px 1px 3px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8) inset, 1px 1px 3px rgba(0, 0, 0, 0.2);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8) inset, 1px 1px 3px rgba(0, 0, 0, 0.2);-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;float: left;clear: both;margin: 10px 0;overflow: hidden;-webkit-transition: all 0.3s linear;-moz-transition: all 0.3s linear;-o-transition: all 0.3s linear;transition: all 0.3s linear">
                                <span class="buybtn-text" style="padding-top: 10px;display: block;font-size: 18px;white-space: nowrap;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.3);color: #4A3719;-webkit-transition: all 0.2s linear;-moz-transition: all 0.2s linear;-o-transition: all 0.2s linear;transition: all 0.2s linear;text-align: center;">Click Here To Reset Password</span>

                            </a>

                        </div>
                    </td>
                </tr>
            </table>

        </div>
    </div>
    <div class="bottom_area" style="width: 95%;height: 20%;">

        <div style="font-size:14px;/*! width:624px; *//*! margin:0px auto; */padding:10px 0px;background-image:url({{secure_asset('frontend/images/email-template/footer.png', null, $attributes = [])}});background-color:rgb(243,243,243);background-size:initial;background-origin:initial;background-clip:initial;background-position:50% 100%;background-repeat:no-repeat;background-repeat:no-repeat;background-repeat: no-repeat;background-size: contain;background-position: center;">
            <ul style="font-size:0;margin-top:0;list-style:none;padding:0;line-height:1">
                <li style="display:inline-block;vertical-align:middle;padding:5px">
                    <p style="font-size:25px;font-style:italic;font-weight:300;line-height:1;margin:0">Stay in touch</p>
                </li>
                <li style="display:inline-block;vertical-align:middle;padding:5px">
						<span class="m_4929081088826337892sg-image" style="float:none;display:block;text-align:center">
							<a href="" target="_blank">
								<img alt="facebook" src="{{asset('assets/frontend/images/email-template/facebook.png')}}" style="border:0px;width:32px;height:32px" class="CToWUd" width="32" height="32">
							</a>
						</span>
                </li>
            </ul>
            <p style="color:#8f9495;font-size:13px;line-height:1;margin:15px 0 20px">Thank You For Being With Us </p>
        </div>

    </div>

</div>


