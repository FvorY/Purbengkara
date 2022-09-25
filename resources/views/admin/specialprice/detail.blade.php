<!-- Modal -->
<div id="detail" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xs">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-gradient-info">
        <h4 class="modal-title">Form Detail</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <table class="table table_modal">
            <tr>
              <td>Produk</td>
              <td>
                <input type="text" class="form-control form-control-sm inputtext produk" disabled name="name">
              </td>
            </tr>
          <tr>
            <td>Name</td>
            <td>
              <input type="text" class="form-control form-control-sm inputtext name" disabled name="name">
            </td>
          </tr>
          <tr>
            <td>Price</td>
            <td>
              <input type="text" class="form-control form-control-sm inputtext price" disabled name="name">
            </td>
          </tr>
          </table>

          <table class="table table_status table-hover" cellspacing="0">
              <thead class="bg-gradient-info">
                <tr>
                  <th style="width:15px">No</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody align="center" id="listDetail">
              </tbody>
          </table>
        </div>
        <br>
        <br>
      </div>
      </div>

  </div>
</div>
