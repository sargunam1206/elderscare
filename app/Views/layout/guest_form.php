<div class="modal-body">
  <form id="guestForm1">
    <div class="mb-3">
      <label for="guestName1" class="form-label">Guest Name</label>
      <input type="text" class="form-control" id="guestName1"  name="guestName1" required>
    </div>
    <div class="mb-3">
      <label for="guestEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="guestEmail1" name="guestEmail1" required>
    </div>
    <button type="submit" class="btn btn-success">Save Guest 1</button>
  </form>

  <hr>

  <!-- <form id="guestForm2">
    <div class="mb-3">
      <label for="guestName2" class="form-label">Guest Name</label>
      <input type="text" class="form-control" id="guestName2" name="guestName2" required>
    </div>
    <div class="mb-3">
      <label for="guestEmail2" class="form-label">Email</label>
      <input type="email" class="form-control" id="guestEmail2" name="guestEmail2" required>
    </div>
    <button type="submit" class="btn btn-primary">Save Guest 2</button>
  </form> -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
  // Form 1
  document.getElementById("guestForm1").addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("guestName1").value;
    const email = document.getElementById("guestEmail1").value;
    alert("Guest 1 Saved: " + name + " (" + email + ")");
    this.reset();
  });

  // Form 2
  document.getElementById("guestForm2").addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("guestName2").value;
    const email = document.getElementById("guestEmail2").value;
    alert("Guest 2 Saved: " + name + " (" + email + ")");
    this.reset();
  });
});
let currentGuestField = "";
let modalEl="";
function openGuestModal(guestField) {
  currentGuestField = guestField;



  if(guestField="guest1"){
modalEl = document.getElementById("guestFormModal");
  }else{
modalEl = document.getElementById("guestFormModal1");
  }
  
  


  // Reset tabs to first step
//   const firstTab = modalEl.querySelector("#pills-account-tab");
//   if (firstTab) {
//     new bootstrap.Tab(firstTab).show();
//   }

  let modalInstance = bootstrap.Modal.getInstance(modalEl);
  if (!modalInstance) {
    modalInstance = new bootstrap.Modal(modalEl);
  }
  modalInstance.show();
}





// Handle Save button
document.getElementById("guestMasterForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const guestData = {
    guestType: currentGuestField, // guest1 or guest2
    name: document.getElementById("guestName").value,
    email: document.getElementById("guestEmail").value,
    guardian: document.getElementById("guardianName").value,
    medical: document.getElementById("medicalInfo").value,
    likes: document.getElementById("likes").value,
    dislikes: document.getElementById("dislikes").value
  };

  console.log("Saved Guest Data:", guestData);

  // Close modal after save
  bootstrap.Modal.getInstance(document.getElementById("guestFormModal")).hide();
});


</script>