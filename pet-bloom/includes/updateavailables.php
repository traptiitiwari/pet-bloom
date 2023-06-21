<div class="container">
    <div class="jumbotron">
        <h1 class="display-5 text-center">Update Product</h1>
        <hr class="my-4">
        <div class="table-responsive">  
        <table class="table">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRIZE</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php include('includes/dbconn.php');
                $id = 0;
                $sql = ("SELECT *  FROM tblcnp order by id DESC") or die (mysqli_error());
                $result=mysqli_query($con, $sql);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $des = $row['description'];
                        $prize = $row['prize'];
                        $stat = $row['status'];
                        $image = $row['image'];?>
                    <tr>
                        <td><strong><?php echo $row['name'];?></strong></td>
                        <td><strong><?php echo $row['description'];?></strong></td>
                        <td><strong><?php echo 'P'.$row['prize'];?></strong></td>
                        <td><strong><?php echo $row['status'];?></strong></td>
                        <td><a href="#updateModal<?php echo $id;?>" data-toggle="modal" data-target="#updateModal<?php echo $id;?>" class="btn btn-warning">Update</a> | <a href="#deleteModal<?php echo $id;?>" data-toggle="modal" data-target="#deleteModal<?php echo $id;?>" class="btn btn-danger"> Delete</a></td>
                    </tr>
                    <?php include('updateModal.php')?>
                    <?php include('deleteModal.php')?>
                    <?php }}?>
                </tbody>
        </table>
    </div>
</div>

