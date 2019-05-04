<?php
$db = mysqli_connect("localhost", "root", "", "homestead");
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "UPDATE candidates SET earned_vote = earned_vote + 1 WHERE id=$id";
    if (mysqli_query($db, $sql)=== true) {
        echo json_encode(array('success' => true));
        exit;
    } else {
        echo json_encode(array('success' => false));
        exit;
    }
    
    mysqli_close($db);
}
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $sql = "SELECT * FROM `candidates` ORDER BY `candidates`.`earned_vote` DESC";
    $result = mysqli_query($db, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        $data = [];
    }
    mysqli_close($db);
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>jQuery.post demo</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            tr td:last-child {
                width: 200px;
                text-align: center;
            }
            table{
                padding-top:30px;
                margin-top:190px;
            }
        

            p{
  color: white; 
  font-family: "Courier";
  font-size: 20px;
  white-space: nowrap;
  overflow: hidden;
  width: 30em;
  animation: type 4s steps(60, end); 
}

p:nth-child(2){
  animation: type2 8s steps(60, end);
}

p a{
  color: white;
  text-decoration: none;
}


@keyframes type{ 
  from { width: 0; } 
} 

@keyframes type2{
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; } 
} 

@keyframes blink{
  to{opacity: .0;}
}

::selection{
  background: black;
}

        </style>
    </head>

    <body style="background-image:url('https://scontent-yyz1-1.cdninstagram.com/vp/86e7e87f868ea5dfeda4a86e3fd4afbe/5D764D04/t51.2885-15/e35/50167476_225312961753324_2903735586409567211_n.jpg?_nc_ht=scontent-yyz1-1.cdninstagram.com&se=8');">
  <p>My name Is muhammad Mahendra</p>
  <p>I want to be a full stack developer
  <a href="https://twitter.com/@samarkandiy" title="Azik Samarkandiy">@muhammad Mahendra</a></p>
        <table class="table table-dark"  border="1">
            <?php
                foreach ($data as $k) {
                    echo "
                    <tr id=".$k["id"].">
                        <td>".$k["name"]."</td>
                        <td rowspan='2'><button type='submit'><i class='material-icons'>add</i></button></td>
                    </tr>
                    <tr>
                        <td id='suara".$k["id"]."'>Total suara: ".$k["earned_vote"]."</td>
                    </tr>
                ";
                }
                
                ?>
        </table>

        <script>
        var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

            $("button").click(function(e) {
                e.preventDefault();
                // Get some values from elements on the page:
                var id = $(this).closest('tr').attr('id');
                $.ajax({
                        method: "POST",
                        url: 'suara.php',
                        data: {
                            id: id
                        }
                    })
                    .done(function(data) {
                        var content = $("#suara" + id).html().replace(/[^\d.]/g, '');
                        $("#suara" + id).empty().append("Perolehan suara: " + (parseInt(content) + 1));
                    });
            });
        </script>

    </body>

</html>