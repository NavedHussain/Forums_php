<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog"
  aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header position-relative">
        <h5 class="modal-title " id="signupModalLabel">Signup for an iDiscuss Account</h5>
        <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/forum/partials/_handleSignup.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="signupEmail">Email address</label>
            <input type="email" class="form-control" id="signupEmail" 
            name="signupEmail"
              aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">
              We'll never share your email with anyone else.
            </small>
          </div>
          <div class="form-group">
            <label for="signupPassword">Password</label>
            <input type="password" class="form-control" id="signupPassword" name="signupPassword" required>
          </div>
          <div class="form-group">
            <label for="signupcPassword">Confirm Password</label>
            <input type="password" class="form-control" id="signupcPassword" name="signupcPassword" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Signup</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
