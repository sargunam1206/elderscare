
<?php
if (!function_exists('generateGrn')) {
    function generateGrn($grnModel)
    {
        $currentYear = date('Y');

        // Fetch the last GRN for the current year
        $lastGrnRecord = $grnModel
            ->like('grn', "GRN-$currentYear-", 'after')
            ->orderBy('grn', 'DESC')
            ->first();

        // Extract the last GRN number and increment it
        $newNumber = 1;
        if ($lastGrnRecord && isset($lastGrnRecord['grn'])) {
            $lastGrnParts = explode('-', $lastGrnRecord['grn']);
            $lastNumber = end($lastGrnParts); // Get the last part of the GRN
            $newNumber = intval($lastNumber) + 1;
        }

        // Generate the new GRN
        $newGrn = sprintf("GRN-%s-%06d", $currentYear, $newNumber);

        // Check for duplicates before returning
        while ($grnModel->where('grn', $newGrn)->countAllResults() > 0) {
            $newNumber++;
            $newGrn = sprintf("GRN-%s-%06d", $currentYear, $newNumber);
        }

        return $newGrn;
    }
}
