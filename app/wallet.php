<?php
session_start();

if(isset($_SESSION['nama_akun'])){
}else{
    header("Location: ../index.php?redirect=silakan untuk login terlebih dahulu", true, 301);
}

include("navbar-template.php");
?>
    <main>
        <div class="container">
        <table>
            <tr>
                <th>
                    test
                </th>
                <th>
                    test
                </th>
            </tr>
            <tr>
                <td>
                    ini isinya
                </td>
                <td>
                    td ini siinya
                </td>
            </tr>
        </table>
        </div>
        
    </main>
    <footer>
        <p>copyright &copy; nabungyuk2021</p>
    </footer>
</body>
</html>