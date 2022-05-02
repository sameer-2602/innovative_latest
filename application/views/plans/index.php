<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/sub_plan.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    
<div class="container">
    <div class="row">
        <h3><?=$page_slug;?></h3>
        <hr>
        <?php foreach($plan as $val):?>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <div class="col-xs-12 col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?=$val['type']?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="the-price">
                            <h1>
                                <?=$val['amount']?>₹<span class="subscript">/mo</span></h1>
                            <small>1 month FREE trial</small>
                        </div>
                        <table class="table">
                            <tr>
                                <td>
                                    1 Account
                                </td>
                            </tr>
                            <tr class="active">
                                <td>
                                    <?=$val['no_of_meetings']?> Meetings
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <input type="submit" name="pay" value="PayPal" class="btn btn-success">
                        1 month FREE trial</div>
                </div>
            </div>
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="bhattsameer2602-facilitator@gmail.com">
<input type="hidden" name="item_name_1" value="<?=$val['type']?>">
<input type="hidden" name="amount_1" value="<?=$val['amount']?>">
<input type="hidden" name="shipping_1" value="<?=$val['id']?>">
<!-- <input type="hidden" name="item_name_2" value="Item Name 2"> -->
<!-- <input type="hidden" name="amount_2" value="2.00">
<input type="hidden" name="shipping_2" value="2.50"> -->
</form>
 <?php  endforeach;?>   
    </div>
</div>




