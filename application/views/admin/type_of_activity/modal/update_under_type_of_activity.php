            

            <div class="modal fade" id="update_under_type_activity_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update <?php echo $title ?></h5>
                    <button type="button" class="close close-under" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="update_under_type_form">
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Type</label>
                          <input type="text" class="form-control"  name="update_under_activity" placeholder="">
                          <input type="hidden" class="form-control"  name="under_activity_id" placeholder="" required>
                          <input type="hidden" class="form-control"  name="under_activity_idd" placeholder="" required>
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger close-under" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-update-under-activity sub-button" name="btn-update-activity" >Save changes</button>
                  </div>
                  </form>

                </div>
              </div>
            </div>