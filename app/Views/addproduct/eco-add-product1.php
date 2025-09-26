<!DOCTYPE html>
<html
  lang="en"
  dir="ltr"
  data-bs-theme="light"
  data-color-theme="Blue_Theme"
  data-layout="vertical"
>
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link
      rel="shortcut icon"
      type="image/png"
      href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png"
    />

      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

    <title>MatDash Bootstrap Admin</title>

  </head>

  <body>
    <?= view('layout/head') ?>

    <!-- Preloader -->

    


   
      <!-- Sidebar Start -->

      <!--  Sidebar End -->
      
        <!--  Header Start -->

        <!--  Header End -->

        <div class="main-wrapper px-3">
          <div class="">
                <h5 class="m-3 fs-7"><i class="bi bi-house-door text-success"></i>
 Inhouse Guest</h5>
            </div>
         
            <!-- start Basic Area Chart -->
 <?php 
          $session = \Config\Services::session();
          if (isset($session->success)): ?>
            <div class="alert bg-success-subtle text-info alert-dismissible fade show" role="alert">
              <div class="d-flex align-items-center text-success">
                <i class="ti ti-info-circle me-2 fs-4"></i>
                <?= $session->success; ?>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
          <?php endif; ?>
            <div class="row">
<!-- Enhanced Submenu CSS -->


<!-- Guest Cards Section -->
<div class="col-md-8">


<div class="card mb-1">
  <div class="card-body py-2"> <!-- reduced padding -->
    <h5 class="fw-bold  mb-0" style="font-size: 1.3rem; line-height: 1.2;color:green">
      Room No - <label class="form-check-label fw-bold" id="selected-room-no" ></label>
    </h5>
  </div>
</div>







  <!-- Guest 1 Card -->
  <div class="card mb-3">
    <div class="card-body">
      <div class="d-flex align-items-center mb-3">
        <div class="form-check me-3">
          <input class="form-check-input guest-select" type="checkbox" id="selectGuest1" checked style="width: 1.2rem; height: 1.2rem; border-radius: 50%; border: 2px solid #1B5E20;">
          <label class="form-check-label fw-bold" for="selectGuest1"  style="font-size: 1.1rem;">Guest1</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="form-label">Guest Name</label>
          <input type="text" class="form-control" id="guestName" value="Rajesh Kumar">
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Contact Number</label>
          <input type="text" class="form-control"  id="guestContact" value="+91 9876543210">
         <input type="hidden" class="form-control" id="guest_id" >
        </div>
  


      <div class="col-md-4 mb-3">
  <label class="form-label">Services</label>
  <div class="dropdown">
    <input type="text" class="form-control dropdown-toggle w-100" id="relationInput1"
      placeholder="Select Service" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly />
    <ul class="dropdown-menu p-2 w-100" aria-labelledby="relationInput1">


      <li class="dropdown-submenu">
        <div class="dropdown-item dropdown-toggle">Regular Services</div>
        <ul class="dropdown-menu">
          <?php foreach($servicetype as $type):?>
<li>
  <div class="dropdown-item" 
       style="color: white; background-color: green;" 
       onmouseover="this.style.backgroundColor='green'; this.style.color='white';" 
       onmouseout="this.style.backgroundColor='darkgreen'; this.style.color='white';"
       onclick="openLaundryFromDropdown('relationInput1','guest_1','<?= $type['name']; ?>')">
    <?= $type['name']; ?>
  </div>
</li>
         <?php endforeach; ?>
          <!--<li><div class="dropdown-item" onclick="openLaundryFromDropdown('relationInput1')">Laundry</div></li>
          <li><div class="dropdown-item" onclick="setService('relationInput1','Beauty Salon')">Beauty Salon</div></li>
          <li><div class="dropdown-item" onclick="setService('relationInput1','Travel Desk')">Travel Desk</div></li>
          <li><div class="dropdown-item" onclick="setService('relationInput1','Care Taker Management')">Care Taker Management</div></li> -->
        </ul>
      </li>




<li>
  <div class="dropdown-item" onclick="setService('relationInput1','Maintenance Charge')" data-bs-toggle="modal" data-bs-target="#maintenanceModal">
    Maintenance Charge
  </div>
</li>



      <li><div class="dropdown-item" onclick="sethealth('guest_1')">Health Record Main</div></li>



      <li>

  <div class="dropdown-item" onclick="setwallet('guest_1')">
    Wallet
  </div>

</li>
    </ul>
  </div>
