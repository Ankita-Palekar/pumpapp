<div class="modal fade share_modal" tabindex="+1" role="dialog" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
  <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Share your URL</h4>
      </div>
      <div class="modal-body">
        
     <form action="index.php" method=POST>
    
        <label for="link_url">Choose which group to share with:</label></br>
      <ul>
   <?php   require_once("get_groups.php");?>
        </ul>

      </form>
      </div>
     

      </div>
    </div>
  </div>
