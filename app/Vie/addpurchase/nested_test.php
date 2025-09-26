<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="refresh" content="900;url=http://viyoma.neuralarc.com/viyoma/logout" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/dist/assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .nested-container {
            margin-left: 20px;
        }
    </style>
</head>

<body>

<form id="nestedInputForm" action="<?= base_url("nestedpost"); ?>" method="POST">
    <input type="hidden" name="inputData" id="inputData">
    <button type="button" onclick="addInputBox()" class="btn bg-danger-subtle text-danger ms-6 px-4">Add Accessories</button>
    <div id="nested-container">
       <?= renderInputBoxes($nestedInputs ?? []) ?>
    </div>
    <button type="submit" name="submit1" value="true"  style="margin-top:10px" class="btn bg-success-subtle text-success ms-6 px-4">Submit</button>
</form>


<script>
    // Serialize the nested input boxes into a JSON structure
    function serializeInputs(parent) {
    const inputs = [];

    // Process each direct child container with the class `nested-container`
    parent.querySelectorAll(":scope > div.nested-container").forEach((div) => {
        // Find the input box inside this container
        const inputBox = div.querySelector(":scope > input");
        const value = inputBox ? inputBox.value.trim() : null;

        // Skip if the input box value is null
        if (value === null || value === "") {
            return; // Ignore empty values
        }

        // Recursively find children within this container
        const childContainers = div.querySelector(":scope > div.nested-container");
        const children = childContainers ? serializeInputs(div) : [];

        // Push the current container's data (value and its children)
        inputs.push({
            value: value,
            children: children,
        });
    });

    return inputs;
}






document.getElementById("nestedInputForm").addEventListener("submit", function (e) {
   e.preventDefault(); // Prevent the default form submission for testing purposes

    const container = document.getElementById("nested-container");
    const serializedData = serializeInputs(container);

    // Debugging: Ensure all values are captured
    console.log("Serialized Data Before Submit:", JSON.stringify(serializedData));
    alert(JSON.stringify(serializedData)); // Optional, for testing

    // Assign the serialized JSON to the hidden input
    document.getElementById("inputData").value = JSON.stringify(serializedData);

    // Optionally submit the form here
    e.target.submit();
});

</script>


<script>


  function addInputBox(parentId = "nested-container") {
    const parent = document.getElementById(parentId);

    // Create a new container for the input and its controls
    const container = document.createElement("div");
    container.className = "nested-container";

    // Create the input box
    const input = document.createElement("input");
    input.type = "text";
    input.placeholder = "Enter value";
    input.className = "form-control";
    input.style.marginTop = "10px";
    input.style.width = "30%";

    // Add buttons
    const addButton = document.createElement("button");
    addButton.textContent = "Add Sub-Accessories";
    addButton.type = "button";
    addButton.style.marginTop = "10px";
    addButton.className = "btn bg-info-subtle text-info ms-6 px-4";
    addButton.onclick = () => addInputBox(container.id);

    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.type = "button";
    deleteButton.style.marginTop = "10px";
    deleteButton.className = "btn bg-warning-subtle text-warning ms-6 px-4";
    deleteButton.onclick = () => container.remove();

    // Nested container for sub-children
    const nestedContainer = document.createElement("div");
    nestedContainer.className = "nested-container";

    container.id = `nested-${Date.now()}`; // Unique ID for each container

    // Append elements
    container.appendChild(input);
    container.appendChild(addButton);
    container.appendChild(deleteButton);
    container.appendChild(nestedContainer);

    // Append the container to the parent
    parent.appendChild(container);
}

</script>
                          

<?php
function renderInputBoxes($inputs, $level = 0)
{
    $html = '';
    foreach ($inputs as $index => $input) {
        $uniqueId = uniqid('nested-', true); // Generate a unique ID
        $html .= '<div class="nested-container" id="' . $uniqueId . '" style="margin-left:' . ($level * 20) . 'px">';
        $html .= '<input type="text" class="form-control" style="width:30%" placeholder="Enter value" value="' . htmlspecialchars($input['value']) . '">';
        $html .= '<button type="button" onclick="addInputBox(\'' . $uniqueId . '\')" class="btn bg-info-subtle text-info ms-6 px-4">Add Sub-Accessories</button>';
        $html .= '<button type="button" onclick="this.parentElement.remove()" class="btn bg-warning-subtle text-warning ms-6 px-4">Delete</button>';

        if (!empty($input['children'])) {
            $html .= renderInputBoxes($input['children'], $level + 1);
        }
        $html .= '</div>';
    }
    return $html;
}
?>



