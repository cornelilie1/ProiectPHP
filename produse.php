<?php
include 'main.php';
include('dbconnect.php');
 //selectarea datelor din tabel
 $query = "SELECT * FROM produse";
 $result = mysqli_query($conn, $query);

 //construirea tabelului
 echo "<div class='text-center text-white bg-dark p-3'>";
 echo "Tabel Produse";
 echo "</div>";
 echo "<div class='table-responsive '>";
 echo "<table class='table '>";
 echo "<thead>";
   echo "<tr>";
     echo "<th>ID</th>";
     echo "<th>Nume</th>";
     echo "<th>Descriere</th>";
   echo "</tr>";
 echo "</thead>";
 echo "<tbody>";
 while($row = mysqli_fetch_assoc($result)) {
   echo "<tr>";
     echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['nume'] . "</td>";
     echo "<td>" . $row['descriere'] . "</td>";
     echo "<td>";
     echo "</td>";
     echo "<td>";
     echo '<form action="delete_produse.php" method="post">
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
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addTransferModal">
  Adauga produse
</button>

<div class="modal fade" id="addTransferModal" tabindex="-1" role="dialog" aria-labelledby="addTransferModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTransferModalLabel">Adauga produse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="add_produse.php" method="post">
          <div class="form-group">
            <label for="nume">Nume:</label>
            <input type="text" class="form-control" id="nume" name="nume" required>
          </div>
          <div class="form-group">
            <label for="descriere">Descriere:</label>
            <input class="form-control" id="descriere" name="descriere" required>
            </input>
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