</div>



      </div>
    </div>
  </div>








 
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center mb-3">
        <div class="form-check me-3">
          <input class="form-check-input guest-select" type="checkbox" id="selectGuest2" style="width: 1.2rem; height: 1.2rem; border-radius: 50%; border: 2px solid #1B5E20;">
          <label class="form-check-label fw-bold" for="selectGuest2" style="font-size: 1.1rem;">Guest2</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="form-label">Guest Name</label>
          <input type="text" class="form-control" id="guestName1" value="">
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Contact Number</label>
          <input type="text" class="form-control" id="guestContact1">
          <input type="hidden" class="form-control" id="guest_id1" >

        </div>



     
      <div class="col-md-4 mb-3">
  <label class="form-label">Services</label>
  <div class="dropdown">
    <input type="text" class="form-control dropdown-toggle w-100" id="relationInput1"
      placeholder="Select Service" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off" readonly />
    <ul class="dropdown-menu p-2 w-100" aria-labelledby="relationInput1">


      <li class="dropdown-submenu">
        <div class="dropdown-item">Regular Services</div>
        <ul class="dropdown-menu">
          <?php foreach($servicetype as $type):?>
<li>
  <div class="dropdown-item" 
       style="color: white; background-color: green;" 
       onmouseover="this.style.backgroundColor='darkgreen'; this.style.color='white';" 
       onmouseout="this.style.backgroundColor='green'; this.style.color='white';"
       onclick="openLaundryFromDropdown('relationInput1','guest_2','<?= $type['name']; ?>')">
    <?= $type['name']; ?>
  </div>
</li>
         <?php endforeach; ?>
          <!--<li><div class="dropdown-item" onclick="openLaundryFromDropdown('relationInput1')">Laundry</div></li>
          <li><div class="dropdown-item" onclick="setService('relationInput1','Beauty Salon')">Beauty Salon</div></li>
          <li><div class="dropdown-item" onclick="setService('relationInput1','Travel Desk')">Travel Desk</div></li>
          <li><div class="dropdown-item" onclick="setService('relationInput1','Care Taker Management')">Care Taker Management</div></li> -->
        </ul>
      </li>




<li>
  <div class="dropdown-item" onclick="setService('relationInput1','Maintenance Charge')" data-bs-toggle="modal" data-bs-target="#maintenanceModal">
    Maintenance Charge
  </div>
</li>


     
      <li><div class="dropdown-item" onclick="sethealth('guest_2')">Health Record Main</div></li>
  


      <li>
  <div class="dropdown-item" onclick="setwallet('guest_2')">
    Wallet
  </div>
</li>
    </ul>
  </div>
</div>





      </div>
    </div>
  </div>






