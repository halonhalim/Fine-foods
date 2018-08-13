

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/' ?>images/inner-banner/massage.jpg">
</section>

<section class="banner-text-area">
    <h1>Investor Relations</h1>
</section>

<section class="authorize-area">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="authorized-cntn">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Year</th>
                                <th scope="col">Authorized Capital</th>
                                <th scope="col">Paid-Up Capital</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php foreach ($this->investorralation_model->index() as $key => $row) {  if($key % 2 == 0) { ?>
                            <tr>
                                <td><?php echo $row->year ?></td>
                                <td><?php echo $row->authorizedcapital; ?></td>
                                <td><?php echo $row->paidupcapital; ?></td>
                            </tr>
                             <?php } else{ ?>
                            <tr style="background: rgb(225, 225, 243) none repeat scroll 0% 0%;">
                                <td><?php echo $row->year ?></td>
                                <td><?php echo $row->authorizedcapital; ?></td>
                                <td><?php echo $row->paidupcapital; ?></td>
                            </tr>
                             <?php }} ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


