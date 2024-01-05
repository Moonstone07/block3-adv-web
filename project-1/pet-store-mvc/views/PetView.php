<?php



if ($species) {

    echo "<table border='1'>";
    echo "<tr>
        <th>ID</th>
        <th>Species Type</th>
        <th>Actions</th>
    </tr>";
    foreach ($species as $specie) {
        echo "<td>" . $specie['pet_species_id'] . "</td>";
        echo "<td>" . $specie['pet_species_type'] . "</td>";
        echo "<td>";
        include 'updateSpeciesTypeForm.php';
        // include 'deleteSpeciesTypeForm.php';
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No species data found.";
}

if ($pets) {
    echo "<table border='1'>";
    echo "<tr>
        <th>ID</th>
        <th>name</th>
        <th>age</th>
        <th>color</th>
        <th>breed</th>
        <th>species</th>
        <th>Actions</th>
    </tr>";
    foreach ($pets as $pet) {
        echo "<td>" . $pet['pet_id'] . "</td>";
        echo "<td>" . $pet['pet_name'] . "</td>";
        echo "<td>" . $pet['pet_age'] . "</td>";
        echo "<td>" . $pet['pet_color'] . "</td>";
        echo "<td>" . $pet['breed_id'] . "</td>";
        echo "<td>" . $pet['species_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No species data found.";
}


?>