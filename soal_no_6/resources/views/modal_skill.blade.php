<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form method="post" action="/user/update/{{ $p->id }}">
                        @csrf
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">Tambahkan Skilll</label>
                                <select name="skill" class="form-control" id="exampleFormControlSelect1">
                                  <option value="php">Php</option>
                                  <option value="js">js</option>
                                  <option value="React">React</option>
                                  <option value="Laravel">Laravel</option>
                                  <option value="Angular">Angular</option>
                                </select>
                              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
            </div>
          </div>
        </div>
      </div>
      