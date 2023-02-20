            

            <div class="modal fade" id="update_center_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Responsibility Center</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="update_responsibility_center_form">
                  <div class="modal-body">
                    <!--   <div class="form-group">
                          <label for="exampleInputEmail1">Responsibility Center Code</label>
                          <input type="text" class="form-control"  name="update_center_code" placeholder="">
                          <input type="hidden" class="form-control" id="res_center_id" name="res_center_id" placeholder="" required>
                          
                      </div> -->
                      <input type="hidden" class="form-control" id="res_center_id" name="res_center_id" placeholder="" required>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Responsibility Center Name</label>
                          <input type="text" class="form-control" name="update_center_name"  placeholder="" required>
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-update-center sub-button" name="btn-update-center " >Save changes</button>
                  </div>
                  </form>

                </div>
              </div>
            </div>