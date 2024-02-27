<?php
$user = $_POST["txtUsuario"];
$clave = $_POST["txtClave"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Top Clubes de Europa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .header h1 {
      margin: 0;
    }

    .decorative-buttons {
      display: flex;
      gap: 10px;
    }

    .decorative-buttons button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
    }

    .table-actions {
      display: flex;
      gap: 10px;
    }

    .table-actions button {
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .table-actions button i {
      font-size: 18px;
      color: #007bff;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="header">
      <h1>Top Clubes de Europa</h1>
    </div>

    <div class="decorative-buttons">
      <button>Añadir Club</button>
      <button>Exportar a PDF</button>
      <button>Exportar a Excel</button>
      <button>Cerrar Sesión</button>
    </div>

    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">País</th>
          <th scope="col">Liga</th>
          <th scope="col">Año de fundación</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Real Madrid C.F.</td>
          <td>España</td>
          <td>LaLiga</td>
          <td>1902</td>
          <td class="table-actions">
            <button onclick="editarClub('Real Madrid C.F.')"><i class="fas fa-edit"></i></button>
            <button onclick="eliminarClub('Real Madrid C.F.')"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <td>FC Barcelona</td>
          <td>España</td>
          <td>LaLiga</td>
          <td>1899</td>
          <td class="table-actions">
            <button onclick="editarClub('FC Barcelona')"><i class="fas fa-edit"></i></button>
            <button onclick="eliminarClub('FC Barcelona')"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <td>Bayern Munich</td>
          <td>Alemania</td>
          <td>Bundesliga</td>
          <td>1900</td>
          <td class="table-actions">
            <button onclick="editarClub('Bayern Munich')"><i class="fas fa-edit"></i></button>
            <button onclick="eliminarClub('Bayern Munich')"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <td>Manchester City F.C.</td>
          <td>Inglaterra</td>
          <td>Premier League</td>
          <td>1880</td>
          <td class="table-actions">
            <button onclick="editarClub('Manchester City F.C.')"><i class="fas fa-edit"></i></button>
            <button onclick="eliminarClub('Manchester City F.C.')"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <td>Liverpool F.C.</td>
          <td>Inglaterra</td>
          <td>Premier League</td>
          <td>1892</td>
          <td class="table-actions">
            <button onclick="editarClub('Liverpool F.C.')"><i class="fas fa-edit"></i></button>
            <button onclick="eliminarClub('Liverpool F.C.')"><i class="fas fa-trash-alt"></i></button>
          </td>
          </tr>
        </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Future enhancements:
    // - Implement functionality for adding clubs (consider user input validation and secure data handling)
    // - Update and maintain the club data periodically to ensure accuracy

    // Example placeholder function for adding a club (replace with actual implementation):
    function addClub() {
      alert("Functionality for adding clubs is not yet implemented.");
    }
  </script>
</body>

</html>

