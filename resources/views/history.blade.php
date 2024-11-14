<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/history.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <img src="{{asset('images/mykeep.png')}}" alt="Logo" class="logo">
        <div class="nav-menu">
            <a href="#">BERANDA</a>
            <a href="#">PEMBAYARAN</a>
            <a href="#" class="active">TRANSFER</a>
        </div>
        <div class="user-menu">
            <i class="fas fa-bell notification" aria-label="Notification"></i>
            <i class="fas fa-user profile" aria-label="Profile"></i>            
            <button class="logout-btn">Log Out</button>
        </div>
    </nav>

    <div class="sub-menu-container">
        <div class="sub-menu">
            <div class="menu-buttons">
                <button class="send-btn">Kirim</button>
                <button class="ask-btn">Minta</button>
                <button class="contact-btn">Kontak</button>
            </div>
            <button class="transfer-history">Riwayat Transfer</button>
        </div>
    </div>

    <div class="month-container">
        <button class="month-button active">Jan</button>
        <button class="month-button">Feb</button>
        <button class="month-button">Mar</button>
        <button class="month-button">Apr</button>
        <button class="month-button">Mei</button>
        <button class="month-button">Jun</button>
        <button class="month-button">Jul</button>
        <button class="month-button">Agu</button>
        <button class="month-button">Sep</button>
        <button class="month-button">Okt</button>
        <button class="month-button">Nov</button>
        <button class="month-button">Des</button>
    </div>

  <script>
    const buttons = document.querySelectorAll('.month-button');
    
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        // Remove active class from all buttons
        buttons.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        button.classList.add('active');
      });
    });
  </script>




    <main> 
        <div class="containerd">
            <div class="card">
                
                <h1>20 September 2024</h1>
                <hr class="solid">

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">20 September 2024</div>
                        <div class="transfer-info">BNI • SUGENG HARIANTO</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">13 September 2024</div>
                        <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">13 September 2024</div>
                        <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">13 September 2024</div>
                        <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>

            </div>
            
            
                

            <div class="card">
                <h1>13 September 2024</h1>
                <hr class="solid">

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">13 September 2024</div>
                        <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">13 September 2024</div>
                        <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">13 September 2024</div>
                        <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">13 September 2024</div>
                        <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>

                <div class="transfer-item">
                    <div class="transfer-details">
                        <div class="transfer-type">Transfer</div>
                        <div class="transfer-date">13 September 2024</div>
                        <div class="transfer-info">BCA • MUHAMMAD RAFLI MUSTARI</div>
                    </div>
                    <div>
                        <div>-Rp XXXX</div>
                        <div class="transfer-status">Berhasil</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  












  <footer class="footer">
        <div class="footer-content">
            <div>
                <img src="{{asset('images/mykeep.png')}}" alt="Footer Logo" class="footer-logo">
                <p>Teman Setia dalam Setiap Transaksi</p>
            </div>
            <div>
                <h3>Links</h3>
                <p>Pembayaran</p>
                <p>Transfer</p>
                <p>Top Up</p>
            </div>
            <div>
                <h3>Support</h3>
                <p>Contact Us</p>
                <p>Privacy Policy</p>
                <p>Terms & Conditions</p>
            </div>
            <div>
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src=""></script>
</body>
</html>