</div>








              <!-- Your Performance Card -->
              <div class="col-md-4">
                <div class="card text-dark shadow-sm border-0">
                  <div class="card-body">
                    <!-- Title and Subtitle -->
                    <div class="mb-4">
                      <h5 class="card-title fw-semibold mb-1">Room Status</h5>
                    </div>

                    <!-- Tabs Section -->
                    <div class="table-responsive">
                      <div class="mb-3 p-2">
                        <div class="d-flex flex-wrap gap-1">
                          <span
                            class="badge d-flex align-items-center"
                            style=" color: #2e7d32"
                          >
                            <span
                              class="rounded-circle d-inline-block me-1"
                              style="
                                width: 12px;
                                height: 12px;
                                background-color: #2e7d32;
                              "
                            ></span>
                            Vacant
                          </span>
                          <span
                            class="badge d-flex align-items-center"
                            style=" color: #d32f2f"
                          >
                            <span
                              class="rounded-circle d-inline-block me-1"
                              style="
                                width: 12px;
                                height: 12px;
                                background-color: #d32f2f;
                              "
                            ></span>
                            Occupied
                          </span>
                          <span
                            class="badge d-flex align-items-center"
                            style=" color: goldenrod"
                          >
                            <span
                              class="rounded-circle d-inline-block me-1"
                              style="
                                width: 12px;
                                height: 12px;
                                background-color: goldenrod;
                              "
                            ></span>
                            Reserved
                          </span>
                        </div>
                      </div>
                      <ul
                        class="nav nav-tabs gap-4 border-0 flex-wrap"
                        role="tablist"
                      >
                        
                        <?php foreach($rooms as $eachroom):?>


                       
    <li class="nav-item" role="presentation">
        <a
            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
            style="background-color: 
          <?php
             if ($eachroom['room_status'] == 'Vacant') {
                 echo 'green';
             } elseif ($eachroom['room_status'] == 'Occupied') {
                 echo '#d32f2f';
             } else {
                 echo 'goldenrod';
             }
             ?>

            "
            data-bs-toggle="tab"
            href="#room<?= htmlspecialchars($eachroom['room_no']) ?>"
            role="tab"
            data-room-no="<?= htmlspecialchars($eachroom['room_no']) ?>"
          
        >
            <?= htmlspecialchars($eachroom['room_no']) ?>
        </a>
    </li>


                        <?php endforeach; ?>
                        <!--

                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: green"
                            data-bs-toggle="tab"
                            href="#room101"
                            role="tab"
                            >101</a
                          >
                        </li>

                        
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: red"
                            data-bs-toggle="tab"
                            href="#room102"
                            role="tab"
                            >102</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: red"
                            data-bs-toggle="tab"
                            href="#room102"
                            role="tab"
                            >103</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: green"
                            data-bs-toggle="tab"
                            onlick="#room102"
                            role="tab"
                            >104</a
                          >
                        </li>

                        
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: green"
                            data-bs-toggle="tab"
                            href="#room103"
                            role="tab"
                            >112</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: goldenrod"
                            data-bs-toggle="tab"
                            href="#room103"
                            role="tab"
                            >106</a
                          >
                        </li>

                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: goldenrod"
                            data-bs-toggle="tab"
                            href="#room103"
                            role="tab"
                            >107</a
                          >
                        </li>

                        
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: green"
                            data-bs-toggle="tab"
                            href="#room104"
                            role="tab"
                            >108</a
                          >
                        </li>

                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: green"
                            data-bs-toggle="tab"
                            href="#room105"
                            role="tab"
                            >109</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: red"
                            data-bs-toggle="tab"
                            href="#room105"
                            role="tab"
                            >110</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: red"
                            data-bs-toggle="tab"
                            href="#room105"
                            role="tab"
                            >111</a
                          >
                        </li>

                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: green"
                            data-bs-toggle="tab"
                            href="#room106"
                            role="tab"
                            >112</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: green"
                            data-bs-toggle="tab"
                            href="#room106"
                            role="tab"
                            >113</a
                          >
                        </li>
                        <li class="nav-item" role="presentation">
                          <a
                            class="nav-link room-tab px-3 py-2 rounded text-white fw-semibold"
                            style="background-color: goldenrod"
                            data-bs-toggle="tab"
                            href="#room106"
                            role="tab"
                            >114</a
                          >
                        </li> -->

                        <!-- Continue for more rooms... -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- end Basic Area Chart -->
          
        </div>
      

      <!--  Search Bar -->
    
  
   
  <!-- Laundry Modal -->
  <div class="modal fade" id="laundryModal" tabindex="-1" aria-labelledby="laundryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
       

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="service_type">Laundry Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
          
            <div class="d-flex flex-wrap gap-2 mt-2" id="category">
             <input type="hidden" id="testNo">

              <div id="category-buttons"></div>
             <?php 
             /* foreach($category as $name){
                $category_list[]=$name['category_name'];
              }
           
           
             $uniqueValues = array_unique($category_list);
             $uniqueFirstLetters = array_unique(array_map(fn($v) => strtolower($v[0]), $uniqueValues));
             $upper = array_map('strtoupper', $uniqueFirstLetters);*/
           ?>
               <?php //foreach($upper as $uniquefilter):?>
              
               <?php //endforeach?>

            <!--  <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('A')">A</button>
              <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('B')">B</button>
              <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('C')">C</button>
              <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('D')">D</button>
              <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('J')">J</button>
              <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('P')">P</button>
              <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('S')">S</button>
              <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('T')">T</button>
              <button class="btn btn-outline-secondary btn-sm" onclick="selectAlphabet('U')">U</button> -->
            </div>
          </div>

          <div id="items-section" class="mb-3" style="display:none">
            <strong>Select Category:</strong>
            <div id="laundry-items" class="d-flex flex-wrap gap-2 mt-2 custom-scrollbar border p-2 rounded">
              

            </div>
          </div>

          <div id="details-section" style="display:none">
            <p><strong>Item:</strong> <span id="selected-item-name" class="text-primary"></span></p>

            <div class="mb-3">
              <strong>Select Service Type:</strong>
              <div id="laundry-types" class="d-flex gap-2 flex-wrap mt-2"></div>
            </div>

            <div id="quantity-section" class="mb-3" style="display:none">
              <div class="mb-2" id="selected-type-price"></div>
              <div class="input-group mb-2" style="width: max-content;">
                <button class="btn btn-outline-danger" onclick="updateQuantity(-1)">-</button>
                <input type="number" id="quantity-input" class="form-control text-center" value="0" min="0" style="width:60px">
                <button class="btn btn-outline-success" onclick="updateQuantity(1)">+</button>
              </div>
              <p>Total: <span id="item-total" class="fw-bold text-success">₹0</span></p>
              <button class="btn btn-sm btn-primary" onclick="addToCart()">Add to Cart</button>
            </div>
          </div>

          <div id="cart-section" style="display:none">
            <h6>Cart Items:</h6>
            <div id="cart-items" class="mb-2 custom-scrollbar border p-2 rounded"></div>
            <p>Total Amount: <span id="total-price" class="fw-bold text-primary">₹0</span></p>
          </div>
        </div>
          
         <!--<input type="hidden" id="amount_data" name="amount_data"  >
         <input type="hidden" id="room_no_data" name="room_no_data"> 
         <input type="hidden" id="guest_id_data" name="guest_id_data" >  -->

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success" onclick="saveLaundryOrder()">Save & Pay</button>
        </div>

      </div>



    </div>
  </div>

