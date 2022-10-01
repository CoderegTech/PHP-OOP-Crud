  <!-- Update User Modal -->
  <div class="update-modal modal">
      <header class="modal-header">
          <h2>Update User</h2>
          <span onclick="$('.update-modal').css('display', 'none')" class="exit-btn">x</span>
      </header>
      <form id="updateUserForm">
          <input id="new-firstname" type="text" name="firstname" placeholder="First Name..." required />
          <input id="new-lastname" type="text" name="lastname" placeholder="Last Name..." required />
          <input id="new-address" type="text" name="address" placeholder="Address..." required />

          <div class="flex-row">
              <input id="new-age" type="number" min="1" max="100" name="age" placeholder="Age..." required />
              <input id="new-contactNumber" type="text" name="contactNumber" placeholder="Contact Number..." required />
          </div>

          <button id="updateUserBtn" name="submit" type="submit" class="btn update-user-btn">Submit</button>
      </form>
  </div>