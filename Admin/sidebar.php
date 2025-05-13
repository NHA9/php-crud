<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
   * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: #f0f2f5;
        }
   .sidebar {
            width: 250px;
            background: #2c3e50;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100%;
            transition: all 0.3s;
        }

        .sidebar:hover {
            width: 260px;
            box-shadow: 2px 0 15px rgba(0,0,0,0.1);
        }
</style>
<div class="sidebar">
            <h2>Dashboard</h2>
            <nav>
                <ul style="list-style: none; margin-top: 20px;">
                    <li style="padding: 10px 0;"> <a style="text-decoration: none; color:#fff;" href="dashbord.php"> 🏠Home</a></li>
                    <li style="padding: 10px 0;">📊 Analytics</li>
                    <li style="padding: 10px 0;"><a style="text-decoration: none; color:#fff;" href="viewProduct.php">👁️ View Product</a></li>
                    <li style="padding: 10px 0;"><a style="text-decoration: none; color:#fff;" href="add-product.php"> ➕Add Product</a></li>
                    <li style="padding: 10px 0;">📈 Reports</li>
                    <li style="padding: 10px 0;">⚙️ Settings</li>
                    <!-- <a href="./logout.php" style="text-decoration: none; color:#fff;" ><li style="padding: 10px 0;"><i class="fa-solid fa-right-from-bracket"></i>Logout</li></a> -->
            
                    <li style="padding: 10px 0;"><a style="text-decoration: none; color:#fff;" href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                    
                </ul>
            </nav>
        </div>