            

            <div class="modal fade" id="update_pic_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Profile Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="update_profile_pic">
                  <div class="modal-body">
                  
                      <div class="form-group">
                          <label for="exampleInputPassword1">Profile Picture</label>
                          <input type="file" class="form-control" name="update_profile_pic" onchange="ValidateImage(this);"  placeholder="" required>
                      </div>
                       <div class="holder ">
                      <img id="imgPreview" class="img d-none" src="#" alt="pic" />
                  </div>
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-update-center sub-button btn-update-prof-pic d-none" name="btn-update-prof-pic " >Save changes</button>
                  </div>
                  </form>

                </div>
              </div>
            </div>