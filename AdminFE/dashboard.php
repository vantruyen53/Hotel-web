<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header d-flex flex-column">
                <div class="img"><img src="../image/logo.png" alt=""></div>
                <h1>CHERRY BLOSSOM HOTEL DASH BOARD</h1>
            </div>
            
            <nav class="flex flex-col gap-4">
                <div>
                    <h3 class="group-title">MENU</h3>
                    <div class="flex flex-col gap-1">
                        <a href="dashboard.html" class="sidebar-link active">
                            <span class="material-symbols-outlined">dashboard</span>
                            CONTROL PANEL
                        </a>
                        <a href="crud.html" class="sidebar-link">
                            <span class="material-symbols-outlined">inventory_2</span>
                            ROOM
                        </a>
                        <!-- Add other links like Orders, Customers here -->
                    </div>
                </div>
                 <div>
                    <h3 class="group-title">Cài đặt</h3>
                    <div class="flex flex-col gap-1">
                        <a href="#" class="sidebar-link">
                            <span class="material-symbols-outlined">settings</span>
                            SETTINGS
                        </a>
                         <a href="#" class="sidebar-link">
                            <span class="material-symbols-outlined">HPEL</span>
                            HEPL
                        </a>
                    </div>
                </div>
            </nav>

            <div class="sidebar-footer">
                <!-- User profile can go here -->
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="content-header">
                <div>
                    <h2>DASH BOARD</h2>
                    <p>Đây là báo cáo và hiệu suất hôm nay</p>
                </div>
            </header>

            <!-- Stat Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="custom-card p-5 stat-card">
                    <p class="stat-title">REVENUA TOTAL</p>
                    <p class="stat-value">$ <span id="revenua-total">100</span></p>
                    <p class="text-sm text-green-400">+15% so với tháng trước</p>
                </div>
                <div class="custom-card p-5 stat-card">
                    <p class="stat-title">NEW BOOKING</p>
                    <p class="stat-value">5</p>
                    <p class="text-sm text-green-400">UP 2% FROM PREVIOUS MONTH</p>
                </div>
                <div class="custom-card p-5 stat-card">
                    <p class="stat-title">NEW CUSTOMER</p>
                    <p class="stat-value">2</p>
                    <p class="text-sm text-green-400">UP 2% FROM PREVIOUS MONTH</p>
                </div>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="custom-card">
                    <div class="custom-card-header"><h3 class="custom-card-title">REVENUA</h3></div>
                    <div class="custom-card-body"><canvas id="monthlyRevenueChart"></canvas></div>
                </div>
                <div class="custom-card">
                    <div class="custom-card-header"><h3 class="custom-card-title">TYPE OF ROOM</h3></div>
                    <div class="custom-card-body"><canvas id="type-of-room"></canvas></div>
                </div>
                <div class="custom-card">
                    <div class="custom-card-header"><h3 class="custom-card-title">NEW BOOKING</h3></div>
                    <div class="custom-card-body"><canvas id="newOrdersChart"></canvas></div>
                </div>
                <div class="custom-card">
                    <div class="custom-card-header"><h3 class="custom-card-title">NEW CUSTOMER</h3></div>
                    <div class="custom-card-body"><canvas id="newCustomersChart"></canvas></div>
                </div>
            </div>
        </main>
    </div>
    <script src="custom.js"></script>
</body>
</html>