<!-- Maintenance Service Modal -->
<!-- <div class="modal fade" id="maintenanceModal" tabindex="-1" aria-labelledby="maintenanceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="maintenanceModalLabel">Maintenance Charges</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="maintenanceForm">
          <div class="mb-3 row">
            <label for="maintenanceDescription" class="col-sm-4 col-form-label">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="maintenanceDescription" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="maintenanceAmount" class="col-sm-4 col-form-label">Amount (₹)</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="maintenanceAmount" required>
            </div>
          </div>
          <button type="button" class="btn btn-success" onclick="addMaintenanceCharge()">Add Charge</button>
        </form>

        <hr>

        <h6>Maintenance Charges Summary:</h6>
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>Description</th>
              <th class="text-end">Amount (₹)</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody id="maintenanceTableBody"></tbody>
          <tfoot>
            <tr>
              <td><strong>Total</strong></td>
              <td class="text-end"><strong id="maintenanceTotal">₹0.00</strong></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" onclick="saveMaintenanceAndPay()">Save & Pay</button>
      </div>
    </div>
  </div>
</div>> -->

<!-- <script>
  const maintenanceItems = {
    Electrical: [
      { name: "Fan Repair", rate: 150 },
      { name: "Light Replacement", rate: 100 }
    ],
    Plumbing: [
      { name: "Tap Fixing", rate: 120 },
      { name: "Pipe Leakage", rate: 200 }
    ],
    Carpentry: [
      { name: "Door Repair", rate: 180 },
      { name: "Shelf Fixing", rate: 220 }
    ]
  };

  let maintenanceCart = [];

  function openMaintenanceModal() {
    const modal = new bootstrap.Modal(document.getElementById('maintenanceModal'));
    modal.show();
  }

  function updateMaintenanceItems(category) {
    const itemSelect = document.getElementById('maintenanceItem');
    itemSelect.innerHTML = `<option value="">-- Select Item --</option>`;

    if (maintenanceItems[category]) {
      maintenanceItems[category].forEach(item => {
        const option = document.createElement('option');
        option.value = item.name;
        option.text = `${item.name} (₹${item.rate})`;
        itemSelect.appendChild(option);
      });
    }
  }

  function addToMaintenanceCart() {
    const category = document.getElementById('maintenanceCategory').value;
    const item = document.getElementById('maintenanceItem').value;
    const qty = parseInt(document.getElementById('maintenanceQty').value);

    if (!category || !item || qty < 1) {
      alert("Please select category, item, and quantity");
      return;
    }

    const rate = maintenanceItems[category].find(i => i.name === item).rate;
    maintenanceCart.push({ item, rate, qty, amount: rate * qty });
    renderMaintenanceCart();
  }

  function removeMaintenanceItem(index) {
    maintenanceCart.splice(index, 1);
    renderMaintenanceCart();
  }

  function renderMaintenanceCart() {
    const tbody = document.querySelector("#maintenanceCartTable tbody");
    tbody.innerHTML = "";
    maintenanceCart.forEach((entry, i) => {
      tbody.innerHTML += `
        <tr>
          <td>${entry.item}</td>
          <td>₹${entry.rate}</td>
          <td>${entry.qty}</td>
          <td>₹${entry.amount}</td>
          <td><button class="btn btn-sm btn-danger" onclick="removeMaintenanceItem(${i})">Delete</button></td>
        </tr>
      `;
    });
  }

  function saveMaintenanceCart() {
    const total = maintenanceCart.reduce((sum, item) => sum + item.amount, 0);
    alert(`Total Maintenance Charges: ₹${total}`);
    // Save logic here...
    maintenanceCart = [];
    renderMaintenanceCart();
    bootstrap.Modal.getInstance(document.getElementById('maintenanceModal')).hide();
  }
</script> -->
<!-- <script>
  let maintenanceCharges = [];

  function addMaintenanceCharge() {
    const desc = document.getElementById("maintenanceDescription").value.trim();
    const amt = parseFloat(document.getElementById("maintenanceAmount").value.trim());

    if (!desc || isNaN(amt)) {
      alert("Please fill both fields properly.");
      return;
    }

    maintenanceCharges.push({ desc, amt });
    updateMaintenanceTable();

    // Clear form
    document.getElementById("maintenanceForm").reset();
  }

  function updateMaintenanceTable() {
    const tbody = document.getElementById("maintenanceTableBody");
    tbody.innerHTML = "";

    let total = 0;
    maintenanceCharges.forEach((item, index) => {
      total += item.amt;

      const row = `<tr>
        <td>${item.desc}</td>
        <td class="text-end">₹${item.amt.toFixed(2)}</td>
        <td class="text-center">
          <button class="btn btn-sm btn-danger" onclick="removeMaintenanceCharge(${index})">Remove</button>
        </td>
      </tr>`;
      tbody.innerHTML += row;
    });

    document.getElementById("maintenanceTotal").innerText = `₹${total.toFixed(2)}`;
  }

  function removeMaintenanceCharge(index) {
    maintenanceCharges.splice(index, 1);
    updateMaintenanceTable();
  }

  function saveMaintenanceAndPay() {
    const total = maintenanceCharges.reduce((sum, item) => sum + item.amt, 0);
    const modal = bootstrap.Modal.getInstance(document.getElementById("maintenanceModal"));
    modal.hide(); // Close the modal
    showPaymentFromLaundry(total); // Redirect to payment
  }
