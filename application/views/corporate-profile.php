

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/'?>images/inner-banner/massage-1.jpg">
</section>

<section class="banner-text-area">
    <h1>Corporate Profile</h1>
</section>


<section class="chirman-massag-area">
    <div class="container">
       <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="corporat-area">
                    <table style="width: 100%; border: 1px solid rgb(201, 201, 201);">
                      
                        <tr>
                            <th style="width: 100%; background: rgb(192, 194, 252) none repeat scroll 0% 0%; padding: 8px 10px; color: rgb(34, 34, 34); font-size: 20px;">Board of Directors</th>
                        </tr>
                         <?php foreach ($this->corporateprofile_model->board_directors() as $key => $row) {  if($key % 2 == 0) { ?>
                        <tr>
                            <td style="width: 100%; padding: 8px 10px; color: rgb(34, 34, 34);letter-spacing: 2px;"><?php echo $row->name; ?><span class="tab" style="padding: 0 48px;">-</span><?php echo $row->designation; ?>-</td>
                        </tr>
                         <?php } else{ ?>
                        <tr>
                            <td style="width: 100%; text-align: left; padding: 8px 10px; letter-spacing: 2px;background: #e1e1f3;"><?php echo $row->name; ?> <span class="tab" style="padding: 0 41px 0 80px; text-align: left;  ">-</span><?php echo $row->designation; ?></td>
                        </tr>
                         <?php } }?>
                       
                           
                    </table>
                    
                    <table style="width: 100%; border: 1px solid rgb(201, 201, 201); margin: 30px 0px;">
                        <tr>
                            <th style="width: 100%; background: rgb(192, 194, 252) none repeat scroll 0% 0%; padding: 8px 10px; color: rgb(34, 34, 34); font-size: 20px;">Audit Committee</th>
                        </tr>
                        <?php foreach ($this->corporateprofile_model->audit_commitee() as $key => $row) {  if($key % 2 == 0) { ?>
                        <tr>
                            <td style="width: 100%; padding: 8px 10px; color: rgb(34, 34, 34);letter-spacing: 2px;"><?php echo $row->name; ?><span class="tab" style="padding: 0 40px 0 34px;">-</span><?php echo $row->designation; ?></td>
                        </tr>
                         <?php } else{ ?>
                        <tr>
                            <td style="width: 100%; padding: 8px 10px; letter-spacing: 2px;background: #e1e1f3;letter-spacing: 2px;"><?php echo $row->name; ?><span class="tab" style="padding: 0 47px 0 89px;">-</span><?php echo $row->designation; ?></td>
                        </tr>
                        <?php } }?>
                       
                           
                    </table>
                    <table style="width: 100%; border: 1px solid rgb(201, 201, 201); margin: 30px 0px;">
                        <tr>
                            <th style="width: 100%; background: rgb(192, 194, 252) none repeat scroll 0% 0%; padding: 8px 10px; color: rgb(34, 34, 34); font-size: 20px;">Chief Financial Officer</th>
                        </tr>
                        <?php foreach ($this->corporateprofile_model->audit_officer() as $row) { ?>
                        <tr>
                            <td style="width: 100%; padding: 8px 10px; color: rgb(34, 34, 34);"><?php echo $row->name ?></td>
                        </tr>
                        <?php }  ?>
                    </table>
                    <table style="width: 100%; border: 1px solid rgb(201, 201, 201); margin: 30px 0px;">
                        <tr>
                            <th style="width: 100%; background: rgb(192, 194, 252) none repeat scroll 0% 0%; padding: 8px 10px; color: rgb(34, 34, 34); font-size: 20px;">Company Secretary</th>
                        </tr>
                        <?php foreach ($this->corporateprofile_model->company_secratery() as $row) { ?>
                        <tr>
                            <td style="width: 100%; padding: 8px 10px; color: rgb(34, 34, 34);"><?php echo $row->name; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <table style="width: 100%; border: 1px solid rgb(201, 201, 201); margin: 30px 0px;">
                        <tr>
                            <th style="width: 100%; background: rgb(192, 194, 252) none repeat scroll 0% 0%; padding: 8px 10px; color: rgb(34, 34, 34); font-size: 20px;">Head of Internal Audit</th>
                        </tr>
                         <?php foreach ($this->corporateprofile_model->internal_audit() as $row) { ?>
                        <tr>
                            <td style="width: 100%; padding: 8px 10px; color: rgb(34, 34, 34);">M<?php echo $row->name; ?></td>
                        </tr>
                         <?php } ?>
                    </table>
                </div>
            </div>
        </div> 
    </div>
</section>


