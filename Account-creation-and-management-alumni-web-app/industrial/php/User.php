<?php 

function getUserById($id, $db){
    $sql = "SELECT * FROM users WHERE id = ?";
	$stmt = $db->prepare($sql);
	$stmt->execute([$id]);
    
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        return $user;
    } else {
        return 0;
    }
}

function getAllUsers($db) {
    $sql = "SELECT * FROM users";
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
