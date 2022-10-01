  <!-- Add User Modal -->
  <div class="adduser-modal modal">
      <header class="modal-header">
          <h2>Add User</h2>
          <span onclick=" $('.adduser-modal').css('display', 'none')" class="exit-btn">x</span>
      </header>
      <form id="addUserForm">
          <input id="firstname" type="text" name="firstname" placeholder="First Name..." required />
          <input id="lastname" type="text" name="lastname" placeholder="Last Name..." required />
          <input id="address" type="text" name="address" placeholder="Address..." required />

          <div class="flex-row">
              <input id="age" type="number" min="1" max="100" name="age" placeholder="Age..." required />
              <input id="contactNumber" type="text" name="contactNumber" placeholder="Contact Number..." required />
          </div>

          <button id="addUserBtn" name="submit" type="submit" class="btn add-user-btn">Submit</button>
      </form>
  </div>