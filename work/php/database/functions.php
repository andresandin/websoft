<?php

/**
 * Open the database file and catch the exception it it fails
 *
 * @var array $dsn with connection details
 *
 * @return object database connection
 */
function connectDatabase(array $dsn)
{
    try {
        $db = new PDO(
            $dsn["dsn"],
            $dsn["username"],
            $dsn["password"]
        );

        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>\n";
        print_r($dsn);
        throw $e;
    }

    return $db;
}

function wildCardSearch($db, $search){
    try{
        $like = "%$search%";

        $sql = "SELECT * FROM persons WHERE
        Personid = ?
        OR LastName LIKE ?
        OR FirstName LIKE ?
        OR Age LikE ?
    ";
    $stmt = $db->prepare($sql);
    $stmt->execute([$search, $like, $like, $like]);
    $res = $stmt->fetchAll();
    }
    catch(PDOException $e){
        echo "Failed to connect to the database using DSN:<br>\n";
        print_r($dsn);
        throw $e;
    }

    return $res;
}

function createNew($db, $lastName, $firstName, $age){
    try{
        $sql = "INSERT INTO persons 
        (LastName, FirstName, Age) 
        VALUES (?, ?, ?)";

        $stmt = $db->prepare($sql);
        $stmt->execute([$lastName, $firstName, $age]);

    }
    catch(PDOException $e){
        echo "Failed to connect to the database using DSN:<br>\n";
        print_r($dsn);
        throw $e;
}
}

function updateTable($db, $id, $lastName, $firstName, $age){
    try{
        $sql = "UPDATE persons
        SET  LastName = ?, FirstName = ?, Age = ? 
        WHERE Personid = ?";

        $stmt = $db->prepare($sql);
        $stmt->execute([$lastName, $firstName, $age, $id]);

    }
    catch(PDOException $e){
        echo "Failed to connect to the database using DSN:<br>\n";
        print_r($dsn);
        throw $e;
}
}