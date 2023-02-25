            

            <div class="modal fade" id="update_bylaws_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Bylaws</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="update_bylaws_form">
                  <div class="modal-body">
                  
                      <input type="hidden" class="form-control" name="bylaws_cso_id" placeholder="" required>
                      <input type="hidden" class="form-control" name="bylaws_name" placeholder="" required>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Bylaws</label>
                          <span class="text-danger">*</span>
                          <input type="file" class="form-control" name="update_bylaws"  placeholder="" onchange="ValidateSingleInput2(this);">
                      </div>
                      
                      
                      
                  </div>
                  <div class="modal-footer" >
                    <button type="button" class="btn btn-danger update-cso-close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-update-center sub-button update-bylaws-cso-save d-none" >Save changes</button>
                   
                  </div>


                  </form>

                </div>
              </div>
            </div>


