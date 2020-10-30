<?php

include "../../components/header.php";
?>

<main>

  <div class="container-fluid">


    <h3 class="text-center"> Subcategories within the database ( <i> <small>Get the count from the database here!</small> </i> ) </h3>

    <div class="users">
      <table class="table table-responsive table-light table-striped">
        <thead class="thead thead-dark">
          <tr>
            <th> ID </th>
            <th> subcategory category </th>
            <th> subcategory title </th>
            <th> subcategory description </th>
            <th> subcategory link name </th>
            <th> subcategory image </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>jeymoh</td>
            <td>James</td>
            <td>Last</td>
            <td>james@gmail.com</td>
            <td> 1/10/2020 </td>
          </tr>
          <tr>
            <td>3</td>
            <td>jeymoh</td>
            <td>James</td>
            <td>Last</td>
            <td>james@gmail.com</td>
            <td> 1/10/2020 </td>
          </tr>
        </tbody>
        <tfoot>
          <p class="text-danger">(Iterate through users here)</p>
        </tfoot>
      </table>
    </div>

  </div>

</main>

<?php

include "../../components/footer.php";

?>