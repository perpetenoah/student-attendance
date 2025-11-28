<?php
include 'connexion.php';

function getAllStudents()
{
    try {
        global $pdo;

        return $pdo->query('SELECT id, matricule, first_name, last_name, birth_date, profile_photo, email FROM students WHERE deleted_at IS NULL ORDER BY last_name, first_name');

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}