</script> -->

<!-- Maintenance Charges Module UI -->
<div class="modal fade" id="maintenanceModal" tabindex="-1" aria-labelledby="maintenanceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h5 class="mb-3"><i class="bi bi-scissors"></i> Maintenance Charges</h5>
            <p class="mb-3">Select Maintenance Services</p>

            <div class="row g-3">
              <div class="col-md-6">
                <button class="btn btn-outline-secondary w-100" onclick="addMaintenanceItem('Room Charge', 500)">Room Charge <span class="float-end">₹500</span></button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-secondary w-100" onclick="addMaintenanceItem('Room Service', 1200)">Room Service <span class="float-end">₹1200</span></button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-secondary w-100" onclick="addMaintenanceItem('EB Bill', 1500)">EB Bill <span class="float-end">₹1500</span></button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-secondary w-100" onclick="addMaintenanceItem('Maintenance Charges', 600)">Maintenance Charges <span class="float-end">₹600</span></button>
              </div>
            </div>

            <!-- Custom Other Service -->
            <div class="mt-4 border p-3 rounded">
              <label class="form-label">Other Service</label>
              <input type="text" id="customServiceName" class="form-control mb-2" placeholder="Custom maintenance service">
              <input type="number" id="customServiceAmount" class="form-control mb-2" placeholder="Amount">
              <button class="btn btn-sm btn-success" onclick="addCustomService()">Add</button>
            </div>

            <!-- Cart Display -->
            <div id="maintenance-cart" class="mt-4 d-none">
              <h6>Selected Services</h6>
              <div id="maintenance-items" class="mb-2"></div>
              <div class="d-flex justify-content-between border-top pt-2">
                <strong>Total</strong>
                <strong id="maintenance-total">₹0</strong>
              </div>
            </div>

            <div class="mt-4 d-flex justify-content-between">
              <button class="btn btn-outline-secondary" data-bs-dismiss="modal">&larr; Back</button>
              <button class="btn btn-primary" onclick="saveMaintenanceOrder()">Save & Pay</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const maintenanceCart = [];

  function addMaintenanceItem(name, amount) {
    maintenanceCart.push({ name, amount });
    renderMaintenanceCart();
  }

  function addCustomService() {
    const name = document.getElementById('customServiceName').value.trim();
    const amount = parseFloat(document.getElementById('customServiceAmount').value);
    if (!name || isNaN(amount) || amount <= 0) return alert("Enter valid service and amount");
    maintenanceCart.push({ name, amount });
    renderMaintenanceCart();
    document.getElementById('customServiceName').value = '';
    document.getElementById('customServiceAmount').value = '';
  }

  function renderMaintenanceCart() {
    const container = document.getElementById('maintenance-items');
    container.innerHTML = '';
    let total = 0;
    maintenanceCart.forEach(item => {
      const row = document.createElement('div');
      row.className = 'd-flex justify-content-between border-bottom py-1';
      row.innerHTML = `<div>${item.name}</div><div>₹${item.amount}</div>`;
      container.appendChild(row);
      total += item.amount;
    });
    document.getElementById('maintenance-total').textContent = `₹${total}`;
    document.getElementById('maintenance-cart').classList.remove('d-none');
  }

  function saveMaintenanceOrder() {
    const total = maintenanceCart.reduce((sum, item) => sum + item.amount, 0);
    if (total === 0) return alert('No service selected');

    const cartData = {
      items: maintenanceCart,
      total: total,
      guest: 'Guest 1',
      room: '101'
    };

    sessionStorage.setItem('maintenanceCartData', JSON.stringify(cartData));

    // Hide the modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('maintenanceModal'));
    modal.hide();

    // Redirect to payment
    window.location.href = `payment.html?amount=${total}`;
  }
</script>




  <script>
   /* const laundryData = {
      'A': ['Apron', 'Abaya'],
      'B': ['Bedsheet', 'Blanket'],
      'C': ['Curtain', 'Coat'],
      'D': ['Dress', 'Dupatta'],
      'J': ['Jeans', 'Jacket'],
      'P': ['Pant', 'Pillow Cover'],
      'S': ['Shirt', 'Saree'],
      'T': ['T-shirt', 'Towel'],
      'U': ['Uniform', 'Undergarments']
    };

    const itemDetails = {
      'Shirt': { types: ['Dry Wash', 'Steam Press'], prices: [25, 15], unit: 'per pc' },
      'T-shirt': { types: ['Dry Wash', 'Steam Press'], prices: [20, 12], unit: 'per pc' },
      'Jeans': { types: ['Dry Wash', 'Steam Press'], prices: [35, 20], unit: 'per pc' },
      'Bedsheet': { types: ['Dry Wash'], prices: [40], unit: 'per pc' },
      'Saree': { types: ['Dry Wash', 'Steam Press', 'Dry Clean'], prices: [50, 30, 80], unit: 'per pc' }
    };
*/





