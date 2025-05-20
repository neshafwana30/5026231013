<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="stylesheet" href="css/kode1.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sidebar Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- arrow buttton -->
    <div class="sidebar-toggle-container">
        <label for="toggleSidebarCheckbox" class="sidebar-toggle-btn">
            <img src="assets\arrow_sidebar.png" alt="Open Sidebar" class="arrow-icon" />
        </label>
    </div>

    <!-- Sidebar -->
    <input type="checkbox" id="toggleSidebarCheckbox" class="toggle-checkbox" />
    <div id="sidebar" class="sidebar">
        <label for="toggleSidebarCheckbox" class="btn toggle-btn close-btn">
            <i class="fa fa-angle-double-left"></i>
        </label>
        <div class="logo">
            <img src="assets\Profileimg.png" class="profile-img" alt="Profile Image" />
            <div class="profile-info">
                <span class="profile-text">User</span>
                <span class="profile-email">user@gmail.com</span>
            </div>
        </div>
        <a href="#"><img src="assets/Helperlog.png" alt="Helperlog" class="icon-style" />
            Helperlog</a>
        <a href="#" class="active"><img src="assets/Helperfind.png" alt="Helperfind" class="icon-style" />
            Helperfind</a>
        <a href="#"><img src="assets/Helperassist.png" alt="Helperassist" class="icon-style" />
            Helperassist</a>

        <!-- Log out button -->
        <button id="logoutButton" class="logout-btn">
            <img src="assets/Logout.png" alt="Log Out" class="icon-style" /> Log Out
        </button>
    </div>

    <!-- Content -->
    <div class="content">
        <h2><i class="fa fa-arrow-left"></i> Pengajuan Kontrak</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 offset-md-1">
                    <div class="card mt-3 shadow">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img src="assets/Group 8449.png" alt="Group 8449" class="img-fluid mt-3 custom-img-size" />
                            <h3 class="mt-1">Ajuan Kontrak Berhasil Dibuat</h3>
                            <p class="custom-heading">
                                Ajuan kontrak anda dengan nomor id #XXXX untuk PRT atas nama
                                YYY sudah berhasil dibuat dan sedang menunggu proses review
                                oleh admin. Silahkan mengecek progres ajuan kontrak anda pada
                                laman berikut.
                            </p>
                            <button class="progress-button">Cek Progress Kontrak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
