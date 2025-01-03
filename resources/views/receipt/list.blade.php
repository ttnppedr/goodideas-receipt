<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>好想股份有限公司 綜合所得收據</title>
    <meta name="generator" content="LibreOffice 6.1.5.2 (Linux)">
    <meta name="created" content="00:00:00">
    <meta name="changed" content="00:00:00">
    <style type="text/css">
        @media print {
            @page {
                size: A4 portrait;
                margin: 10mm;
            }

            body {
                margin: 0;
                padding: 0;
                word-wrap: break-word;
            }
        }

        body {
            -webkit-print-color-adjust: exact !important;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        body>div {
            width: 100%;
            padding-top: calc(100vh - 1500px + 5mm);
        }


        p {
            line-height: 115%;
            background: transparent;
            padding: 8px;
            margin: 0 !important;
        }

        table {
            margin: 0 auto;
            page-break-before: always;
        }

        table,
        th,
        td {
            border: 1px solid;
            vertical-align: middle;
            padding: 0;
        }

        .dollar {
            display: inline-block;
            width: 20px;
            border-bottom: 1px solid #000000;
            text-align: center;
        }
    </style>
</head>

<body>
{{--{{dd( $receiptGroupByDate )}}--}}
@foreach($receiptGroupByDate as $date => $receipts)
    @for($i = 0; $i < count($receipts); $i = $i + 6)
<div>
    <table width="900" cellpadding="2" cellspacing="0">
        <colgroup>
            <col width="105">
            <col width="58">
            <col width="88">
            <col width="77">
            <col width="38">
            <col width="6">
            <col width="3">
            <col width="3">
            <col width="93">
            <col width="3">
            <col width="15">
            <col width="3">
            <col width="38">
            <col width="133">
        </colgroup>
        <tbody>
        <tr>
            <td colspan="14" height="42" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p style="font-size: 14pt; text-align: center;">
                    <b>好想股份有限公司 綜合所得收據</b>
                </p>
            </td>
        </tr>
        <tr>
            <td width="105" height="25" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>受領人姓名</span>
                </p>
            </td>
            <td colspan="7" width="297" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span>{{$member->real_name}}</span>
                </p>
            </td>
            <td colspan="3" width="100" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>身分證字號</span>
                </p>
            </td>
            <td colspan="4" width="201" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span>{{$member->identifier}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width="105" height="21" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>戶籍地址</span>
                </p>
            </td>
            <td colspan="13" width="606" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span>{{$member->address}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width="105" height="25" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>服務單位</span>
                </p>
            </td>
            <td colspan="7" width="297" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span>好想股份有限公司</span>
                </p>
            </td>
            <td colspan="2" width="100" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>連絡電話</span>
                </p>
            </td>
            <td colspan="4" width="201" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span>{{$member->cellphone}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="4" width="259" height="19" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-indent: -46px;text-align: center;">
                    <span>銀行名稱(若有匯款手續費另扣)</span>
                </p>
            </td>
            <td colspan="11" width="452" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>{{$member->bank_name}}</p>
            </td>
        </tr>
        <tr>
            <td width="105" height="25" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>銀行分行</span>
                </p>
            </td>
            <td colspan="7" width="297" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>{{$member->bank_branch}}</p>
            </td>
            <td colspan="2" width="100" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>分行代碼</span>
                </p>
            </td>
            <td colspan="4" width="201" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>{{$member->bank_branch_code}}</p>
            </td>
        </tr>
        <tr>
            <td width="105" height="19" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>銀行帳號</span>
                </p>
            </td>
            <td colspan="13" width="606" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>{{$member->bank_account}}</p>
            </td>
        </tr>
        <tr>
            <td width="105" height="23" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>請款日期</span>
                </p>
            </td>
            <td colspan="10" width="420" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>請款事由</span>
                </p>
            </td>
            <td colspan="3" width="182" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>請款金額</span>
                </p>
            </td>
        </tr>

        <tr>
            <td width="105" height="23" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt;height: 22px;">{{ isset($receipts[$i]) ? Carbon\Carbon::make($receipts[$i]['date'])->format('Y/m/d') : '' }}</span>
                </p>
            </td>
            <td colspan="10" width="420" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i]) ? $receipts[$i]['title'] : '' }}</span>
                </p>
            </td>
            <td colspan="3" width="182" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i]) ? Illuminate\Support\Number::format($receipts[$i]['amount']) : '' }}</span>
                </p>
            </td>
        </tr>

        <tr>
            <td width="105" height="23" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt;height: 22px;">{{ isset($receipts[$i+1]) ? Carbon\Carbon::make($receipts[$i+1]['date'])->format('Y/m/d') : '' }}</span>
                </p>
            </td>
            <td colspan="10" width="420" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+1]) ? $receipts[$i+1]['title'] : '' }}</span>
                </p>
            </td>
            <td colspan="3" width="182" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+1]) ? Illuminate\Support\Number::format($receipts[$i+1]['amount']) : '' }}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width="105" height="23" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt;height: 22px;">{{ isset($receipts[$i+2]) ? Carbon\Carbon::make($receipts[$i+2]['date'])->format('Y/m/d') : '' }}</span>
                </p>
            </td>
            <td colspan="10" width="420" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+2]) ? $receipts[$i+2]['title'] : '' }}</span>
                </p>
            </td>
            <td colspan="3" width="182" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+2]) ? Illuminate\Support\Number::format($receipts[$i+2]['amount']) : '' }}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width="105" height="23" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt;height: 22px;">{{ isset($receipts[$i+3]) ? Carbon\Carbon::make($receipts[$i+3]['date'])->format('Y/m/d') : '' }}</span>
                </p>
            </td>
            <td colspan="10" width="420" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+3]) ? $receipts[$i+3]['title'] : '' }}</span>
                </p>
            </td>
            <td colspan="3" width="182" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+3]) ? Illuminate\Support\Number::format($receipts[$i+3]['amount']) : '' }}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width="105" height="23" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt;height: 22px;">{{ isset($receipts[$i+4]) ? Carbon\Carbon::make($receipts[$i+4]['date'])->format('Y/m/d') : '' }}</span>
                </p>
            </td>
            <td colspan="10" width="420" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+4]) ? $receipts[$i+4]['title'] : '' }}</span>
                </p>
            </td>
            <td colspan="3" width="182" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+4]) ? Illuminate\Support\Number::format($receipts[$i+4]['amount']) : '' }}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width="105" height="23" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt;height: 22px;">{{ isset($receipts[$i+5]) ? Carbon\Carbon::make($receipts[$i+5]['date'])->format('Y/m/d') : '' }}</span>
                </p>
            </td>
            <td colspan="10" width="420" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+5]) ? $receipts[$i+5]['title'] : '' }}</span>
                </p>
            </td>
            <td colspan="3" width="182" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p
                        style="text-align: center; display: flex; justify-content: center; align-items: center; height: 30px;">
                    <span style="font-size: 12pt">{{ isset($receipts[$i+5]) ? Illuminate\Support\Number::format($receipts[$i+5]['amount']) : '' }}</span>
                </p>
            </td>
        </tr>

        <tr>
            <td colspan="14" width="715" height="12" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p style="font-size: 14pt;">
                            <span>請款金額 (總額) ：
                                <span class="dollar">{{App\Models\Income::sumInChinese($receipts, $i, 6)}}</span> 佰
                                <span class="dollar">{{App\Models\Income::sumInChinese($receipts, $i, 5)}}</span> 拾
                                <span class="dollar">{{App\Models\Income::sumInChinese($receipts, $i, 4)}}</span> 萬
                                <span class="dollar">{{App\Models\Income::sumInChinese($receipts, $i, 3)}}</span> 仟
                                <span class="dollar">{{App\Models\Income::sumInChinese($receipts, $i, 2)}}</span> 佰
                                <span class="dollar">{{App\Models\Income::sumInChinese($receipts, $i, 1)}}</span> 拾
                                <span class="dollar">{{App\Models\Income::sumInChinese($receipts, $i, 0)}}</span> 元整。
                                <u>$ {{App\Models\Income::sumAndFormat($receipts, $i)}}</u>
                            </span>
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="2" colspan="2" width="167" height="2" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>所得類別</span>
                </p>
            </td>
            <td rowspan="2" colspan="2" width="169" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span>說明</span>
                </p>
            </td>
            <td colspan="8" width="371" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span style="font-size: 12pt">稅率 / 稅額</span>
                </p>
            </td>
            <td colspan="2" width="200" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;">
                    <span style="font-size: 12pt">二代健保保費</span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="4" width="192" bgcolor="#e6e6e6" style="background: #e6e6e6">
                <p style="text-align: center;" style="margin-bottom: 0in; padding: 0">
                    <span style="font-size: 12pt">居住者</span>
                </p>
                <p style="text-align: center;" style="padding: 0;">
                            <span style="font-size: 12pt">
                                一課稅年度住居住滿 183 天
                            </span>
                </p>
            </td>
            <td colspan="4" width="175" bgcolor="#e6e6e6" style="background: #e6e6e6; padding: 8px 0;">
                <p style="text-align: center;" style="margin-bottom: 0in; padding: 0;">
                    <span style="font-size: 12pt">非居住者</span>
                </p>
                <p style="text-align: center;" style="padding: 0;">
                            <span style="font-size: 12pt">
                                一課稅年度居住未滿 183 天
                            </span>
                </p>
            </td>
            <td colspan="2" width="175" bgcolor="#e6e6e6" style="background: #e6e6e6; padding: 8px 0;">
                <p style="text-align: center;" style="padding: 0;">
                            <span style="font-size: 12pt">
                                代扣補充保費
                            </span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="167" height="25" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span style="font-size: 12pt">執行業務所得[9A]</span>
                </p>
            </td>
            <td colspan="2" width="169" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span style="font-size: 12pt; line-height: 20px;">律師、會計師、建築師、技師、地政士、記帳士等</span>
                </p>
            </td>
            <td colspan="2" width="50" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span style="font-size: 12pt">10%</span>
                </p>
            </td>
            <td colspan="2" width="50" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span style="font-size: 12pt">{{App\Models\Income::sumAndFormatFor10($receipts, $i)}}</span>
                </p>
            </td>
            <td colspan="2" width="50" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span style="font-size: 12pt">20%</span>
                </p>
            </td>
            <td colspan="2"  width="100"  style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <br>
                </p>
            </td>
            <td colspan="1" width="110" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span style="font-size: 12pt">2.11%</span>
                </p>
            </td>
            <td colspan="1" width="50"  style="border: 1px solid #000000; padding: 0in 0.02in">
                <p>
                    <span style="font-size: 12pt">{{App\Models\Income::sumAndFormatFor211($receipts, $i)}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="14" width="715" height="25" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p style="margin-bottom: 0in; font-size: 12pt">
                            <span> [ 註 1] 居住者：稅額不超過 $2,000 者可不預先扣繳。 非固定薪資自 104 年開始，起扣額為 73,001 元</span>
                </p>
                <p>
                            <span style="font-size: 12pt">
                                [ 註 2] 非居住者：請領所得屬 [50] 且不超過 30,012 元者，扣繳 6% ; 超過者全數扣繳 18% 。
                            </span>
                </p>
                <p>
                            <span style="font-size: 12pt">
                                [ 註 3] 補充保費：執行業務所得，單日超過 20,000元者，需扣補充保費 2.11%
                            </span>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="14" width="715" height="250" style="border: 1px solid #000000; ">
                <div style="display: flex; height: 100%;">
                    <div
                            style="display:flex; align-items: center; justify-content: center; height: 100%; width: 100%; border-right: 2px solid #000000;">
                        <img style="width: 360px; height: 236px;" src="{{$member->firstImage}}" alt="身份證正面圖片">
                    </div>
                    <div
                            style="display:flex; align-items: center; justify-content: center; height: 100%; width: 100%;">
                        <img style="width: 360px; height: 236px;" src="{{$member->secondImage}}" alt="身份證反面圖片">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="14" width="715" height="84" style="border: 1px solid #000000; padding: 0in 0.02in">
                <p style="margin-bottom: 0in">
                            <span style="font-size: 12pt">上列款項已如數收訖， <b>並檢附本人身分證正反面影本乙份</b> ，</span>
                </p>
                <p style="margin-bottom: 0in">
                    <span style="font-size: 12pt">此致 好想股份有限公司</span>
                </p>
                <div style="display: inline-flex;">
                    <p style="text-indent: 2.99in">
                                <span style="font-size: 12pt">
                                    受領人簽章：
                                </span>
                    </p>
                    <p style="text-indent: 1.99in">
                                <span style="font-size: 12pt">
                                    受領日期：
                                </span>
                    </p>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
    @endfor
@endforeach
</body>

</html>
