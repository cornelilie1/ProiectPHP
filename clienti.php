
<?php
  //conectare la baza de date
include('dbconnect.php');
include('main.php');

  //selectarea datelor din tabel
  $query = "SELECT * FROM clienti";
  $result = mysqli_query($conn, $query);

  //construirea tabelului
  echo "<div class='text-center text-white bg-primary p-3 bg-dark'>";
  echo "Tabel Clienti";
  echo "</div>";
  echo "<div class='table-responsive'>";
  echo "<table class='table'>";
  echo "<thead>";
    echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>First Name</th>";
      echo "<th>Last Name</th>";
      echo "<th>Email</th>";
    echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['first_name'] . "</td>";
      echo "<td>" . $row['last_name'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>";
      echo "</td>";
      echo "<td>";
      echo '<form action="detele_clienti.php" method="post">
      <input type="hidden" name="id" value="'.$row["id"].'">
      <input type="submit" value="Delete" class="btn btn-danger">
      </form>';
      echo "</td>";
      
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
echo "</div>";

  //inchiderea conexiunii la baza de date
  mysqli_close($conn);
?>
<button type="button" class="btn btn-dark bg-dark" data-toggle="modal" data-target="#addPlataModal">
  Adauga client
</button>

<div class="modal fade" id="addPlataModal" tabindex="-1" role="dialog" aria-labelledby="addPlataModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addPlataModalLabel">Adaugă Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="add_clienti.php" method="post">
          <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
          </div>
          <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Inchide</button>
            <button type="submit" class="btn btn-primary">Salveaza</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

