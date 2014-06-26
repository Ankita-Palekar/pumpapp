<div class="modal fade share_modal" tabindex="+1" role="dialog" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
  <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Share your URL</h4>
      </div>
      <div class="modal-body">
        
     <form action="index.php" method=POST>
    
        <label for="link_url">Choose which group to share with:</label>
        <!-- <input type="text" class="form-control fg" name="link_url" id="inputURL" placeholder="URL link" required> -->

    <!--      <label for="tags">Tags</label></br>
         <input type="text" name="tags" class="form-control fg" value="" data-role="tagsinput" placeholder="Press enter after each tag to add more"/>
     -->
     <ul>
   <?php   require_once("get_groups.php");?>
        </ul>

        <button type="submit" name="create" class="btn btn-primary">Share</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </form>
      </div>
     

      </div>
    </div>
  </div>