//based on category selection 

    function selectAlphabet(letter) {

      fetch(`/viyoma/category_alpha/${letter}`)
                .then(response => response.json())
                
                .then(data => {
                  
                    const items = data[letter] || [];
      const container = document.getElementById('laundry-items');
      container.innerHTML = '';

      
      items.forEach(item => {
        const btn = document.createElement('button');
        btn.className = 'btn btn-outline-primary btn-sm';
        btn.innerText = item;
        btn.onclick = () => selectItem(item);
        container.appendChild(btn);
      });
      document.getElementById('items-section').style.display = 'block';  
                })
                .catch(error => {
                   
                    console.error(error);
                });


      
    }




    function selectItem(item) {


  fetch(`/viyoma/servicemode_alpha/${item}`)
                .then(response => response.json())
                
                .then(data => {


      document.getElementById('selected-item-name').textContent = item;
      const typesWrap = document.getElementById('laundry-types');
      typesWrap.innerHTML = '';



      const details = data[item] || { types: [], prices: [], unit: [] };
      
      details.types.forEach((type, i) => {
        const btn = document.createElement('button');
        btn.className = 'btn btn-outline-secondary btn-sm';
        btn.innerHTML = `${type} - ₹${details.prices[i]}`;
      
        btn.onclick = () => selectType(item, type, details.prices[i], details.unit);
        typesWrap.appendChild(btn);
      });
      document.getElementById('details-section').style.display = 'block';
      document.getElementById('quantity-section').style.display = 'none';
       })
                .catch(error => {
                   
                    console.error(error);
                });


    }

    function selectType(item, type, price, unit) {
      window.currentSelection = { item, type, price, unit };
      //here not getting
      document.getElementById('selected-type-price').textContent = `${type} - ₹${price} ${unit}`;
      document.getElementById('quantity-input').value = 0;
      document.getElementById('item-total').textContent = '₹0';
      document.getElementById('quantity-section').style.display = 'block';
    }
      var quantity=[];
    function updateQuantity(change) {
      const input = document.getElementById('quantity-input');
      let qty = parseInt(input.value) || 0;
      qty = Math.max(0, qty + change);
      input.value = qty;
      quantity={qty};
      console.log(quantity);
      updateTotal();
    }

    function updateTotal() {
      const qty = parseInt(document.getElementById('quantity-input').value) || 0;

      const price = window.currentSelection?.price || 0;
      document.getElementById('item-total').textContent = `₹${qty * price}`;
    }

    function addToCart() {
      
      const qty = parseInt(document.getElementById('quantity-input').value);
      //console.log(window.currentSelection );
      if (!window.currentSelection || qty <= 0) return alert('Select quantity');
      const { item, type, price, unit } = window.currentSelection;
      const cart = document.getElementById('cart-items');
      cart_arr.push({ item, type, price, qty });
     console.log(cart_arr);
 
      const row = document.createElement('div');
      row.className = 'd-flex justify-content-between align-items-center border-bottom py-1';
      row.innerHTML = `
        <div>
          <strong>${item}</strong> - ${type} (${qty} × ₹${price} )
        </div>
        <div class="text-primary">₹${qty * price}</div>
      `;
      cart.appendChild(row);



      document.getElementById('cart-section').style.display = 'block';
      updateCartTotal();
    }

    function updateCartTotal() {
      let total = 0;
      document.querySelectorAll('#cart-items .text-primary').forEach(el => {
        const val = parseInt(el.textContent.replace('₹', '')) || 0;
        total += val;
      });
      document.getElementById('total-price').textContent = `₹${total}`;
    }

