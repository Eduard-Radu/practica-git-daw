<?php
// Sistema de Gestió de Tasques
// Versió 1.0

function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===\n";
    // ERROR INTENCIONAT: bucle for incorrecte
    for ($i = 0; $i < count($tasques); $i++) {
        echo "[$i] ERROR\n";  // Això no funcionarà correctament
    }
}

// Crea un array amb almenys 3 tasques
$tasques = [
    // TODO: Afegeix les teves tasques aquí
];

echo "=== GESTOR DE TASQUES ===\n";
echo "Benvingut al sistema!\n\n";
// TODO: Crida a la funció mostrarTasques

function mostrarUsuari($nom) {
    echo "=== GESTOR DE TASQUES ===\n";
    // TODO: Mostra "Usuari actual: " seguit del nom
    echo "Benvingut al sistema!\n";
}

// TODO: Crea una variable $usuariActual amb un nom
// TODO: Crida a la funció mostrarUsuari
?>