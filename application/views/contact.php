

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/'; ?>images/inner-banner/massage.jpg">
</section>

<section class="banner-text-area">
    <h1>Contact</h1>
</section>

<section class="authorize-area">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="authorized-cntn">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Registered Office</th>
                                <th scope="col">Head & Corporate Office</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>Village            : <?php  echo $contact->village; ?></td>
                                <td><?php  echo $contact->company_name;; ?></td>
                            </tr>
                            <tr style="background: rgb(225, 225, 243) none repeat scroll 0% 0%;">
                                <td>U.P.                 : <?php  echo $contact->union; ?></td>
                                <td><?php  echo $contact->m_address; ?></td>
                            </tr>
                            <tr>
                                <td>Post office   :<?php  echo $contact->post_office; ?></td>
                                <td><?php  echo $contact->f_address; ?></td>
                            </tr>
                            <tr style="background: rgb(225, 225, 243) none repeat scroll 0% 0%;">
                                <td>P.S.                 : <?php  echo $contact->post; ?></td>
                                <td>Hotline : <?php  echo $contact->hotline; ?></td>
                            </tr>
                            <tr>
                                <td>Dist.               : <?php  echo $contact->distict; ?></td>
                                <td><?php  echo $contact->mobile_no; ?></td>
                            </tr>
                            <tr>
                                <td style="background: #e1e1f3;">Mobile           : <?php  echo $contact->r_mobile; ?></td>
                                <td style="background: #e1e1f3;">Tel-(PABX): <?php  echo $contact->tell; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Fax:<?php  echo $contact->fax; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="background: #e1e1f3;">E-mail: <?php  echo $contact->email; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