// Save laundry order and redirect to payment 
function saveLaundryOrder() {
  const total = document.getElementById('total-price').textContent;
  const room_no = document.getElementById('selected-room-no').innerHTML;
  const guest = document.getElementById('testNo').value;
  const service_type = document.getElementById('service_type').innerHTML;
  if (total === '₹0') return alert('Cart is empty');
  
  // Save the complete cart data
  const cartData = {
    items: document.getElementById('cart-items').innerHTML,
    total: total,
    guest: guest,//currentGuestLabel || 'Guest 1',
    room: 'room_no' // You can make this dynamic if needed
  };
  
  //alert(document.getElementById('cart-items').innerHTML);
  // Store as JSON string
  sessionStorage.setItem('laundryCartData', JSON.stringify(cartData));

 


 //assign the value on form

/*document.getElementById('amount_data').value=total;
document.getElementById('room_no_data').value=room_no;
document.getElementById('guest_id_data').value=guest;*/

  // Redirect to payment page with amount parameter
  /*window.location.href = `payment/amount=${total.replace('₹', '')}/room_no=${room_no}/guest=${guest}`;*/
console.log(cart_arr);
let form = document.createElement("form");
form.method = "POST";          // or "GET"
form.action = "paymentrecd";   // URL to send data

// Create input fields
let input1 = document.createElement("input");
input1.type = "hidden";
input1.name = "amount_data";
input1.value = total.replace('₹', '');

let input2 = document.createElement("input");
input2.type = "hidden";
input2.name = "room_no_data";
input2.value = room_no;

let input3 = document.createElement("input");
input3.type = "hidden";
input3.name = "guest_id_data";
input3.value = guest;

let input4 = document.createElement("input");
input4.type = "hidden";
input4.name = "service_info";
input4.value = JSON.stringify(cart_arr);

let input5 = document.createElement("input");
input5.type = "hidden";
input5.name = "service_type";
input5.value = service_type;

// Append inputs to form
form.appendChild(input1);
form.appendChild(input2);
form.appendChild(input3);
form.appendChild(input4);
form.appendChild(input5);
// Append form to body (required for submission)
document.body.appendChild(form);

// Submit the form
form.submit();




}


//  // Restore cart items if returning from payment page
document.addEventListener('DOMContentLoaded', function() {
  // Check if we're returning from payment page
  if (sessionStorage.getItem('laundryCartItems')) {
    // Restore cart items
    document.getElementById('cart-items').innerHTML = sessionStorage.getItem('laundryCartItems');
    document.getElementById('total-price').textContent = sessionStorage.getItem('laundryTotalAmount');
    
    // Show the cart section
    document.getElementById('cart-section').style.display = 'block';
    
    // Clear the stored data
    sessionStorage.removeItem('laundryCartItems');
    sessionStorage.removeItem('laundryTotalAmount');
    
    // Reopen the modal
    const modal = new bootstrap.Modal(document.getElementById('laundryModal'));
    modal.show();
  }
});
  </script>
<script>
  let dropdownInputId = '';
  let currentGuestLabel = '';
  let cart_arr=[];
  function openLaundryFromDropdown(inputId, guestLabel,service_type) {
    dropdownInputId = inputId;
    currentGuestLabel = guestLabel;
    
   
    
    if(guestLabel=='guest_1'){
     guest_id=document.getElementById('guest_id').value;
     document.getElementById('testNo').value=guest_id;
    }else{
     guest_id=document.getElementById('guest_id1').value;
     document.getElementById('testNo').value=guest_id;
    }
    document.getElementById('service_type').innerHTML=service_type;
     
    
const container = document.getElementById("category-buttons");

   fetch(`/viyoma/service_category/${service_type}`)
                .then(response => response.json())
                
                .then(data => {

                 let count=1;
                container.innerHTML="";
                 data.forEach(item => {
                    

                     let btn = document.createElement("button");
    btn.className = "btn btn-outline-secondary btn-sm m-1";
    btn.textContent = item;
    btn.onclick = function() {
        selectAlphabet(item);
    };
    container.appendChild(btn);

                    count++;
                    });
               


    
          })
          .catch(error => {
             
              console.error(error);
          });
      
      document.getElementById('items-section').style.display="none";
      document.getElementById('details-section').style.display="none";
      document.getElementById('cart-section').style.display="none";
       document.getElementById('cart-items').innerHTML='';
      document.getElementById('laundry-items').innerHTML = '';


      cart_arr = [];


    const modal = new bootstrap.Modal(document.getElementById('laundryModal'));
    modal.show();

    // Update modal header with guest
    document.getElementById('roomGuestLabel').innerText = `Room 101 - ${guestLabel}`;
    resetModal();
  }

//wallets

    function setwallet(guestLabel) {

       if(guestLabel=='guest_1'){
     guest_id=document.getElementById('guest_id').value;
   
    }else{
     guest_id=document.getElementById('guest_id1').value;
    
    }
window.location.href = "<?= base_url('wallet'); ?>/" + guest_id;



    }
function sethealth(guestLabel) {

       if(guestLabel=='guest_1'){
     guest_id=document.getElementById('guest_id').value;
   
    }else{
     guest_id=document.getElementById('guest_id1').value;
    
    }
window.location.href = "<?= base_url('prescri'); ?>/" + guest_id;



    }





  function submitLaundry() {
    if (cart.length === 0) {
      alert("Add items to cart first");
      return;
    }

    const totalAmount = cart.reduce((a, b) => a + b, 0);
    const summaryText = `Laundry - ₹${totalAmount}`;
    alert(`Order submitted! Total: ₹${totalAmount}`);

    // Update the correct dropdown input
    if (dropdownInputId) {
      document.getElementById(dropdownInputId).value = summaryText;
    }

    // Close modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('laundryModal'));
    modal.hide();
  }
