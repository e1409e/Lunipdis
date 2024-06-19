<?php


// Verifica si se ha enviado el parámetro 'id' en la URL
if (isset($_GET['id'])) {
    // Obtiene el id de la cita a eliminar desde la URL
    $id_cita = $_GET['id'];

    // Query para eliminar la cita con el id proporcionado
    $sql = "DELETE FROM citas WHERE id_citas = $id_cita";

    if (mysqli_query($conn, $sql)) {
        // echo "Cita eliminada correctamente";
        header("Location: ../info_medico/citas.php");
    } else {
        echo "Error al eliminar: " . mysqli_error($conn);
    }
} else {
    echo "Error: No se proporcionó un ID válido";
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>