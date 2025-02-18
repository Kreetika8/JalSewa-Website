<?php include 'header.php'?>

  <div class="containerProfile">
    <div class="profile-image">
      <input type="file" id="profile-input" accept="image/*" hidden>

      <img src="../IMAGE/profile.jpg" alt="default profile" id="profile-pic">
  </div>
    <h1>Edit profile</h1>
    <form>
        <div class="form-group">
          <div class="form-group">
            <div class="input-row">
                <div class="input-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name">
                </div>
                <div class="input-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name">
                </div>
            </div>
        </div>
        
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-with-icon">
                <input type="email" id="email" >
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" >
        </div>
        <div class="form-group">
          <label for="contact-number">Contact Number</label>
          <input type="text" id="contact-number" name="contact-number" pattern="\d{10}" maxlength="10" required>
          
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-with-icon">
              <input type="password" id="password">
              <i class="fas fa-eye" id="toggle-password"></i>
          </div>
      </div>
      
        <div class="form-actions">
            <button type="button" class="cancel-btn">Cancel</button>
            <button type="submit" class="save-btn">Save</button>
        </div>
    </form>
</div>
</body>
<script>
  document.getElementById("toggle-password").addEventListener("click", function () {
        let passwordInput = document.getElementById("password");
        let icon = this;

        // Toggle password visibility
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        }
    });

    document.getElementById("profile-pic").addEventListener("click", function () {
    document.getElementById("profile-input").click();
});

document.getElementById("profile-input").addEventListener("change", function (event) {
    let file = event.target.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("profile-pic").src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

</script>

<?php include 'footer.php'; ?>