</script>


<script>
  // Set selected service value to input
  function setService(inputId, value) {
    document.getElementById(inputId).value = value;
  }

  // Toggle submenus on click (optional — improves mobile experience)
  document.querySelectorAll(".dropdown-submenu > .dropdown-item").forEach((item) => {
    item.addEventListener("click", function (e) {
      e.stopPropagation();
      const submenu = this.nextElementSibling;
      if (submenu && submenu.classList.contains("dropdown-menu")) {
        submenu.style.display = submenu.style.display === "block" ? "none" : "block";
      }
    });
  });

  // Enable/Disable fields based on guest selection
  document.querySelectorAll(".guest-select").forEach((checkbox) => {
    const cardBody = checkbox.closest(".card-body");
    const inputs = cardBody.querySelectorAll(
      "input:not(.guest-select), select, .dropdown-toggle"
    );

    const updateDisabledState = () => {
      const enabled = checkbox.checked;
      inputs.forEach((input) => {
        input.disabled = !enabled;

        // Handle dropdown interactivity
        if (input.classList.contains("dropdown-toggle")) {
          const menu = input.parentElement.querySelector(".dropdown-menu");
          if (menu) menu.style.pointerEvents = enabled ? "auto" : "none";
        }
      });

      const guestLabel = checkbox.nextElementSibling;
      guestLabel.style.color = enabled ? "#1B5E20" : "#6c757d";
      checkbox.style.backgroundColor = enabled ? "#1B5E20" : "";
      checkbox.style.borderColor = "#1B5E20";
    };

    checkbox.addEventListener("change", updateDisabledState);
    updateDisabledState(); // Initialize on load
  });
</script>


    <script>
      function handleColorTheme(e) {
        document.documentElement.setAttribute("data-color-theme", e);
      }
    </script>
    <!-- this script for select the sub-dropdown -->
  <script>
function setService(inputId, value) {
  document.getElementById(inputId).value = value;
}

document.querySelectorAll(".guest-select").forEach((checkbox) => {
  const cardBody = checkbox.closest(".card-body");
  const inputs = cardBody.querySelectorAll(
    "input:not(.guest-select), select, .dropdown-toggle"
  );
  inputs.forEach((input) => (input.disabled = !checkbox.checked));

  checkbox.addEventListener("change", function () {
    const cardBody = this.closest(".card-body");
    const inputs = cardBody.querySelectorAll(
      "input:not(.guest-select), select, .dropdown-toggle"
    );
    inputs.forEach((input) => {
      input.disabled = !this.checked;
      if (input.classList.contains("dropdown-toggle")) {
        input.parentElement.querySelector(
          ".dropdown-menu"
        ).style.pointerEvents = this.checked ? "auto" : "none";
      }
    });
    const guestLabel = this.nextElementSibling;
    if (this.checked) {
      guestLabel.style.color = "#1B5E20";
      this.style.backgroundColor = "#1B5E20";
      this.style.borderColor = "#1B5E20";
    } else {
      guestLabel.style.color = "#6c757d";
      this.style.backgroundColor = "";
      this.style.borderColor = "#1B5E20";
    }
  });
  checkbox.dispatchEvent(new Event("change"));
});
</script>






<script>

//this is trggered the first vale

  document.addEventListener('DOMContentLoaded', function () {
    const firstTab = document.querySelector('.room-tab');
    if (firstTab) {
        firstTab.click();
    }
});


document.querySelectorAll('.room-tab').forEach(tab => {
    tab.addEventListener('click', function (e) {
        e.preventDefault();

        // Get values from the clicked tab
        let room_no = this.getAttribute('data-room-no');
       document.getElementById('selected-room-no').innerHTML = room_no;
        

          fetch(`/viyoma/room_guest/${room_no}`)
                .then(response => response.json())
                
                .then(data => {

                 let count=1;
                 data.forEach(item => {
                    if (count === 1) {
                        document.getElementById('guestName').value = item.first_name || '';
                        document.getElementById('guestContact').value = item.contact || '';
                       
                       document.getElementById('guest_id').value = item.guest_id || '';
                    } 
                     if (count === 2) {

                        document.getElementById('guestName1').value = item.first_name || '';

                        document.getElementById('guestContact1').value = item.contact || '';
                         document.getElementById('guest_id1').value = item.guest_id || '';
                    }

                    count++;
                    });
               


    
          })
          .catch(error => {
             
              console.error(error);
          });





    });
});
</script>





    <script src="<?= base_url(); ?>/public/dist/assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="<?= base_url(); ?>/public/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.init.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/theme.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/app.min.js"></script>
    <script src="<?= base_url(); ?>/public/dist/assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
  </body>
</html>
