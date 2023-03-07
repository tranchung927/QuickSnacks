<div class="modal-header">
    <h5 class="modal-title product-detail-name" id="applicationModalLabel">Delivery Address</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <div>
                        <div class="input-float-group">
                            <input id="txtAddressFistName" class="input-float" type="text" value='<?php echo $firstName ?? "" ?>' required>
                            <span class="bar-float"></span>
                            <label class="label-float">First Name *</label>
                        </div>
                        <p id="errAddressFistName" class="error-message"></p>
                    </div>
                    <div>
                        <div class="input-float-group">
                            <input id="txtAddressLastName" class="input-float" type="text" value='<?php echo $lastName ?? "" ?>' required>
                            <span class="bar-float"></span>
                            <label class="label-float">Last Name *</label>
                        </div>
                        <p id="errAddressLastName" class="error-message"></p>
                    </div>
                    <div>
                        <div class="input-float-group">
                            <input id="txtAddressPhoneNumber" class="input-float" type="text" value='<?php echo $phone ?? "" ?>' required>
                            <span class="bar-float"></span>
                            <label class="label-float">Phone Number *</label>
                        </div>
                        <p id="errAddressPhoneNumber" class="error-message"></p>
                    </div>
                    <div>
                        <div class="input-float-group">
                            <input id="txtAddressCity" class="input-float" type="text" value='<?php echo $cityName ?? "" ?>' required>
                            <span class="bar-float"></span>
                            <label class="label-float">Province/City *</label>
                        </div>
                        <p id="errAddressCity" class="error-message"></p>
                    </div>
                    <div>
                        <div class="input-float-group">
                            <input id="txtAddressDistrict" class="input-float" type="text" value='<?php echo $districtName ?? "" ?>' list="district_data_list" required>
                            <span class="bar-float"></span>
                            <label class="label-float">District *</label>
                            <datalist id="district_data_list">
                                <?php for ($i = 0; $i < count($districts); $i++) { ?>
                                    <option><?php echo $districts[$i]["name"] ?></option>
                                <?php } ?>
                            </datalist>
                        </div>
                        <p id="errAddressDistrict" class="error-message"></p>
                    </div>
                    <div>
                        <div class="input-float-group">
                            <input id="txtAddressAddress" class="input-float" type="text" value='<?php echo $fullAddress ?? "" ?>' required>
                            <span class="bar-float"></span>
                            <label class="label-float">Street Name, Building, House Number *</label>
                        </div>
                        <p id="errAddressAddress" class="error-message"></p>
                    </div>
                    <div class="" style="text-align: center; padding: 20px 0;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d963.8129145878062!2d105.81886513729218!3d21.03560413157447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d1a77dfb9%3A0xafe382a9625c0ded!2zMjgxIMSQ4buZaSBD4bqlbiwgTGnhu4V1IEdpYWksIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1678146967754!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="button-border" data-bs-dismiss="modal" style="padding:12px 32px;">Close</button>
    <button id="btnAddToCartDetail" class='button-primary' style="padding:12px 32px;margin-left:8px;" onclick="confirmAddress()">Confirm</button>
</div>