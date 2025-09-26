<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Guest Information - <?= $guest['first_name'] ?? '' ?> <?= $guest['last_name'] ?? '' ?></title>
    <style>
        body { font-family: DejaVuSans, Arial, sans-serif; font-size: 12px; }
        .header {
            margin-bottom: 20px;
            padding-bottom: 0;
            position: relative;
        }
        .header::after {
            content: "";
            display: block;
            border-bottom: 2px solid #333;
            margin-top: 15px;
            padding-bottom: 5px;
        }
        .header-photo {
            border: 1px solid #ddd;
        }
        .section { margin-bottom: 15px; }
        .section-title { font-weight: bold; margin-bottom: 10px; padding-bottom: 5px; color: green; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
        table.info-table { border: none; }
        table.info-table td { border: none; padding: 4px; vertical-align: top; }
        table.info-table td.label { font-weight: bold; width: 30%; }
        table.bordered-table, table.bordered-table th, table.bordered-table td { border: 1px solid #ddd; padding: 6px; }
        .text-center { text-align: center; }
        .footer { margin-top: 30px; border-top: 1px solid #333; padding-top: 10px; font-size: 10px; text-align: center; }
        .document-link { color: #0000EE; text-decoration: underline; }
    </style>
</head>
<body>

<?php
// Format status
$status = $guest['status'];
if ($status === 'checked_out') {
    $status = 'Checked out';
}
?>
<table class="header" width="100%">
    <tr>
        <td class="header-content" style="text-align: left;">
            <h1>Guest Information</h1><br>
            <h2>
                <?= ucfirst(strtolower($guest['first_name'] ?? '')) ?>
                <?= ucfirst(strtolower($guest['last_name'] ?? '')) ?>
            </h2>
          <table style="width:100%; border-collapse:collapse; margin-top: 10px;">
    <tr>
        <td style="width:120px;"><strong>Booking No</strong></td>
        <td><?= esc($guest['booking_no']) ?></td>
    </tr>
    <tr>
        <td><strong>Room No</strong></td>
        <td><?= esc($guest['room']) ?></td>
    </tr>
    <tr>
        <td><strong>Room Status</strong></td>
        <td><?= ucfirst(strtolower($status)) ?></td>
    </tr>
</table>


        </td>
        <td class="header-photo" style="text-align: right; width: 100px;">
            <?php if (!empty($guest['photo_upload'])): ?>
                <img src="<?= base_url('public/' . $guest['photo_upload']) ?>" 
                     style="width:100px; height:100px; object-fit:cover;" 
                     alt="Guest Photo">
            <?php else: ?>
                <div class="photo-placeholder">Photo<br>Not<br>Available</div>
            <?php endif; ?>
        </td>
    </tr>
</table>

<div class="section">
    <div class="section-title">Personal Information</div>
    <table class="info-table">
        <tr><td class="label">Name</td><td><?= ucfirst(strtolower($guest['first_name'] ?? '')) ?> <?= ucfirst(strtolower($guest['last_name'] ?? '')) ?></td></tr>
        <tr><td class="label">Contact</td><td><?= $guest['contact'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Date of Birth</td><td><?= !empty($guest['dob']) ? date('F j, Y', strtotime($guest['dob'])) : 'N/A'; ?></td></tr>
        <tr><td class="label">Gender</td><td><?= $guest['gender'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Marital Status</td><td><?= $guest['marital_status'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Religion</td><td><?= $guest['religion'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Mother Tongue</td><td><?= $guest['mother_tongue'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Education Level</td><td><?= $guest['education_level'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Previous Occupation</td><td><?= $guest['previous_occupation'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Current Address</td><td><?= $guest['current_address'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Permanent Address</td><td><?= $guest['permanent_address'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">ID Proof</td>
            <td>
                <?php if (!empty($guest['id_proof'])): ?>
                    <a href="<?= base_url('public/' . $guest['id_proof']) ?>" class="document-link" target="_blank" rel="noopener noreferrer">
                        View ID Proof
                    </a>
                <?php else: ?>
                    N/A
                <?php endif; ?>
            </td>
        </tr>
    </table>
</div>

<?php if (!empty($guest['guardians'])): ?>
<div class="section">
    <div class="section-title">Guardian Information</div>
    <table class="bordered-table">
        <tr>
            <th>Name</th>
            <th>Relationship</th>
            <th>Contact Number</th>
            <th>Alternate Contact</th>
            <th>Email</th>
            <th>Current Address</th>
            <th>ID Proof</th>
        </tr>
        <?php foreach ($guest['guardians'] as $guardian): ?>
        <tr>
            <td><?= $guardian['full_name'] ?? 'N/A'; ?></td>
            <td><?= $guardian['relationship_with_guest'] ?? 'N/A'; ?></td>
            <td><?= $guardian['contact_number'] ?? 'N/A'; ?></td>
            <td><?= $guardian['alternate_contact'] ?? 'N/A'; ?></td>
            <td><?= $guardian['email'] ?? 'N/A'; ?></td>
            <td><?= $guardian['current_address'] ?? 'N/A'; ?></td>
            <td>
                <?php if (!empty($guardian['id_proof'])): ?>
                    <a href="<?= base_url('public/' . $guardian['id_proof']) ?>" class="document-link" target="_blank" rel="noopener noreferrer">
                        View ID Proof
                    </a>
                <?php else: ?>
                    N/A
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php endif; ?>

<?php if (!empty($guest['medical'])): ?>
<div class="section">
    <div class="section-title">Medical Information</div>
    <table class="info-table">
        <tr><td class="label">Blood Group</td><td><?= $guest['medical']['blood_group'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Known Conditions</td><td><?= $guest['medical']['known_conditions'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Disabilities</td><td><?= $guest['medical']['disabilities'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Recent Surgeries</td><td><?= $guest['medical']['recent_surgeries'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Ongoing Medication</td><td><?= $guest['medical']['ongoing_medication'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Doctor Info</td><td><?= $guest['medical']['doctor_info'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Allergies</td><td><?= $guest['medical']['allergies'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Medical Reports</td>
            <td>
                <?php if (!empty($guest['medical']['medical_reports'])): ?>
                    <a href="<?= base_url('public/' . $guest['medical']['medical_reports']) ?>" class="document-link" target="_blank" rel="noopener noreferrer">
                        View Medical Reports
                    </a>
                <?php else: ?>
                    N/A
                <?php endif; ?>
            </td>
        </tr>
    </table>
</div>
<?php endif; ?>

<?php if (!empty($guest['preferences'])): ?>
<div class="section">
    <div class="section-title">Preferences</div>
    <table class="info-table">
        <tr><td class="label">Favorite Foods</td><td><?= $guest['preferences']['fav_foods'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Disliked Foods</td><td><?= $guest['preferences']['disliked_foods'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Hobbies</td><td><?= $guest['preferences']['hobbies'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Religious Practices</td><td><?= $guest['preferences']['religious_practices'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Routine Preferences</td><td><?= $guest['preferences']['routine_preferences'] ?? 'N/A'; ?></td></tr>
        <tr><td class="label">Remarks</td><td><?= $guest['preferences']['remarks'] ?? 'N/A'; ?></td></tr>
    </table>
</div>
<?php endif; ?>

</body>
</html>