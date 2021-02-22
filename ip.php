<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info.pp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .btn-primary{

            margin-left:370px;
            width:400px;
            border-radius:30px;

        }

    
    </style>

</head>
<body>
    
            <br><img src="ip2.png" alt="" style="margin-left:585px"><br><br>

    <form action="" method="post">
        
        <div class="container">
        
            <div class="row">
            
            <div class="col-lg-12">
                <div class="form-group">

                    <input type="text" class="form-control" id="inp" name="ip" placeholder="search any ip"/>
                    <br><br><button id="b" class="btn btn-primary" name="b">Search</button><br><br>
                    
                </div>
                <div>
                



                <table class="table table-dark">

                <thead>
                
                    <th> Ip </th>
                    <th> Hostname </th>
                    <th> City </th>
                    <th> Country </th>
                    <th> Loc </th>
                    <th> org </th>
                    <th> Timezone </th>

                </thead>

                <tbody>

                    <tr>


                    <?php
                    
                        if(isset($_POST['ip'])){
                            if (empty($_POST["ip"])) {
                                echo(
                                    '<div class="alert alert-danger" role="alert">
                                        Ip is required!
                                     </div>
                                    '
                                    
                                
                                );
                              } else {
                                  $ip_address = $_POST['ip'];
                                  $details = json_decode(file_get_contents("http://ipinfo.io/{$ip_address}/json"));
      
      
                                  echo "<th>" .$details->ip ."</th>";
                                  echo "<th>" .$details->hostname ."</th>";
                                  echo "<th>" .$details->city ."</th>";
                                  echo "<th>" .$details->country ."</th>";
                                  echo "<th>" .$details->loc ."</th>";
                                  echo "<th>" .$details->org ."</th>";
                                  echo "<th>" .$details->timezone ."</th>";
      
                                  echo "<br>";
                              }
                            
   

                        }
                        
                        
                    
                    ?>
                    </tr>

                  </tbody>

                </table>


                </div>
            </div>
          </div>

        </div>


    </form>

    <script
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initAutocomplete&libraries=places&v=weekly"
    async
    ></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

     <script src="ipinfo.js" defer></script>                   

</body>
</html>
