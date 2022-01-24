<!DOCTYPE html>  
<html>  
<head>  
    <title>Baby Form Add</title>  
</head>  
<style>
* {
  text-align: center;
  /* text-decoration-color: black; */
}
.text{
    color: black;
}
table{
  padding: 2em;
  background-color: #eef;
  display: block;
  color: #fff;
  border-top-right-radius: 8px; 
  border-top-left-radius: 8px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<body>  
    <form method="post" action="<?php echo site_url('index.php/form_controller/savingdata'); ?>" require>  
        <table>  
            <tr>  
                <td class="text">Name:</td>  
                <td>:</td>  
                <td><input type="text" name="name" maxlength="20" minlength="3" required></td>
            </tr>  
            <tr>  
                <td class="text">Meaning:</td>  
                <td>:</td>  
                <td><input type="text" name="meaning"></td>  
            </tr>  
            <tr>  
                <td class="text">Gender:</td>  
                <td>:</td>  
                <td><input type="text" name="gender" required></td>  
            </tr>  
            <tr>  
                <td class="text">Religion:</td>  
                <td>:</td>  
                <td><input type="text" name="religion"></td>  
            </tr><br><br>  
            <tr>  
                <input type="submit" name="submit" class="button" value="Save">  
            </tr>  
        </table>  
    </form>  
    <table border="1">  
        <thead class="text">  
            <th>ID</th>  
            <th>NAME</th>  
            <th>MEANING</th>  
            <th>GENDER</th>  
            <th>RELIGION</th>  
            <th>ACTION</th>  
        </thead>  
        <tbody class="text">  
            <?php  
                foreach($this->a->fetchtable() as $row)  
                {  
                    //name has to be same as in the database.  
                    echo "<tr>  
                                <td>$row->id</td>  
                                <td>$row->name</td>  
                                <td>$row->meaning</td>  
                                <td>$row->gender</td>  
                                <td>$row->religion</td>  
                    </tr>";  
                }  
            ?>  
        </tbody>  
    </table>  

</body>  
</html>  
