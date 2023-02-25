            

            <div class="modal fade" id="update_cso_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update CSO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="update_cso_form">
                  <div class="modal-body">
                  
                      <input type="hidden" class="form-control" id="cso_id" name="cso_id" placeholder="" required>
                      <div class="form-group">
                          <label for="exampleInputPassword1">CSO</label>
                          <span class="text-danger">*</span>
                          <input type="text" class="form-control" name="update_cso"  placeholder="" required>
                      </div>
                       <div class="form-group">
                          <label for="exampleInputPassword1">Address</label><span class="text-danger">*</span>
                          <input type="text" class="form-control" name="update_address"  placeholder="" required>
                      </div>
                       <div class="form-group">
                          <label for="exampleInputPassword1">Contact Person</label><span class="text-danger">*</span>
                          <input type="text" class="form-control" name="update_contact_person"  placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Contact Number</label><span class="text-danger">*</span>
                          <input type="text" class="form-control" name="update_contact_number"  placeholder=""  data-mask="09000000000">
                      </div>

                      <div class="form-group">
                          <label for="exampleInputPassword1">Email</label><span class="text-danger">*</span>
                          <input type="text" class="form-control" name="update_email"  placeholder="">
                      </div>
                      
                      
                  </div>
                  <div class="modal-footer" id="update_cso_footer">
                    <button type="button" class="btn btn-danger update-cso-close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-update-center sub-button update-cso-save" name="btn-update-center " >Save changes</button>
                   
                  </div>


                  </form>

                </div>
              </div>
            </div>


