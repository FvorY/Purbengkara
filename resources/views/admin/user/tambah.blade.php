<!-- Modal -->
<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xs">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-gradient-info">
        <h4 class="modal-title">Form Manage User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <table class="table table_modal">
          <tr>
            <td>Name</td>
            <td>
              <input type="text" class="form-control form-control-sm inputtext name" name="name">
              <input type="hidden" class="form-control form-control-sm id" name="id">
            </td>
          </tr>
          <tr>
            <td>Role</td>
            <td>
              <select class="form-control select2 role" name="role" id="role">
                <option value="">-- Select Role --</option>
                  <option value="admin">Admin</option>
                  <option value="karyawan">Karyawan</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Username</td>
            <td>
              <input type="text" class="form-control form-control-sm inputtext username" name="username">
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <div class="input-group" id="show_hide_password">
              <input class="form-control password" name="password" type="password">
              <div class="input-group-addon">
                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
              </div>
            </td>
          </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" id="simpan" type="button">Process</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>

  </div>
</div>
