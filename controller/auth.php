<?php
// var_dump($_POST['login']);
if (isset($_POST["login"])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] = '123') {
        session_start();
        $_SESSION['username'] = 'admin';
        $_SESSION['picture']= 'admin.png';
        var_dump($_SESSION['username']);
        header("Location:../views/adminHome.php");
    } else {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=cafeteria", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stm = $pdo->query("select * from users where username='{$_POST['username']}' and password='{$_POST['pass']}' ");
            if ($stm) {
                $result = $stm->fetchAll(PDO::FETCH_ASSOC);
                // echo "<pre>";
                // var_dump($result);
                // echo "</pre>";
                if (count($result) != 0) {
                    var_dump($result);
                    foreach ($result as $row) {
                        session_start();
                        // $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['id']=$row['id'];
                        $_SESSION['picture']=$row['picture'];
                        
                        header("Location:../views/userHome.php");
                        // $_SESSION_destroy();
                    }
                } else {
                    header("Location:../index.php");
                }
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
