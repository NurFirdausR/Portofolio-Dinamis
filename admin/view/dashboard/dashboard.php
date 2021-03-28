<div class="row d-flex justify-content-end">
    <div class="pr-5">
        <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="ni ni-tv-2"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            </ol>
        </nav>
    </div>
</div>
<br>
<table id="tabel-data">
    <thead class='text-lg-center'>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Job Title</th>
            <th>Email</th>
            <th>message</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../../../connect.php';
        $employee = mysqli_query($conn, "SELECT * FROM contact");
        while ($row = mysqli_fetch_array($employee))
        //  number_format($row['budget_contact'],2,',','.');
        {
            echo "<tr class='text-lg-center'>
            <td>" . $row['nama_contact'] . "</td>
            <td>" . $row['email_contact'] . "</td>
            <td>" . $row['service_contact'] . "</td>
            <td>Rp " . $row['budget_contact'] . "</td>
            <td><textarea disabled>" . $row['message_contact'] . "</textarea></td>
        </tr>";
        }
        ?>
    </tbody>


</table>