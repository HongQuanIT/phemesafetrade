@extends('layouts.app-master')

@section('content')
    <div class="right_col" id="dashboard-v2" role="main">
        <div class="spacer_30"></div>
        <div class="clearfix"></div>
        <!-- PAGE CONTENT -->

        <div class="header-title-breadcrumb element-box-shadow">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 col-xs-12 text-left">
                        <h3>Make a Deposit</h3>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 hide-on-tablet">
                        <ol class="breadcrumb text-right">
                            <li><a href="?a=account">Home</a></li>
                            <li class="active">Deposit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer_80"></div>


        <script language="javascript">
            function openCalculator(id) {

                w = 225;
                h = 400;
                t = (screen.height - h - 30) / 2;
                l = (screen.width - w - 30) / 2;
                window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w +
                    ",height=" + h + ",resizable=1,scrollbars=0");



                for (i = 0; i < document.spendform.h_id.length; i++) {
                    if (document.spendform.h_id[i].value == id) {
                        document.spendform.h_id[i].checked = true;
                    }
                }



            }

            function updateCompound() {
                var id = 0;
                var tt = document.spendform.h_id.type;
                if (tt && tt.toLowerCase() == 'hidden') {
                    id = document.spendform.h_id.value;
                } else {
                    for (i = 0; i < document.spendform.h_id.length; i++) {
                        if (document.spendform.h_id[i].checked) {
                            id = document.spendform.h_id[i].value;
                        }
                    }
                }

                var cpObj = document.getElementById('compound_percents');
                if (cpObj) {
                    while (cpObj.options.length != 0) {
                        cpObj.options[0] = null;
                    }
                }

                if (cps[id] && cps[id].length > 0) {
                    document.getElementById('coumpond_block').style.display = '';

                    for (i in cps[id]) {
                        cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                    }
                } else {
                    document.getElementById('coumpond_block').style.display = 'none';
                }
            }
            var cps = {};
        </script>
        <form method=post name="spendform"><input type="hidden" name="form_id" value="16599660766076"><input type="hidden"
                name="form_token" value="c218d9ecbe20625c2d2923ffaa410089">
            <input type=hidden name=a value=deposit>
            <section class="pricing-section bg-12">
                <br />
                <h1>
                    <p style="color:red"> <b>STEPS TO START INVESTING
                </h1></b>
                <br /><b>Step 1:</b> To get start with the Plan, Simply click on the <b>"Premium Plan"</b> under Select
                Plan, so you can access every other plans.<br>

                <br /><b>Step 2:</b> To make payment, Click on the <b>"Bitcoin"</b> under Payment Method, to check
                everyother available payment method of your choice.<br>

                <br /><b>Step 3:</b> Under the Enter Deposit Amount click on the <b>"1000000000.00"</b> then input the
                amount of your choice.<br>
                <br /><b>Step 4:</b> Click on <b>"Spend"</b> to proceed with the payment.<br>
                </p>
    </div>
    <div class="spacer_30"></div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="inputType" class="col-lg-12 control-label"><b>
                    <p style="color:blue">Select Plan</label></b>
            <div class="col-lg-12 select-form">
                <select class="form-control input-type-1" id="inputType" name="h_id">
                    <option value="1">PREMIUM PLAN</option>
                    <option value="2">MINING PLAN</option>
                    <option value="3">GOLD PACK PLAN</option>
                </select>
            </div>
            <div class="spacer_30"></div>
            <label for="inputType" class="col-lg-12 control-label"><b>
                    <p style="color:red">Payment Method</label></b>
            <div class="col-lg-12 select-form">
                <select class="form-control input-type-1" id="inputType" name="type">
                    <option value='process_1000'>Bitcoin</option>
                    <option value='process_1006'>Ethereum</option>
                    <option value='process_1007'>Ripple XRP 🏷</option>
                    <option value='process_1008'>Usdt</option>
                    <option value='process_1011'>SOL</option>
                    <option value='process_1012'>DOT</option>
                </select>
            </div>

            <div class="spacer_30"></div>
            <label for="inputType" class="col-lg-12 control-label"><b>
                    <p style="color:green">Your Account Balance ($)</label></b>
            <div class="col-lg-12">
                <input type="text" value='$0.00' class="form-control input-type-1" id="inputType" disabled>
            </div>
            <div class="spacer_30"></div>
            <label for="inputType" class="col-lg-12 control-label"><b>
                    <p style="color:purple">Enter Deposit Amount</label></b>
            <div class="col-lg-12">
                <input type="text" name=amount value='15000' class="form-control input-type-1" id="inputType">
            </div>
        </div>
        <tr>
            <td colspan=2><input type=submit value="Spend" class=sbmt></td>
        </tr>
        </table>
    </div>
    </div>
    </div>

    </section>
    </form>

    <script language=javascript>
        for (i = 0; i < document.spendform.type.length; i++) {
            if ((document.spendform.type[i].value.match(/^process_/))) {
                document.spendform.type[i].checked = true;
                break;
            }
        }
        updateCompound();
    </script>
@endsection
