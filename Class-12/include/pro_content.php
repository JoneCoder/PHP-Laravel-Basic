<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr class="table-primary">
                        <th>Places You've Lived</th>
                    </tr>
                    <tr class="table-light">
                        <td>Current City .</td>
                        <td><?php echo $after_assoc['city'].','.$after_assoc['state']; ?></td>
                    </tr>
                    <tr class="table-light">
                        <td>Hometown .</td>
                        <td><?php echo $after_assoc['city'].','.$after_assoc['state']; ?></td>
                    </tr>

                    <!--contact info-->
                    <tr class="table-primary">
                        <th>Contact Info</th>
                    </tr>
                    <tr class="table-light">
                        <td>Mobile .</td>
                        <td><?php echo $after_assoc['phone']; ?></td>
                    </tr>
                    <tr class="table-light">
                        <td>Profile Link .</td>
                        <td><?php echo $username; ?></td>
                    </tr>
                    <tr class="table-light">
                        <td>E-mail .</td>
                        <td><?php echo $after_assoc['email']; ?></td>
                    </tr>
                    <tr class="table-light">
                        <td>Website .</td>
                        <td><?php echo $after_assoc['website']; ?></td>
                    </tr>

                    <!--basic info-->
                    <tr class="table-primary">
                        <th>Basic Info</th>
                    </tr>
                    <tr class="table-light">
                        <td>Birthday .</td>
                        <td><?php echo $after_assoc['birthday']; ?></td>
                    </tr>
                    <tr class="table-light">
                        <td>Interested In .</td>
                        <td><?php echo $after_assoc['interested']; ?></td>
                    </tr>
                    <tr class="table-light">
                        <td>Gender .</td>
                        <td><?php echo $after_assoc['gender']; ?></td>
                    </tr>
                    <tr class="table-light">
                        <td>Languages .</td>
                        <td><?php echo $after_assoc['languages']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>