<header>
    <?php
    require_once 'admin/backend/conn.php';
    $query = "SELECT * FROM rides";
    $statement = $conn->prepare($query);
    $statement->execute();
    $rides = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container header">
        <img src="<?php echo $base_url; ?>/img/logo-big-v4.png" alt="logo" class="logo">
        <h1>Attracties</h1>
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">Attracties</a> |
            <a href="<?php echo $base_url; ?>/admin/index.php">Admin</a>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo $base_url; ?>/admin/logout.php">Uitloggen</a>
            <?php endif; ?>
        </nav>
    </div>
</header>