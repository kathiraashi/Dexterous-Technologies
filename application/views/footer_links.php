<div class="modal fade bs-example-modal-lg" id="getQuote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"> Get a Quotation</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_phone">Phone</label>
                      <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name"> Products  <small>*</small></label>
                    <select class="form-control">
                        <option>Product-1</option>
                        <option>Product-2</option>
                        <option>Product-3</option>
                        <option>Product-4</option>
                        <option>Product-5</option>
                      </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name">Message</label>
                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-theme-colored btn-flat btn-lg">Submit</button>
        </div>
      </div>
    </div>
</div>




<script src="<?=base_url()?>assets/js/custom.js"></script>