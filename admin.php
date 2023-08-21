<!DOCTYPE html>
<!-- PHP file for the admin page. Made using the template of the front landing page.
    To get to this page, the admin would have to add a '/admin/' to the end of the landing page's url
    so that he/she can add a new blog. Due to technical and time issues, I was only able to add one admin function to this page. -->
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Liza Kim">
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="css//admin.css">
        <!-- boxicons from: https://github.com/atisawd/boxicons -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <!-- google fonts from: https://fonts.google.com/specimen/Inter?sort=popularity  -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;400;600;900&display=swap" rel="stylesheet">

    </head>
    <body>
   
        <header>
            <a href="#" class="logo">Admin Page</a>
            <div class="bx bx-menu" id="menu-icon">

            <a href="admin_order_review.php">Order Review</a>
            <a href="admin.php">Home</a>
            <a href="index.php">Logout</a>

            </div>
        </header>


        <section class="services" id="services">
            <!-- https://owlcation.com/stem/Simple-search-PHP-MySQL-->
            <!-- search bar -->
            <form action="" method="GET" name="">
                <table>
                    <tr>
                        <!-- entered keyword is the value-->
                        <!-- isset ternary: https://stackoverflow.com/questions/12126420/isset-php-isset-getsomething-getsomething -->
                        <!-- ternary operator: https://www.codementor.io/@sayantinideb/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6-->
                        <td><input type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Search the blogs" /></td>
                        <td><input type="submit" name="" value="Search" /></td>
                    </tr>
                </table>
            </form>

            <?php
                include('p.php');
            ?>

            </div>
        </section>

        <section class="cta">
            <h2>Add A Blog</h2>
            <form action="insert.php" method="post">
            <h2></h2>
            <div class="id">
                <label for="id_field">ID</label>
                <input
                type="text"
                name = "id"
                placeholder="Enter blog id number" required >
            </div>

            <div class="title">
                <label for="title_field">Title</label>
                <input
                type="text"
                name = "title"
                placeholder="Enter title" required >
            </div>

            <div class="description">
            <label for="d_field">Description</label>
                <input
                type="text"
                name = "description"
                id="d_field"
                placeholder="Enter blog description" required >
            </div>

            <div class="url">
                <label for="url_field">URL</label>
                <input
                type="text"
                name="url"
                id="url_field" 
                placeholder="Enter blog url" required >
            </div>

            <div class="keywords">
                <label for="keys_field">Keywords</label>
                <input
                type="text"
                name = "keywords"
                placeholder="Enter search keywords" required >
            </div>

            <br>
            
            <div class="submit">
                <input
                type="submit"
                value="Submit" >
            </div>
            </form>
        </section>

    </body>
</html>
